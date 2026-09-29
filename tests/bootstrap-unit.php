<?php
/**
 * Unit tests bootstrap.
 *
 * Boots only the Composer autoloader: no WordPress, no database.
 *
 * @package FederatedSamlSso
 */

if ( ! defined( 'FSAS_RUNNING_TESTS' ) ) {
	define( 'FSAS_RUNNING_TESTS', true );
}

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

$fsas_autoload = dirname( __DIR__ ) . '/vendor/autoload.php';

if ( ! file_exists( $fsas_autoload ) ) {
	die( "Composer autoloader not found. Run 'composer install' in the plugin root.\n" );
}

require_once $fsas_autoload;
