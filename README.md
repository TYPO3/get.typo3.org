# Get.typo3.org

Symfony 4 application for release notes, download redirects and JSON API for releases.

# Installation

- composer install
- edit .env vars from .env.dist

# Migrate old data
Reads all old json files into database

- `php ./bin/console doctrine:migrations:migrate`
- `php ./Build/import.php`
