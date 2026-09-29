# Integration Tests

Tests based on `WP_UnitTestCase` that boot a real WordPress test environment (`wordpress-develop`) and load the plugin: hooks, options, custom data, REST endpoints, capabilities.

## One-time setup

1. `composer install` in the plugin root.
2. Clone `wordpress-develop`:
   ```bash
   git clone https://github.com/WordPress/wordpress-develop.git C:/WordpressDEV/wordpress-develop
   ```
   Another path is fine if `WP_TESTS_DIR` points to its `tests/phpunit` folder.
3. Create an **empty, dedicated** database, e.g. `fsas_wordpress_test`, on the MySQL server of a running Local site (host `127.0.0.1`, port from the site's *Database* tab):
   ```sql
   CREATE DATABASE IF NOT EXISTS fsas_wordpress_test CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   ```
   The suite drops and recreates the `wptests_` tables on every run. Never point it at the Local site's own database or any shared one.
4. Copy `wp-tests-config-sample.php` to `wp-tests-config.php` in `wordpress-develop/tests/phpunit/` (or `wordpress-develop/`, per its docs) and set `ABSPATH` to `wordpress-develop/src/`, `DB_NAME=fsas_wordpress_test`, `DB_USER`, `DB_PASSWORD` and `DB_HOST=127.0.0.1:<port>`.
5. Check the connection (optional):
   ```powershell
   $env:FSAS_TEST_DB_PORT = "10089"
   php tests/check-db-connection.php
   ```
   Supported variables: `FSAS_TEST_DB_HOST`, `FSAS_TEST_DB_PORT`, `FSAS_TEST_DB_USER`, `FSAS_TEST_DB_PASSWORD`, `FSAS_TEST_DB_NAME`.

The Local MySQL port can change when sites are restarted: update `DB_HOST` if the connection fails.

## Run

```powershell
# Only if wordpress-develop is not in C:/WordpressDEV/wordpress-develop
$env:WP_TESTS_DIR = "C:/your/path/wordpress-develop/tests/phpunit"
composer test:integration
```

The Local site must be running (MySQL only runs while the site is on).

## Conventions

- Files end with `Test.php`, live in `tests/integration/`, use the `FSAS\Tests\Integration` namespace and extend `WP_UnitTestCase`.
- `tests/bootstrap-integration.php` loads the Composer autoloader and the plugin main file on `muplugins_loaded`.

## Troubleshooting

- `WordPress test library not found`: check `WP_TESTS_DIR`.
- Database connection errors: check `wp-tests-config.php`, the port, and that the Local site is running.
- No tests executed: file names must end with `Test.php`.
