<?php

declare(strict_types=1);

namespace Drupal\Tests\media_video_micromodal\Functional;

use Drupal\Tests\media\Functional\MediaFunctionalTestBase;

/**
 * Test description.
 *
 * @group media_video_micromodal
 */
final class MvmTest extends MediaFunctionalTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'claro';

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'media',
    'media_video_micromodal',
  ];

  /**
   * Test callback.
   */
  public function testDisplayConfiguration(): void {

    $media_type = $this->createMediaType('oembed:video');

    $this->drupalGet('/admin/structure/media/manage/' . $media_type->id() . '/display');

    $assert = $this->assertSession();
    $assert->statusCodeEquals(200);
    $assert->optionExists('edit-fields-thumbnail-type', 'micromodal_field_formatter');
    $assert->optionExists('edit-fields-name-type', 'micromodal_field_formatter');
    $assert->optionExists('edit-fields-field-media-oembed-video-type', 'micromodal_field_formatter');

  }

}
