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

namespace App\Tests\Unit\Entity;

use App\Entity\MajorVersion;
use PHPUnit\Framework\TestCase;

class MajorVersionTest extends TestCase
{
    /**
     * @dataProvider entityTestDataProvider
     *
     * @test
     */
    public function entityTest(MajorVersion $majorVersion, MajorVersionExpected $expectedResult): void
    {
        self::assertSame($expectedResult->version, $majorVersion->getVersion());
        self::assertSame($expectedResult->title, $majorVersion->getTitle());
        self::assertEquals($expectedResult->releaseDate, $majorVersion->getReleaseDate());
        self::assertEquals($expectedResult->regularMaintenanceUntil, $majorVersion->getRegularMaintenanceUntil());
        self::assertEquals($expectedResult->maintainedUntil, $majorVersion->getMaintainedUntil());
        self::assertEquals($expectedResult->eltsUntil, $majorVersion->getEltsUntil());
        self::assertEquals($expectedResult->active, $majorVersion->isActive());
        self::assertEquals($expectedResult->elts, $majorVersion->isElts());
    }

    /**
     * @dataProvider entityTestDataProvider
     *
     * @test
     */
    public function entityToArrayTest(MajorVersion $majorVersion, MajorVersionExpected $expectedResult): void
    {
        $majorVersion = $majorVersion->toArray();
        self::assertSame($expectedResult->version, $majorVersion['version']);
        self::assertSame($expectedResult->title, $majorVersion['title']);
        self::assertEquals($expectedResult->releaseDate, $majorVersion['releaseDate']);
        self::assertEquals($expectedResult->regularMaintenanceUntil, $majorVersion['regularMaintenanceUntil']);
        self::assertEquals($expectedResult->maintainedUntil, $majorVersion['maintainedUntil']);
        self::assertEquals($expectedResult->eltsUntil, $majorVersion['eltsUntil']);
        self::assertEquals($expectedResult->active, $majorVersion['active']);
        self::assertEquals($expectedResult->elts, $majorVersion['elts']);
    }

    /**
     * @dataProvider entityTestDataProvider
     *
     * @test
     */
    public function entityToJsonTest(MajorVersion $majorVersion, MajorVersionExpected $expectedResult): void
    {
        $majorVersion = json_encode($majorVersion, JSON_THROW_ON_ERROR);
        $majorVersion = json_decode($majorVersion, true, 512, JSON_THROW_ON_ERROR);

        if (!is_array($majorVersion)) {
            throw new \LogicException('Array expected');
        }

        self::assertEquals($expectedResult->active, $majorVersion['active'] ?? null);
        self::assertEquals($expectedResult->elts, $majorVersion['elts'] ?? null);
    }

    /**
     * @return \Iterator<string, array<int, MajorVersion|MajorVersionExpected>>
     */
    public function entityTestDataProvider(): \Iterator
    {
        $dateTimeToday = new \DateTimeImmutable();

        yield 'SPRINT' => [
            new MajorVersion(
                version: 10,
                title: 'TYPO3 10',
                subtitle: 'subtitle',
                description: 'description',
                releaseDate: $dateTimeToday
            ),
            new MajorVersionExpected(
                version: 10,
                title: 'TYPO3 10',
                releaseDate: $dateTimeToday,
                active: true,
                elts: false
            ),
        ];
        yield 'LTS' => [
            new MajorVersion(
                version: 9.5,
                title: 'TYPO3 9',
                subtitle: 'subtitle',
                description: 'description',
                releaseDate: $dateTimeToday,
                maintainedUntil: $dateTimeToday->modify('+3 years')->modify('-1 day'),
                lts: 9.5
            ),
            new MajorVersionExpected(
                version: 9,
                title: 'TYPO3 9',
                releaseDate: $dateTimeToday,
                maintainedUntil: $dateTimeToday->modify('+3 years')->modify('-1 day'),
                eltsUntil: $dateTimeToday->modify('+6 years')->modify('-1 day'),
                active: true,
                elts: false
            ),
        ];
        yield 'ELTS' => [
            new MajorVersion(
                version: 7.6,
                title: 'TYPO3 7',
                subtitle: 'subtitle',
                description: 'description',
                releaseDate: $dateTimeToday->modify('-3 years'),
                maintainedUntil: $dateTimeToday->modify('-1 day'),
                lts: 7.6
            ),
            new MajorVersionExpected(
                version: 7,
                title: 'TYPO3 7',
                releaseDate: $dateTimeToday->modify('-3 years'),
                maintainedUntil: $dateTimeToday->modify('-1 day'),
                eltsUntil: $dateTimeToday->modify('-1 day')->modify('+3 years'),
                active: false,
                elts: true
            ),
        ];
        yield 'ELTS-SET' => [
            new MajorVersion(
                version: 6.2,
                title: 'TYPO3 6.2',
                subtitle: 'subtitle',
                description: 'description',
                releaseDate: $dateTimeToday->modify('-3 years'),
                maintainedUntil: $dateTimeToday->modify('-1 day'),
                eltsUntil: $dateTimeToday->modify('-1 day')->modify('+4 years'),
                lts: 6.2
            ),
            new MajorVersionExpected(
                version: 6.2,
                title: 'TYPO3 6.2',
                releaseDate: $dateTimeToday->modify('-3 years'),
                maintainedUntil: $dateTimeToday->modify('-1 day'),
                eltsUntil: $dateTimeToday->modify('-1 day')->modify('+4 years'),
                active: false,
                elts: true
            ),
        ];
        yield 'OUTDATED' => [
            new MajorVersion(
                version: 4.5,
                title: 'TYPO3 4.5',
                subtitle: 'subtitle',
                description: 'description',
                releaseDate: $dateTimeToday->modify('-6 years'),
                maintainedUntil: $dateTimeToday->modify('-3 years')->modify('-1 day'),
                lts: 4.5
            ),
            new MajorVersionExpected(
                version: 4.5,
                title: 'TYPO3 4.5',
                releaseDate: $dateTimeToday->modify('-6 years'),
                maintainedUntil: $dateTimeToday->modify('-3 years')->modify('-1 day'),
                eltsUntil: $dateTimeToday->modify('-3 years')->modify('-1 day')->modify('+3 years'),
                active: false,
                elts: false
            ),
        ];
    }
}
