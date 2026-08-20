<?php

namespace Drupal\Tests\same_page_preview\Functional;

use Behat\Mink\Exception\ExpectationException;
use Drupal\Tests\node\Functional\NodeTestBase;

/**
 * Tests the same page preview edit form.
 *
 * @group same_page_preview
 */
class SamePagePreviewEditFormTest extends NodeTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = ['same_page_preview'];

  /**
   * {@inheritdoc}
   */
  protected $profile = 'standard';

  /**
   * Theme to use for tests.
   *
   * @var string
   */
  protected $defaultTheme = 'olivero';

  /**
   * See if we're using Claro as an admin theme.
   */
  public function testUsingClaroAdminTheme() {
    // Go to an administrative page.
    $this->drupalGet('node/add/page');

    try {
      $this->assertSession()->statusCodeEquals(200);

      // Check if claro is the administrative theme.
      $this->assertSession()->responseContains('claro/css/base/elements.css');
    }
    catch (ExpectationException $e) {
      $this->fail('Claro is not the administrative theme.');
    }
  }

  /**
   * Test node edit form with new same_page_preview.
   */
  public function testPreviewButtonsExists() {
    // Prerequisites.
    $this->drupalGet('node/add/page');
    $session = $this->assertSession();

    // Does the page have the preview buttons?
    try {
      $session->assert(
        !$this->getSession()
          ->getPage()
          ->hasLink("I don't exist"), "Shouldn't have dummy button."
      );
      $session->assert(
        $this->getSession()
          ->getPage()
          ->hasLink('Toggle Preview'), "I should have a Toggle Preview button."
      );
    }
    catch (ExpectationException $e) {
      $this->fail('Preview buttons not found.');
    }
  }

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    // Set the administrative theme to be Claro.
    $this->config('system.theme')->set('admin', 'claro')->save();
    $this->config('node.settings')->set('use_admin_theme', '1')->save();

    $adminUser = $this->drupalCreateUser(
      [
        'edit own page content',
        'create page content',
        'access same_page_preview',
        'view the administration theme',
      ]
    );

    $this->drupalLogin($adminUser);
  }

}
