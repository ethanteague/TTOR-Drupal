<?php

namespace Drupal\same_page_preview\Form;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\InvokeCommand;

use Drupal\node\Form\NodePreviewForm;

/**
 * Contains a form with controls for same page preview.
 *
 * @internal
 */
class PreviewControlsForm extends NodePreviewForm {

  /**
   * {@inheritdoc}
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
  public function buildForm(array $form, FormStateInterface $form_state, EntityInterface $node = NULL) {
    $view_mode = $node->preview_view_mode;

    $query_options = ['query' => ['uuid' => $node->uuid()]];
    $query = $this->getRequest()->query;
    if ($query->has('destination')) {
      $query_options['query']['destination'] = $query->get('destination');
    }

    $form['button_group'] = [
      '#type' => 'container',
      '#attributes' => [
        'class' => [
          'button-group',
        ],
      ],
    ];

    $form['button_group']['refresh'] = [
      '#type' => 'button',
      '#value' => $this->t('Refresh'),
      '#ajax' => [
        'callback' => '::refreshCallback',
        'event' => 'click',
      ],
      '#options' => [
        'attributes' => [
          'class' => ['node-preview-refresh'],
        ],
      ] + $query_options,
    ];
    $form['#attached']['library'][] = 'same_page_preview/same_page_preview';

    $route_parameters = [
      'node_preview' => $node->uuid(),
      'view_mode_id' => $view_mode,
    ];

    $form['button_group']['new_window'] = [
      '#type' => 'link',
      '#title' => $this->t('New Window'),
      '#url' => Url::fromRoute('entity.node.preview', $route_parameters),
      '#options' => [
        'attributes' => [
          'class' => ['button', 'new-window'],
          'style' => 'width: auto; margin-right: 0.625rem',
        ],
      ] + $query_options,
    ];

    // Always show full as an option, even if the display is not enabled.
    $view_mode_options = ['full' => $this->t('Full')] + $this->entityDisplayRepository->getViewModeOptionsByBundle('node', $node->bundle());

    // Unset view modes that are not used in the front end.
    unset($view_mode_options['default']);
    unset($view_mode_options['rss']);
    unset($view_mode_options['search_index']);

    $form['uuid'] = [
      '#type' => 'hidden',
      '#value' => $node->uuid(),
    ];

    $form['view_mode'] = [
      '#type' => 'select',
      '#title' => $this->t('View mode'),
      '#options' => $view_mode_options,
      '#default_value' => $view_mode,
      '#ajax' => [
        'callback' => '::viewModeCallback',
        'event' => 'change',
      ],
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Switch'),
      '#attributes' => [
        'class' => ['js-hide'],
      ],
    ];

    return $form;
  }

  /**
   * Ajax callback for preview refresh control.
   *
   * Triggers a preview refresh.
   */
  public function refreshCallback(array $form, FormStateInterface $form_state) {
    $response = new AjaxResponse();
    // Invoke command for a synthetic click on the preview button.
    $response->addCommand(new InvokeCommand(NULL, 'samePagePreviewTriggerPreview'));
    return $response;
  }

  /**
   * Ajax callback for view mode controls.
   *
   * Reloads preview using specified view mode.
   */
  public function viewModeCallback(array $form, FormStateInterface $form_state) {
    $response = new AjaxResponse();
    $response->addCommand(new InvokeCommand(NULL, 'samePagePreviewRenderPreview', [
      NULL, $form_state->getValue('view_mode'),
    ])
    );
    return $response;
  }

}
