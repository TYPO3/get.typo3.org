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

namespace App\DataFixtures;

use App\Entity\MajorVersion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory as FakerFactory;

final class MajorVersionFixtures extends Fixture
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
    public const MAJOR_VERSION_LTS_OLD = 'majorversion-lts-old';

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

    public function load(ObjectManager $manager): void
    {
        $versions = $this->getData();
        foreach ($versions as $data) {
            $manager->persist($data->version);
            $this->addReference($data->key, $data->version);
        }

        $manager->flush();
    }

    /**
     * @return array<string>
     */
    public static function getVersions(): array
    {
        return [
            self::MAJOR_VERSION_SPRINT,
            self::MAJOR_VERSION_LTS,
            self::MAJOR_VERSION_LTS_OLD,
            self::MAJOR_VERSION_ELTS,
            self::MAJOR_VERSION_ELTS_EXT,
            self::MAJOR_VERSION_OUTDATED,
        ];
    }

    /**
     * @return \Iterator<MajorVersionFixturesData>
     */
    protected function getData(): iterable
    {
        $faker = FakerFactory::create();
        $today = new \DateTimeImmutable();

        yield new MajorVersionFixturesData(
            self::MAJOR_VERSION_SPRINT,
            new MajorVersion(
                version: 10,
                title: 'TYPO3 10',
                subtitle: $faker->sentence(6) . '[SUBTITLE]',
                description: $faker->paragraph(3) . '[DESCRIPTION]',
                releaseDate: $today
            )
        );
        yield new MajorVersionFixturesData(
            self::MAJOR_VERSION_LTS,
            new MajorVersion(
                version: 9,
                title: 'TYPO3 9',
                subtitle: $faker->sentence(6) . '[SUBTITLE]',
                description: $faker->paragraph(3) . '[DESCRIPTION]',
                releaseDate: $today,
                maintainedUntil: $today->modify('+3 years')->modify('-1 day'),
                lts: 9.5
            )
        );
        yield new MajorVersionFixturesData(
            self::MAJOR_VERSION_LTS_OLD,
            new MajorVersion(
                version: 8,
                title: 'TYPO3 8',
                subtitle: $faker->sentence(6) . '[SUBTITLE]',
                description: $faker->paragraph(3) . '[DESCRIPTION]',
                releaseDate: $today->modify('-1 years'),
                maintainedUntil: $today->modify('+2 years')->modify('-1 day'),
                lts: 8.7
            )
        );
        yield new MajorVersionFixturesData(
            self::MAJOR_VERSION_ELTS,
            new MajorVersion(
                version: 7,
                title: 'TYPO3 7',
                subtitle: $faker->sentence(6) . '[SUBTITLE]',
                description: $faker->paragraph(3) . '[DESCRIPTION]',
                releaseDate: $today->modify('-3 years'),
                maintainedUntil: $today->modify('-1 day'),
                lts: 7.6
            )
        );
        yield new MajorVersionFixturesData(
            self::MAJOR_VERSION_ELTS_EXT,
            new MajorVersion(
                version: 6.2,
                title: 'TYPO3 6.2',
                subtitle: $faker->sentence(6) . '[SUBTITLE]',
                description: $faker->paragraph(3) . '[DESCRIPTION]',
                releaseDate: $today->modify('-3 years'),
                maintainedUntil: $today->modify('-1 day'),
                eltsUntil: $today->modify('-1 day')->modify('+4 years'),
                lts: 6.2
            )
        );
        yield new MajorVersionFixturesData(
            self::MAJOR_VERSION_OUTDATED,
            new MajorVersion(
                version: 4.5,
                title: 'TYPO3 4.5',
                subtitle: $faker->sentence(6) . '[SUBTITLE]',
                description: $faker->paragraph(3) . '[DESCRIPTION]',
                releaseDate: $today->modify('-6 years'),
                maintainedUntil: $today->modify('-3 years')->modify('-1 day')
            )
        );
    }
}
