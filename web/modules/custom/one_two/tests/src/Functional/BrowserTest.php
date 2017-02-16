<?php
namespace Drupal\Test\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Example functional test.
 *
 * @group one_two
 */
class BrowserTest extends BrowserTestBase {



  /**
   * Test register.
   */
  function testDrupalGet() {
    $this->drupalGet('user/register');
    $this->assertSession()->pageTextContains( 'Create new account');
    $this->assertSession()->fieldExists( 'Email address');
    $this->assertSession()->fieldExists( 'Username');
    $this->assertSession()->buttonExists( 'Create new account');
    $this->assertSession()->pageTextNotContains( 'Joomla');
  }
}
