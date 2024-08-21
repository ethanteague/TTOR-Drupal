<?php

namespace Drupal\same_page_preview\Form;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\InvokeCommand;
use Drupal\Core\Render\Element;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\node\NodeForm;

/**
 * Extend node form to add same page preview.
 */
class PreviewNodeForm extends NodeForm {

  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  protected function actionsElement(array $form, FormStateInterface $form_state) {
    $element = $this->actions($form, $form_state);

    if (isset($element['delete'])) {
      // Move the delete action as last one, unless weights are explicitly
      // provided.
      $delete = $element['delete'];
      unset($element['delete']);
      $element['delete'] = $delete;
      $element['delete']['#button_type'] = 'danger';
    }

    if (isset($element['submit'])) {
      // Give the primary submit button a #button_type of primary.
      $element['submit']['#button_type'] = 'primary';
    }

    if (isset($element['preview'])) {
      $element['preview']['#value'] = $this->t('Refresh Preview');
      // Add ajax callback to preview button.
      $element['preview']['#ajax'] = [
        'callback' => '::ajaxCallback',
        'event' => 'click',
      ];
      $element['preview']['#attributes']['style'] = 'display: none;';
    }

    $count = 0;
    foreach (Element::children($element) as $action) {
      $element[$action] += [
        '#weight' => ++$count * 5,
      ];
    }

    if (!empty($element)) {
      $element['#type'] = 'actions';
    }

    return $element;
  }

  /**
   * Ajax callback for same page preview.
   *
   * Passes current uuid client side in order to reload preview pane.
   */
  public function ajaxCallback(array $form, FormStateInterface $form_state) {
    $entity = $form_state->getFormObject()->getEntity();

    // Reload preview pane.
    $response = new AjaxResponse();
    // Need to pass the current uuid from form state here. Since the entity
    // doesn't exist yet, the value will change on every preview event on the
    // add form.
    $response->addCommand(new InvokeCommand(NULL, 'samePagePreviewRenderPreview', [$entity->uuid()]));
    return $response;
  }

}
