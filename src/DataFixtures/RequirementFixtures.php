<?php

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

namespace App\DataFixtures;

use App\Entity\MajorVersion;
use App\Entity\Requirement;
use App\Enum\RequirementCategoryEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class RequirementFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        foreach (MajorVersionFixtures::getVersions() as $majorVersionIdentifier) {
            /** @var MajorVersion $majorVersion */
            $majorVersion = $this->getReference($majorVersionIdentifier);
            $requirements = $this->getData();

            foreach ($requirements as $data) {
                $requirement = new Requirement(
                    $majorVersion,
                    $data->category,
                    $data->name,
                    $data->min,
                    $data->max
                );

                $manager->persist($requirement);
            }
        }

        $manager->flush();
    }

    /**
     * @return array<class-string<MajorVersionFixtures>>
     */
    public function getDependencies()
    {
        return [
            MajorVersionFixtures::class,
        ];
    }

    /**
     * @return RequirementFixturesData[]
     */
    protected function getData(): iterable
    {
        yield new RequirementFixturesData(
            RequirementCategoryEnum::OPTION_PHP,
            'php',
            '7.2',
            '7.4'
        );
        yield new RequirementFixturesData(
            RequirementCategoryEnum::OPTION_DATABASE,
            'mysql',
            '5.5',
            '5.7'
        );
        yield new RequirementFixturesData(
            RequirementCategoryEnum::OPTION_DATABASE,
            'sqlite',
            null,
            null
        );
        yield new RequirementFixturesData(
            RequirementCategoryEnum::OPTION_DATABASE,
            'postgres',
            null,
            null
        );
        yield new RequirementFixturesData(
            RequirementCategoryEnum::OPTION_DATABASE,
            'sqlsrv',
            null,
            null
        );
        yield new RequirementFixturesData(
            RequirementCategoryEnum::OPTION_DATABASE,
            'mariadb',
            '10',
            '10.2.26'
        );
        yield new RequirementFixturesData(
            RequirementCategoryEnum::OPTION_HARDWARE,
            'ram',
            '256',
            null
        );
        yield new RequirementFixturesData(
            RequirementCategoryEnum::OPTION_CLIENT,
            'chrome',
            null,
            null
        );
    }
}

class RequirementFixturesData
{
    public string $category;
    public string $name;
    public ?string $min;
    public ?string $max;

    public function __construct(
        string $category,
        string $name,
        ?string $min,
        ?string $max
    ) {
        $this->category = $category;
        $this->name = $name;
        $this->min = $min;
        $this->max = $max;
    }
}
