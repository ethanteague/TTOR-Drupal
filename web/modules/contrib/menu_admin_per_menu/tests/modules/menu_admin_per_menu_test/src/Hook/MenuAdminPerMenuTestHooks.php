<?php

namespace Drupal\menu_admin_per_menu_test\Hook;

use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Hook\Attribute\Hook;

/**
 * Hook implementations for menu_admin_per_menu_test.
 */
class MenuAdminPerMenuTestHooks {

  /**
   * Implements hook_menu_admin_per_menu_get_permissions_alter().
   */
  #[Hook('menu_admin_per_menu_get_permissions_alter')]
  public function menuAdminPerMenuGetPermissionsAlter(array &$perm_menus, AccountInterface $account) {
    if ($account->getAccountName() === 'Menu 3 user') {
      $perm_menus['administer menu_3 menu items'] = 'menu_3';
    }
  }

}
