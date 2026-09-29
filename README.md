# federated-saml-sso
Federated SAML SSO is a plugin for WordPress

## Tests

Requires PHP 8.1+ and Composer. Setup once: `composer install`.

### Unit tests

Pure PHP, no WordPress, no database.

```bash
composer test:unit
```

Enable the git hooks (they run the unit tests on commit): `git config core.hooksPath .githooks`

### Integration tests

Run inside a real WordPress test environment (`wordpress-develop`).

One-time setup:

1. Clone `wordpress-develop` to `C:/WordpressDEV/wordpress-develop` (or set `WP_TESTS_DIR` to its `tests/phpunit` folder).
2. Create an empty, dedicated database (e.g. `fsas_wordpress_test`) on the MySQL server of a running Local site. Never use the site's own database: the tests drop and recreate the `wptests_` tables.
3. Create `wp-tests-config.php` in `wordpress-develop/tests/phpunit/` with `DB_NAME`, `DB_USER`, `DB_PASSWORD` and `DB_HOST=127.0.0.1:<local-mysql-port>`.

Run (the Local site must be running):

```bash
composer test:integration
```

Details: [tests/unit/README.md](tests/unit/README.md), [tests/integration/README.md](tests/integration/README.md).
