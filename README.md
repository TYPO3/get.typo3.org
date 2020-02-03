# get.typo3.org

Symfony 4 application for release notes, download redirects and JSON API for releases.

# Installation with .ddev

1. edit `.env` vars from `.env.dist`
2. ddev start
3. ddev ssh
4. execute `composer install`
5. `php ./bin/console doctrine:schema:create`

# Manual Installation

1. execute `composer install`
2. edit `.env` vars from `.env.dist`
3. execute `php ./bin/console doctrine:schema:create` to create database schema

# Database Migration

```
php ./bin/console doctrine:migrations:migrate
```

# Import Fixtures

```
php ./bin/console doctrine:fixtures:load
```

# Testing

```
composer test:php:cgl
composer test:php:lint
composer test:php:unit
composer test:php:functional
```

# Troubleshooting

## Authorization not working

In case authorization does not succeed the reason might be that the web server
tries to handle the authentication and does not expose the information to the
according PHP process - it has been spotted on Apache/PHP-FCGID setups.

Add the following to the beginning of `.htaccess`:

```
SetEnvIf Authorization "(.*)" HTTP_AUTHORIZATION=$1
```
