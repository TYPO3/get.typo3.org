<?php

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\DataFixtures;

use App\Entity\Requirement;
use App\Enum\RequirementCategoryEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class RequirementFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
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
                $manager->persist($requirement);
            }
        }

        $manager->flush();
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
