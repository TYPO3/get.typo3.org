<?php

declare(strict_types=1);

/*
 * This file is part of the package t3o/get.typo3.org.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Rector\Core\Configuration\Option;
use Rector\Doctrine\Rector\MethodCall\ReplaceParentRepositoryCallsByRepositoryPropertyRector;
use Rector\Doctrine\Set\DoctrineSetList;
use Rector\PHPUnit\Set\PHPUnitLevelSetList;
use Rector\PHPUnit\Set\PHPUnitSetList;
use Rector\Renaming\Rector\PropertyFetch\RenamePropertyRector;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\Symfony\Set\JMSSetList;
use Rector\Symfony\Set\SymfonyLevelSetList;
use Rector\Symfony\Set\SymfonySetList;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    // get parameters
    $parameters = $containerConfigurator->parameters();

    // paths to refactor; solid alternative to CLI arguments
    $parameters->set(Option::PATHS, [
        __DIR__ . '/migrations',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ]);

    $parameters->set(Option::BOOTSTRAP_FILES, [
        __DIR__ . '/vendor/autoload.php',
        __DIR__ . '/vendor/bin/.phpunit/phpunit/vendor/autoload.php',
    ]);

    // Path to phpstan with extensions, that PHPStan in Rector uses to determine types
    //$parameters->set(Option::PHPSTAN_FOR_RECTOR_PATH, getcwd() . '/phpstan-for-config.neon');

    /*
    $parameters->set(Option::SKIP, [
        RenamePropertyRector::class => [
            __DIR__ . 'src/Controller/**',
        ],
        ReplaceParentRepositoryCallsByRepositoryPropertyRector::class => [
            __DIR__ . 'src/Controller/**',
        ],
    ]);
    */

    // get services (needed for register a single rule)
    $services = $containerConfigurator->services();

    // Define what rule sets will be applied
    $containerConfigurator->import(LevelSetList::UP_TO_PHP_81);
    //$containerConfigurator->import(SetList::DEFLUENT);
    $containerConfigurator->import(SetList::ACTION_INJECTION_TO_CONSTRUCTOR_INJECTION);
    $containerConfigurator->import(SetList::CODE_QUALITY);
    $containerConfigurator->import(SetList::CODING_STYLE);
    //$containerConfigurator->import(SetList::DEAD_CODE); temporary disabled
    $containerConfigurator->import(SetList::FRAMEWORK_EXTRA_BUNDLE_50);
    $containerConfigurator->import(SetList::MONOLOG_20);
    $containerConfigurator->import(SetList::MYSQL_TO_MYSQLI);
    //$containerConfigurator->import(SetList::NAMING);
    //$containerConfigurator->import(SetList::PRIVATIZATION);
    $containerConfigurator->import(SetList::PSR_4);
    //$containerConfigurator->import(SetList::SAFE_07);
    $containerConfigurator->import(SetList::TYPE_DECLARATION);
    $containerConfigurator->import(SetList::TYPE_DECLARATION_STRICT);
    $containerConfigurator->import(SetList::UNWRAP_COMPAT);
    //$containerConfigurator->import(SetList::EARLY_RETURN);

    // Symfony specific rule sets
    $parameters->set(
        Option::SYMFONY_CONTAINER_XML_PATH_PARAMETER,
        __DIR__ . '/var/cache/dev/App_KernelDevDebugContainer.xml'
    );

    $containerConfigurator->import(SymfonyLevelSetList::UP_TO_SYMFONY_54);
    $containerConfigurator->import(SymfonySetList::SYMFONY_STRICT);
    $containerConfigurator->import(SymfonySetList::SYMFONY_CODE_QUALITY);
    $containerConfigurator->import(SymfonySetList::SYMFONY_CONSTRUCTOR_INJECTION);

    // Doctrine specific rule sets
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_25);
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_BEHAVIORS_20);
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_CODE_QUALITY);
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_COMMON_20);
    //$containerConfigurator->import(DoctrineSetList::DOCTRINE_DBAL_211);
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_DBAL_30);
    //$containerConfigurator->import(DoctrineSetList::DOCTRINE_GEDMO_TO_KNPLABS);
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_REPOSITORY_AS_SERVICE);
    $containerConfigurator->import(DoctrineSetList::DOCTRINE_ORM_29);

    //$services->remove(\Rector\Doctrine\Rector\Class_\RemoveRepositoryFromEntityAnnotationRector::class);

    // Doctrine specific rule sets
    //$containerConfigurator->import(JMSSetList::REMOVE_JMS_INJECT);
    $containerConfigurator->import(JMSSetList::ANNOTATIONS_TO_ATTRIBUTES);


    // PHPUnit specific rule sets
    $containerConfigurator->import(PHPUnitLevelSetList::UP_TO_PHPUNIT_90);
    $containerConfigurator->import(PHPUnitSetList::PHPUNIT_CODE_QUALITY);
    $containerConfigurator->import(PHPUnitSetList::PHPUNIT_EXCEPTION);
    $containerConfigurator->import(PHPUnitSetList::PHPUNIT_MOCK);
    $containerConfigurator->import(PHPUnitSetList::PHPUNIT_SPECIFIC_METHOD);
    $containerConfigurator->import(PHPUnitSetList::PHPUNIT_YIELD_DATA_PROVIDER);

    // register a single rule
    //$services->remove(\Rector\Doctrine\Rector\Class_\RemoveRepositoryFromEntityAnnotationRector::class);
};
