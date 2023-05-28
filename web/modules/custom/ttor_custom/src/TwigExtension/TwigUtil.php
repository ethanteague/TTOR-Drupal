<?php

namespace Drupal\ttor_custom\TwigExtension;

use Drupal\node\NodeInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Class TwigUtil for TTOR custom.
 */
class TwigUtil extends AbstractExtension {

  /**
   * Returns the available functions and creates them.
   */
  public function getFunctions() {
    return [
      new TwigFilter('bg_color', [$this, 'printBgColor']),
    ];
  }

  /**
   * Gets the bg color.
   *
   * @return string
   *   The bg color.
   */
  public function printBgColor() {
    $node = \Drupal::routeMatch()->getParameter('node');
    if ($node instanceof NodeInterface) {
      return $node->field_header_background_color->value ?? NULL;
    }
  }

}
