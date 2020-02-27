# get.typo3.org

Symfony 4 application for release notes, download redirects and JSON API for
releases.

## Installation with DDEV Local

Composer installation, database creation or migration are automatically done at
startup. So simply run

`ddev start`

and start hacking. To head to the project in the browser run

`ddev launch`

## Manual Installation

1. edit `.env` vars from `.env.dist`
1. execute `composer install`
1. execute `php ./bin/console doctrine:schema:create` to create database schema

## Database Migration

```bash
php ./bin/console doctrine:migrations:migrate
```

## Import Fixtures

```bash
php ./bin/console doctrine:fixtures:load
```

## Testing

For DDEV installations prepend `ddev` before the composer commands.

```bash
composer test

composer test:php:cgl
composer test:php:lint
composer test:php:unit
composer test:php:functional
```

## Troubleshooting

### Authorization not working

In case authorization does not succeed the reason might be that the web server
tries to handle the authentication and does not expose the information to the
according PHP process - it has been spotted on Apache/PHP-FCGID setups.

Add the following to the beginning of `.htaccess`:

```
SetEnvIf Authorization "(.*)" HTTP_AUTHORIZATION=$1
```
