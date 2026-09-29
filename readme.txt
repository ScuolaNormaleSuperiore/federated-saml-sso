=== Federated SAML SSO ===
Contributors: 
Tags: saml, sso, single sign-on, federated identity
Requires at least: 6.0
Requires PHP: 8.1
Stable tag: trunk
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Initial development skeleton for a future SAML 2.0 single sign-on integration.

== Description ==

Federated SAML SSO is intended to make a WordPress site a SAML 2.0 Service Provider for standards-compliant external Identity Providers.

This version contains only the plugin bootstrap. SAML endpoints, settings, authentication, user provisioning, and diagnostic logging are not implemented while analysis is still in progress.

== Installation ==

1. Upload the `federated-saml-sso` directory to `/wp-content/plugins/`.
2. Activate Federated SAML SSO through the Plugins screen in WordPress.

Activation currently registers no configuration or SSO functionality.

== Changelog ==

= 0.1.0 =
* Initial non-functional development skeleton.
