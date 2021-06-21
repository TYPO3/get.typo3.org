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
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Persistence\ObjectManager;

class MajorVersionFixtures extends Fixture
{
    /**
     * @var string
     */
    public const MAJOR_VERSION_SPRINT = 'majorversion-sprint';

    /**
     * @var string
     */
    public const MAJOR_VERSION_LTS = 'majorversion-lts';

    /**
     * @var string
     */
    public const MAJOR_VERSION_ELTS = 'majorversion-elts';

    /**
     * @var string
     */
    public const MAJOR_VERSION_ELTS_EXT = 'majorversion-elts-ext';

    /**
     * @var string
     */
    public const MAJOR_VERSION_OUTDATED = 'majorversion-outdated';

    public function load(ObjectManager $manager)
    {
        $versions = $this->getData();
        foreach ($versions as $key => $version) {
            $majorVersion = new MajorVersion(
                $version['version'],
                $version['title'],
                $version['subtitle'],
                $version['description'],
                $version['releaseDate'],
                $version['maintainedUntil'],
                $version['eltsUntil'],
                $version['requirements'],
                $version['releases'],
                $version['lts']
            );
            $manager->persist($majorVersion);
            $this->addReference($key, $majorVersion);
        }

        $manager->flush();
    }

    public static function getVersions(): array
    {
        return [
            self::MAJOR_VERSION_SPRINT,
            self::MAJOR_VERSION_LTS,
            self::MAJOR_VERSION_ELTS,
            self::MAJOR_VERSION_ELTS_EXT,
            self::MAJOR_VERSION_OUTDATED,
        ];
    }

    /**
     * @return array<string, array<string, float|int|\DateTimeImmutable|\Doctrine\Common\Collections\ArrayCollection<mixed, mixed>|string|null>>
     */
    protected function getData(): array
    {
        $faker = \Faker\Factory::create();
        $dateTimeImmutable = new \DateTimeImmutable();

        return [
            self::MAJOR_VERSION_SPRINT => [
                'version' => 10,
                'title' => 'TYPO3 10',
                'subtitle' => $faker->sentence(6) . '[SUBTITLE]',
                'description' => $faker->paragraph(3) . '[DESCRIPTION]',
                'releaseDate' => $dateTimeImmutable,
                'maintainedUntil' => null,
                'eltsUntil' => null,
                'requirements' => new ArrayCollection(),
                'releases' => new ArrayCollection(),
                'lts' => null
            ],
            self::MAJOR_VERSION_LTS => [
                'version' => 9.5,
                'title' => 'TYPO3 9',
                'subtitle' => $faker->sentence(6) . '[SUBTITLE]',
                'description' => $faker->paragraph(3) . '[DESCRIPTION]',
                'releaseDate' => $dateTimeImmutable,
                'maintainedUntil' => $dateTimeImmutable->modify('+3 years')->modify('-1 day'),
                'eltsUntil' => null,
                'requirements' => new ArrayCollection(),
                'releases' => new ArrayCollection(),
                'lts' => 9.5
            ],
            self::MAJOR_VERSION_ELTS => [
                'version' => 7.6,
                'title' => 'TYPO3 7',
                'subtitle' => $faker->sentence(6) . '[SUBTITLE]',
                'description' => $faker->paragraph(3) . '[DESCRIPTION]',
                'releaseDate' => $dateTimeImmutable->modify('-3 years'),
                'maintainedUntil' => $dateTimeImmutable->modify('-1 day'),
                'eltsUntil' => null,
                'requirements' => new ArrayCollection(),
                'releases' => new ArrayCollection(),
                'lts' => 7.6
            ],
            self::MAJOR_VERSION_ELTS_EXT => [
                'version' => 6.2,
                'title' => 'TYPO3 6.2',
                'subtitle' => $faker->sentence(6) . '[SUBTITLE]',
                'description' => $faker->paragraph(3) . '[DESCRIPTION]',
                'releaseDate' => $dateTimeImmutable->modify('-3 years'),
                'maintainedUntil' => $dateTimeImmutable->modify('-1 day'),
                'eltsUntil' => $dateTimeImmutable->modify('-1 day')->modify('+4 years'),
                'requirements' => new ArrayCollection(),
                'releases' => new ArrayCollection(),
                'lts' => 6.2
            ],
            self::MAJOR_VERSION_OUTDATED => [
                'version' => 4.5,
                'title' => 'TYPO3 4.5',
                'subtitle' => $faker->sentence(6) . '[SUBTITLE]',
                'description' => $faker->paragraph(3) . '[DESCRIPTION]',
                'releaseDate' => $dateTimeImmutable->modify('-6 years'),
                'maintainedUntil' => $dateTimeImmutable->modify('-3 years')->modify('-1 day'),
                'eltsUntil' => null,
                'requirements' => new ArrayCollection(),
                'releases' => new ArrayCollection(),
                'lts' => 4.5
            ]
        ];
    }
}
