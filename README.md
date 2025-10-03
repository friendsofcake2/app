# CakePHP 2.x Application Skeleton

[![GitHub License](https://img.shields.io/github/license/friendsofcake2/app?label=License)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/friendsofcake2/app?label=Packagist)](https://packagist.org/packages/friendsofcake2/app)
[![PHP](https://img.shields.io/packagist/dependency-v/friendsofcake2/app/php?logo=php&logoColor=%23FFFFFF&label=PHP&labelColor=%23777BB4&color=%23FFFFFF)](https://packagist.org/packages/friendsofcake2/app)

This is the application skeleton for [CakePHP 2.x Community Maintained Fork](https://github.com/friendsofcake2/cakephp).

> [!WARNING]
> **Do not use CakePHP 2.x for new projects!** This fork is only for maintaining existing legacy applications.
> For new projects, please use [CakePHP 5.x](https://cakephp.org/) which has modern PHP support, better performance, and active development.

## Requirements

* PHP 8.0, 8.1, 8.2, 8.3, 8.4, 8.5
* Composer
* Database: MySQL 5.6+, PostgreSQL 9.4+, SQLite 3, or Microsoft SQL Server 2022+
* Required PHP extensions:
  * `mbstring` (optional, with Symfony polyfill fallback)
  * `intl` (optional, with Symfony polyfill fallback)
  * `openssl`
  * Appropriate PDO extension for your database (`pdo_mysql`, `pdo_pgsql`, `pdo_sqlite`, or `pdo_sqlsrv`)

For detailed requirements, see [friendsofcake2/cakephp](https://github.com/friendsofcake2/cakephp#requirements--compatibility).

## Installation

1. Create a new project using Composer:

```bash
composer create-project friendsofcake2/app [app_name]
```

2. Configure your database connection in `Config/database.php`:

```bash
cp Config/database.php.default Config/database.php
```

Edit the file with your database credentials.

3. Set up directory permissions:

```bash
chmod -R 777 tmp
```

4. Configure your web server to point to the `webroot` directory.

## Directory Structure

```
.
├── Config/          Configuration files
├── Console/         Console commands and shells
├── Controller/      Application controllers
├── Lib/             Application libraries
├── Locale/          Localization files
├── Model/           Application models
├── Plugin/          CakePHP plugins
├── Test/            Unit and integration tests
├── Vendor/          Third-party libraries (managed by Composer)
├── View/            View templates
├── tmp/             Temporary files (cache, logs, sessions)
└── webroot/         Public web root (index.php, assets)
```

## Development

### Running Tests

```bash
./Console/cake test app AllTests
```

Or with PHPUnit:

```bash
./vendor/bin/phpunit
```

### Code Standards

This project follows CakePHP coding standards. Check your code with:

```bash
./vendor/bin/phpcs
```

## Documentation

* [Original CakePHP 2.x Documentation](https://book.cakephp.org/2.0/en/)

## License

MIT License. See [LICENSE](LICENSE) file for details.

## Support

This is a community-maintained fork of CakePHP 2.x. For issues and questions:

* [friendsofcake2/cakephp Issues](https://github.com/friendsofcake2/cakephp/issues)
* [friendsofcake2/app Issues](https://github.com/friendsofcake2/app/issues)
