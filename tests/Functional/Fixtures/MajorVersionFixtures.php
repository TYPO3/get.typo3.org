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

namespace App\Tests\Functional\Fixtures;

use App\Entity\MajorVersion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Persistence\ObjectManager;
use DateTimeImmutable;
use Iterator;

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
        ];
    }

    /**
     * @return Iterator<MajorVersionFixturesData>
     */
    protected function getData(): iterable
    {
        $today = new DateTimeImmutable();

        yield new MajorVersionFixturesData(
            self::MAJOR_VERSION_SPRINT,
            new MajorVersion(
                10,
                'TYPO3 10',
                '[SUBTITLE]',
                '[DESCRIPTION]',
                $today,
                null,
                null,
                null,
                new ArrayCollection(),
                new ArrayCollection(),
                null
            )
        );
        yield new MajorVersionFixturesData(
            self::MAJOR_VERSION_LTS,
            new MajorVersion(
                9,
                'TYPO3 9',
                '[SUBTITLE]',
                '[DESCRIPTION]',
                $today,
                null,
                $today->modify('+3 years')->modify('-1 day'),
                null,
                new ArrayCollection(),
                new ArrayCollection(),
                9.5
            )
        );
        yield new MajorVersionFixturesData(
            self::MAJOR_VERSION_LTS_OLD,
            new MajorVersion(
                8,
                'TYPO3 8',
                '[SUBTITLE]',
                '[DESCRIPTION]',
                $today->modify('-540 days'),
                null,
                $today->modify('+540 days')->modify('-1 day'),
                null,
                new ArrayCollection(),
                new ArrayCollection(),
                8.7
            )
        );
        yield new MajorVersionFixturesData(
            self::MAJOR_VERSION_ELTS,
            new MajorVersion(
                7,
                'TYPO3 7',
                '[SUBTITLE]',
                '[DESCRIPTION]',
                $today->modify('-3 years'),
                null,
                $today->modify('-1 day'),
                null,
                new ArrayCollection(),
                new ArrayCollection(),
                7.6
            )
        );
    }
}
