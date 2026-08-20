<?php

namespace Drupal\same_page_preview\Controller;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityRepositoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormBuilderInterface;
use Drupal\Core\Render\RendererInterface;
use Drupal\Core\Routing\RouteMatchInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\Url;
use Drupal\node\Controller\NodePreviewController;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Defines a controller to render a single node in preview in an iframe.
 */
class PreviewPaneController extends NodePreviewController {

  use StringTranslationTrait;

  /**
   * The current route match.
   *
   * @var \Drupal\Core\Routing\RouteMatchInterface
   */
  protected RouteMatchInterface $routeMatch;

  /**
   * The form builder.
   *
   * @var \Drupal\Core\Form\FormBuilderInterface
   */
  protected FormBuilderInterface $formBuilder;

  /**
   * Creates a NodeViewController object.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\Core\Render\RendererInterface $renderer
   *   The renderer service.
   * @param \Drupal\Core\Entity\EntityRepositoryInterface $entity_repository
   *   The entity repository.
   * @param \Drupal\Core\Routing\RouteMatchInterface $route_match
   *   The current route match.
   * @param \Drupal\Core\Form\FormBuilderInterface $form_builder
   *   The form builder.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager, RendererInterface $renderer, EntityRepositoryInterface $entity_repository, RouteMatchInterface $route_match, FormBuilderInterface $form_builder) {
    parent::__construct($entity_type_manager, $renderer, $entity_repository);
    $this->routeMatch = $route_match;
    $this->formBuilder = $form_builder;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('renderer'),
      $container->get('entity.repository'),
      $container->get('current_route_match'),
      $container->get('form_builder')
    );
  }

  /**
   * {@inheritDoc}
   */
  public function view(EntityInterface $node_preview, $view_mode_id = 'full', $langcode = NULL) {
    $node_preview->preview_view_mode = $view_mode_id;

    $build['#attached']['library'][] = 'node/drupal.node.preview';

    $build['preview_pane'] = [
      '#attributes' => [
        'class' => [
          'preview-pane',
        ],
        // @todo abstract styles into a css file.
        'style' => 'display: flex; flex-direction: column; height: 100%;',
      ],
      '#type' => 'container',
    ];

    $build['preview_pane']['preview_controls'] = [
      '#attributes' => [
        'class' => ['node-preview-container', 'container-inline'],
      ],
      '#type' => 'container',
    ];

    $node = $this->routeMatch->getParameter('node_preview');
    $bundle = $node->bundle() ?? '';
    $label = $node->label() ?? $this->t('unsaved content');

    $form = $this->formBuilder->getForm('\Drupal\same_page_preview\Form\PreviewControlsForm', $node);
    $build['preview_pane']['preview_controls']['view_mode'] = $form;

    // @todo Remove in favor of Drupal 10.1.0 format as described here:
    // https://www.drupal.org/node/3264760
    $build['preview_pane']['preview'] = [
      '#access' => $view_mode_id !== \DRUPAL_DISABLED && ($node_preview->access('create') || $node_preview->access(
            'update',
          )),
      '#attributes' => [
        'allow' => 'fullscreen',
        'class' => ['preview'],
        'loading' => 'eager',
        'name' => 'preview',
        'src' => $this->getPreviewUrl($node_preview, $view_mode_id) . '?mode=same_page_preview',
        'style' => 'width: 100%; height: 100%;',
        'title' => $this->t('Preview of @bundle : @node_title', [
          '@bundle' => $bundle,
          '@node_title' => $label,
        ]),
      ],
      '#tag' => 'iframe',
      '#type' => 'html_tag',
    ];

    return $build;
  }

  /**
   * Generate url for the node preview.
   *
   * @param \Drupal\Core\Entity\EntityInterface $entity
   *   The entity that is going to be previewed.
   * @param string $view_mode_id
   *   The view mode id.
   *
   * @return string
   *   A URL object that will be used to render the preview.
   */
  private function getPreviewUrl(EntityInterface $entity, string $view_mode_id): string {
    // Pass parameters used for preview.
    $route_parameters = [
      'node_preview' => $entity->uuid(),
      'view_mode_id' => $view_mode_id,
    ];

    $route = Url::fromRoute('entity.node.preview', $route_parameters);

    return $route->toString();
  }

  /**
   * Overrides \Drupal\Core\Entity\Controller\EntityViewController::title().
   *
   * Set preview pane title to "Preview" always.
   *
   * @param \Drupal\Core\Entity\EntityInterface|null $node_preview
   *   The node preview entity.
   *
   * @return \Drupal\Core\StringTranslation\TranslatableMarkup
   *   Title of the preview pane.
   */
  public function title(?EntityInterface $node_preview = NULL): TranslatableMarkup {
    return $this->t('Preview');
  }

}
