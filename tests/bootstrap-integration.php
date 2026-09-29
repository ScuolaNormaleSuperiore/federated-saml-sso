<?php
/**
 * Integration tests bootstrap.
 *
 * Boots the WordPress test framework (wordpress-develop) and loads the plugin.
 *
 * @package FederatedSamlSso
 */

if ( ! defined( 'FSAS_RUNNING_TESTS' ) ) {
	define( 'FSAS_RUNNING_TESTS', true );
}

$fsas_autoload = dirname( __DIR__ ) . '/vendor/autoload.php';

if ( ! file_exists( $fsas_autoload ) ) {
	die( "Composer autoloader not found. Run 'composer install' in the plugin root.\n" );
}

require_once $fsas_autoload;

// Get the WordPress tests framework directory.
$fsas_tests_dir = getenv( 'WP_TESTS_DIR' );

if ( ! $fsas_tests_dir ) {
	$fsas_tests_dir = 'C:/WordpressDEV/wordpress-develop/tests/phpunit';
}

// Verify the path exists.
if ( ! file_exists( $fsas_tests_dir . '/includes/functions.php' ) ) {
	die( "WordPress test library not found at: {$fsas_tests_dir}\n" );
}

// Give access to tests_add_filter() function.
require_once $fsas_tests_dir . '/includes/functions.php';

/**
 * Manually load the plugin being tested.
 *
 * @return void
 */
function fsas_manually_load_plugin() {
	$plugin_main_file = dirname( __DIR__ ) . '/federated-saml-sso.php';

	if ( ! file_exists( $plugin_main_file ) ) {
		die( "Plugin bootstrap not found at: {$plugin_main_file}\n" );
	}

	require $plugin_main_file;
}

// Load the plugin before WordPress boots fully.
tests_add_filter( 'muplugins_loaded', 'fsas_manually_load_plugin' );

// Start up the WordPress testing environment.
require $fsas_tests_dir . '/includes/bootstrap.php';
