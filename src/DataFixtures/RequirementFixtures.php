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

use App\Entity\Requirement;
use App\Enum\RequirementCategoryEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class RequirementFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $objectManager)
    {
        foreach (MajorVersionFixtures::getVersions() as $majorVersionIdentifier) {
            $majorVersion = $this->getReference($majorVersionIdentifier);
            $requirements = $this->getData();

            foreach ($requirements as $data) {
                $requirement = new Requirement();
                $requirement->setVersion($majorVersion);
                $requirement->setCategory($data['category']);
                $requirement->setName($data['name']);
                $requirement->setMin($data['min']);
                $requirement->setMax($data['max']);
                $objectManager->persist($requirement);
            }
        }

        $objectManager->flush();
    }

    protected function getData(): array
    {
        return [
            [
                'category' => RequirementCategoryEnum::OPTION_PHP,
                'name' => 'php',
                'min' => 7.2,
                'max' => 7.4,
            ],
            [
                'category' => RequirementCategoryEnum::OPTION_DATABASE,
                'name' => 'mysql',
                'min' => 5.5,
                'max' => 5.7,
            ],
            [
                'category' => RequirementCategoryEnum::OPTION_DATABASE,
                'name' => 'sqlite',
                'min' => null,
                'max' => null,
            ],
            [
                'category' => RequirementCategoryEnum::OPTION_DATABASE,
                'name' => 'postgres',
                'min' => null,
                'max' => null,
            ],
            [
                'category' => RequirementCategoryEnum::OPTION_DATABASE,
                'name' => 'sqlsrv',
                'min' => null,
                'max' => null,
            ],
            [
                'category' => RequirementCategoryEnum::OPTION_DATABASE,
                'name' => 'mariadb',
                'min' => '10',
                'max' => '10.2.26',
            ],
            [
                'category' => RequirementCategoryEnum::OPTION_HARDWARE,
                'name' => 'ram',
                'min' => 256,
                'max' => null,
            ],
            [
                'category' => RequirementCategoryEnum::OPTION_CLIENT,
                'name' => 'chrome',
                'min' => null,
                'max' => null,
            ]
        ];
    }

    public function getDependencies()
    {
        return [
            MajorVersionFixtures::class,
        ];
    }
}
