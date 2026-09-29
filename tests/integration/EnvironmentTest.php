<?php
/**
 * Integration smoke test for the WordPress test environment.
 *
 * @package FederatedSamlSso
 */

namespace FSAS\Tests\Integration;

use WP_UnitTestCase;

/**
 * Verifies that WordPress boots and the plugin loads in the integration environment.
 */
class EnvironmentTest extends WP_UnitTestCase {

	/**
	 * Ensure WordPress is loaded and the plugin main file defined its constants.
	 *
	 * @return void
	 */
	public function test_wordpress_boots_and_plugin_loads() {
		$this->assertTrue( defined( 'FSAS_RUNNING_TESTS' ) );
		$this->assertTrue( function_exists( 'add_action' ) );
		$this->assertTrue( defined( 'FSAS_VERSION' ) );
		$this->assertTrue( defined( 'FSAS_PLUGIN_FILE' ) );
		$this->assertTrue( defined( 'FSAS_PLUGIN_DIR' ) );
	}
}
