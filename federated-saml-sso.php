<?php
/**
 * Plugin Name:       Federated SAML SSO
 * Description:       Provides a future SAML 2.0 single sign-on integration for WordPress.
 * Version:           0.1.0
 * Requires at least: 6.0
 * Requires PHP:      8.1
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       federated-saml-sso
 * Domain Path:       /languages
 *
 * @package FederatedSamlSso
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin version.
 *
 * @var string
 */
define( 'FSAS_VERSION', '0.1.0' );

/**
 * Absolute path to the main plugin file.
 *
 * @var string
 */
define( 'FSAS_PLUGIN_FILE', __FILE__ );

/**
 * Absolute path to the plugin directory.
 *
 * @var string
 */
define( 'FSAS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

/**
 * Absolute URL to the plugin directory.
 *
 * @var string
 */
define( 'FSAS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Functional modules will be introduced after the analysis phase is complete.
