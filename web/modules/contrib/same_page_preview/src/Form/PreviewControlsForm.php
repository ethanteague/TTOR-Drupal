<?php

namespace Drupal\same_page_preview\Form;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\InvokeCommand;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\node\Form\NodePreviewForm;

/**
 * Contains a form with controls for same page preview.
 *
 * @internal
 */
class PreviewControlsForm extends NodePreviewForm {

  /**
   * {@inheritDoc}
   */
  public function getFormId() {
    return 'same_page_preview_form_select';
  }

  /**
   * Form constructor.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   The current state of the form.
   * @param \Drupal\Core\Entity\EntityInterface $node
   *   The node being previews.
   *
   * @return array
   *   The form structure.
   */
  public function buildForm(array $form, FormStateInterface $form_state, ?EntityInterface $node = NULL): array {
    $view_mode = $node->preview_view_mode;
    $query_options = ['query' => ['uuid' => $node->uuid()]];
    $query = $this->getRequest()->query;

    if ($query->has('destination')) {
      $query_options['query']['destination'] = $query->get('destination');
    }

    $form['button_group'] = [
      '#attributes' => [
        'class' => [
          'button-group',
        ],
      ],
      '#type' => 'container',
    ];

    $form['button_group']['settings'] = [
      '#component' => 'same_page_preview:settings-button',
      '#props' => [
        'iconType' => 'settings',
        'label' => 'Settings',
      ],
      '#type' => 'component',
    ];

    $form['button_group']['new_window'] = [
      '#component' => 'same_page_preview:newwindow-button',
      '#props' => [
        'href' => Url::fromRoute(
          'entity.node.preview', [
            'node_preview' => $node->uuid(),
            'view_mode_id' => $view_mode,
          ],
        ),
        'iconType' => 'new-window',
        'label' => 'New Window',
      ],
      '#type' => 'component',
    ];

    $form['button_group']['full_screen'] = [
      '#component' => 'same_page_preview:fullscreen-button',
      '#props' => [
        'iconType' => 'full-screen',
        'label' => 'Full Screen',
      ],
      '#type' => 'component',
    ];

    // Always show full as an option, even if the display is not enabled.
    $view_mode_options = ['full' => $this->t('Full')] + $this->entityDisplayRepository->getViewModeOptionsByBundle(
            'node',
            $node->bundle()
        );

    // Unset view modes that are not used in the front end.
    unset($view_mode_options['default']);
    unset($view_mode_options['rss']);
    unset($view_mode_options['search_index']);

    $form['uuid'] = [
      '#type' => 'hidden',
      '#value' => $node->uuid(),
    ];

    $form['view_mode'] = [
      '#ajax' => [
        'callback' => '::viewModeCallback',
        'event' => 'change',
      ],
      '#default_value' => $view_mode,
      '#options' => $view_mode_options,
      '#title' => $this->t('View mode'),
      '#type' => 'select',
    ];

    $form['submit'] = [
      '#attributes' => [
        'class' => ['js-hide'],
      ],
      '#type' => 'submit',
      '#value' => $this->t('Switch'),
    ];

    $form['#attached']['library'][] = 'same_page_preview/same_page_preview';

    return $form;
  }

  /**
   * Ajax callback for view mode controls.
   *
   * Reloads preview using specified view mode.
   */
  public function viewModeCallback(array $form, FormStateInterface $form_state) {
    $response = new AjaxResponse();
    $response->addCommand(
          new InvokeCommand(
              NULL, 'samePagePreviewRenderPreview', [
                $form_state->getValue('view_mode'), NULL,
              ],
          ),
      );

    return $response;
  }

}
