# Unit Tests

Fast tests for pure PHP logic (parsing, mapping, validation, authorization rules). No WordPress, no database.

## Setup

```bash
composer install
```

## Run

```bash
composer test:unit
```

## Conventions

- Files end with `Test.php`, live in `tests/unit/`, use the `FSAS\Tests\Unit` namespace and extend `PHPUnit\Framework\TestCase`.
- Classes under test are autoloaded by Composer (PSR-4, `FSAS\` => `includes/`). `tests/bootstrap-unit.php` only loads `vendor/autoload.php`: no per-class `require`.
- Anything that needs hooks, options, the database, REST routes or templates belongs in `tests/integration/`.

## Pre-commit

`.githooks/pre-commit` runs `composer test:unit` when `vendor/bin/phpunit` exists. Enable the hooks once per clone:

```bash
git config core.hooksPath .githooks
```

Keep this suite fast and deterministic.
