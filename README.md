# Get.typo3.org

Symfony 4 application for release notes, download redirects and JSON API for releases.

# Installation

- execute `composer install`
- edit `.env` vars from `.env.dist`
- execute `php ./bin/console doctrine:schema:create` to create database schema

# Migrate old data
Reads all old json files into database

- `php ./bin/console doctrine:migrations:migrate`
- `php ./Build/import.php`

# Troubleshooting

## Authorization not working

In case authorization does not succeed the reason might be that the web server
tries to handle the authentication and does not expose the information to the
according PHP process - it has been spotted on Apache/PHP-FCGID setups.

Add the following to the beginning of `.htaccess`:

```
SetEnvIf Authorization "(.*)" HTTP_AUTHORIZATION=$1
```
