<?php

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\DataFixtures;

use App\Entity\MajorVersion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\ObjectManager;

class MajorVersionFixtures extends Fixture
{
    public const MAJOR_VERSION_SPRINT = 'majorversion-sprint';
    public const MAJOR_VERSION_LTS = 'majorversion-lts';
    public const MAJOR_VERSION_ELTS = 'majorversion-elts';
    public const MAJOR_VERSION_ELTS_EXT = 'majorversion-elts-ext';
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

    protected function getData(): array
    {
        $faker = \Faker\Factory::create();
        $dateTimeToday = new \DateTimeImmutable();

        return [
            self::MAJOR_VERSION_SPRINT => [
                'version' => 10,
                'title' => 'TYPO3 10',
                'subtitle' => $faker->sentence(6) . '[SUBTITLE]',
                'description' => $faker->paragraph(3) . '[DESCRIPTION]',
                'releaseDate' => $dateTimeToday,
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
                'releaseDate' => $dateTimeToday,
                'maintainedUntil' => $dateTimeToday->modify('+3 years')->modify('-1 day'),
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
                'releaseDate' => $dateTimeToday->modify('-3 years'),
                'maintainedUntil' => $dateTimeToday->modify('-1 day'),
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
                'releaseDate' => $dateTimeToday->modify('-3 years'),
                'maintainedUntil' => $dateTimeToday->modify('-1 day'),
                'eltsUntil' => $dateTimeToday->modify('-1 day')->modify('+4 years'),
                'requirements' => new ArrayCollection(),
                'releases' => new ArrayCollection(),
                'lts' => 6.2
            ],
            self::MAJOR_VERSION_OUTDATED => [
                'version' => 4.5,
                'title' => 'TYPO3 4.5',
                'subtitle' => $faker->sentence(6) . '[SUBTITLE]',
                'description' => $faker->paragraph(3) . '[DESCRIPTION]',
                'releaseDate' => $dateTimeToday->modify('-6 years'),
                'maintainedUntil' => $dateTimeToday->modify('-3 years')->modify('-1 day'),
                'eltsUntil' => null,
                'requirements' => new ArrayCollection(),
                'releases' => new ArrayCollection(),
                'lts' => 4.5
            ]
        ];
    }
}
