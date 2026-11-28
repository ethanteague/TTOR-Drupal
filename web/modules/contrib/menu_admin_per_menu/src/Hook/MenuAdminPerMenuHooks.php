<?php

namespace Drupal\menu_admin_per_menu\Hook;

use Drupal\Core\Access\AccessResultInterface;
use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\Core\Hook\Order\Order;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\Url;
use Drupal\menu_admin_per_menu\MenuAdminPerMenuAccessInterface;
use Drupal\menu_link_content\Entity\MenuLinkContent;
use Drupal\system\Entity\Menu;

/**
 * Hook implementations for menu_admin_per_menu.
 */
class MenuAdminPerMenuHooks {

  use StringTranslationTrait;

  /**
   * Constructs a MenuAdminPerMenuHooks object.
   *
   * @param \Drupal\Core\Session\AccountInterface $currentUser
   *   The current user.
   * @param \Drupal\menu_admin_per_menu\MenuAdminPerMenuAccessInterface $allowedMenus
   *   The allowed menus service.
   */
  public function __construct(
    protected AccountInterface $currentUser,
    protected MenuAdminPerMenuAccessInterface $allowedMenus,
  ) {}

  /**
   * Implements hook_form_FORM_ID_alter() for 'menu_edit_form'.
   *
   * Hide menu properties for users that don't have the 'administer menu'
   * permission.
   */
  #[Hook('form_menu_edit_form_alter')]
  public function formMenuEditFormAlter(array &$form, FormStateInterface $form_state): void {
    if ($this->currentUser->hasPermission('administer menu')) {
      return;
    }

    $form['id']['#access'] = FALSE;
    $form['label']['#access'] = FALSE;
    $form['description']['#access'] = FALSE;
    $form['langcode']['#access'] = FALSE;
    // Hide third party settings provided by modules extending the menu
    // entity.
    $form['third_party_settings']['#access'] = FALSE;
  }

  /**
   * Implements hook_form_BASE_FORM_ID_alter() for 'node_form'.
   *
   * Runs last, so the menu fields added by menu_ui exist and their access can
   * be overridden.
   */
  #[Hook('form_node_form_alter', order: Order::Last)]
  public function formNodeFormAlter(array &$form, FormStateInterface $form_state): void {
    if (!isset($form['menu']['link']['menu_parent']) || $this->currentUser->hasPermission('administer menu')) {
      return;
    }

    $allowed_menus = $this->allowedMenus->getPerMenuPermissions($this->currentUser);

    $default_value = &$form['menu']['link']['menu_parent']['#default_value'];
    [$current_menu] = explode(':', $default_value ?? '', 2);
    // Disallow editing the menu item if there is a pre-existing menu item
    // belonging to a menu the user does not have permission to access.
    if (!empty($current_menu) && !in_array($current_menu, $allowed_menus)) {
      $form['menu']['#access'] = FALSE;
      return;
    }

    $options = &$form['menu']['link']['menu_parent']['#options'];
    $options = $this->filterParentOptions($this->currentUser, $options ?: []);
    $form['menu']['#access'] = count($options) > 0;
  }

  /**
   * Implements hook_ENTITY_TYPE_access() for entity type "menu_link_content".
   */
  #[Hook('menu_link_content_access')]
  public function menuLinkContentAccess(MenuLinkContent $entity, string $operation, AccountInterface $account): AccessResultInterface {
    return $this->allowedMenus->menuItemAccess($account, $entity);
  }

  /**
   * Implements hook_field_widget_complete_form_alter().
   *
   * Check for a menu entity reference field. When the default value is a menu
   * the current user doesn't have access to, hide the field.
   *
   * @see \Drupal\menu_admin_per_menu\Plugin\EntityReferenceSelection\MenuSelection
   */
  #[Hook('field_widget_complete_form_alter')]
  public function fieldWidgetCompleteFormAlter(array &$elements, FormStateInterface $form_state, array $context): void {
    if ($this->currentUser->hasPermission('administer menu')) {
      return;
    }

    /** @var \Drupal\field\FieldStorageConfigInterface $field_storage_config */
    $field_storage_config = $context['items']->getFieldDefinition()->getFieldStorageDefinition();
    if ($field_storage_config->getType() !== 'entity_reference' || $field_storage_config->getSetting('target_type') !== 'menu') {
      return;
    }

    if ($context['items']->isEmpty()) {
      return;
    }

    $access = TRUE;
    $allowed_menus = $this->allowedMenus->getPerMenuPermissions($this->currentUser);
    foreach ($context['items'] as $field_value) {
      if (!in_array($field_value->target_id, $allowed_menus, TRUE)) {
        $access = FALSE;
      }
    }

    // Hide the entity reference field from the frontend. When #access was
    // used, this also reset the entity reference field value.
    if ($access === FALSE) {
      $elements = [];
    }
  }

  /**
   * Implements hook_entity_operation_alter().
   *
   * Re-add the menu entity operations for users that have access to administer
   * the given menu.
   */
  #[Hook('entity_operation_alter')]
  public function entityOperationAlter(array &$operations, EntityInterface $entity, ?CacheableMetadata $cacheability = NULL): void {
    // The operations depend on the per-menu permissions of the current user.
    $cacheability?->addCacheContexts(['user.permissions']);
    if (!$entity instanceof Menu || !$this->allowedMenus->menuAccess($this->currentUser, $entity)->isAllowed()) {
      return;
    }

    $new_operations = [
      'list' => [
        'route' => 'entity.menu.edit_form',
        'title' => $this->t('List links'),
        'weight' => 10,
      ],
      'add' => [
        'route' => 'entity.menu.add_link_form',
        'title' => $this->t('Add link'),
        'weight' => 20,
      ],
    ];
    foreach ($new_operations as $key => $link) {
      $url = Url::fromRoute($link['route'], ['menu' => $entity->id()]);
      if ($url->access()) {
        $operations[$key] = [
          'title' => $link['title'],
          'url' => $url,
          'weight' => $link['weight'],
        ];
      }
    }
  }

  /**
   * Removes menu items for menus a user does not have permission to access.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user to check for access.
   * @param array $options
   *   An array of menu item labels keyed by menu item ID.
   *
   * @return array
   *   Filtered menu item labels keyed by menu item ID.
   */
  protected function filterParentOptions(AccountInterface $account, array $options): array {
    $allowed_menus = $this->allowedMenus->getPerMenuPermissions($account);

    foreach ($options as $key => $option) {
      [$menu] = explode(':', $key, 2);
      if (!in_array($menu, $allowed_menus)) {
        unset($options[$key]);
      }
    }

    return $options;
  }

}
