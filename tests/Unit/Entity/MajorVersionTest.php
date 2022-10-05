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
use Doctrine\Common\Collections\ArrayCollection;
use Iterator;
use LogicException;
use PHPUnit\Framework\TestCase;
use DateTimeImmutable;

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
            throw new LogicException('Array expected');
        }

        self::assertEquals($expectedResult->active, $majorVersion['active'] ?? null);
        self::assertEquals($expectedResult->elts, $majorVersion['elts'] ?? null);
    }

    /**
     * @return Iterator<string, array<int, MajorVersion|MajorVersionExpected>>
     */
    public function entityTestDataProvider(): Iterator
    {
        $dateTimeToday = new DateTimeImmutable();
        $collection = new ArrayCollection();

        yield 'SPRINT' => [
            new MajorVersion(
                10,
                'TYPO3 10',
                'subtitle',
                'description',
                $dateTimeToday,
                null,
                null,
                null,
                $collection,
                $collection,
                null
            ),
            new MajorVersionExpected(
                10,
                'TYPO3 10',
                $dateTimeToday,
                null,
                null,
                null,
                true,
                false
            ),
        ];
        yield 'LTS' => [
            new MajorVersion(
                9.5,
                'TYPO3 9',
                'subtitle',
                'description',
                $dateTimeToday,
                null,
                $dateTimeToday->modify('+3 years')->modify('-1 day'),
                null,
                $collection,
                $collection,
                9.5
            ),
            new MajorVersionExpected(
                9,
                'TYPO3 9',
                $dateTimeToday,
                null,
                $dateTimeToday->modify('+3 years')->modify('-1 day'),
                $dateTimeToday->modify('+6 years')->modify('-1 day'),
                true,
                false
            ),
        ];
        yield 'ELTS' => [
            new MajorVersion(
                7.6,
                'TYPO3 7',
                'subtitle',
                'description',
                $dateTimeToday->modify('-3 years'),
                null,
                $dateTimeToday->modify('-1 day'),
                null,
                $collection,
                $collection,
                7.6
            ),
            new MajorVersionExpected(
                7,
                'TYPO3 7',
                $dateTimeToday->modify('-3 years'),
                null,
                $dateTimeToday->modify('-1 day'),
                $dateTimeToday->modify('-1 day')->modify('+3 years'),
                false,
                true
            ),
        ];
        yield 'ELTS-SET' => [
            new MajorVersion(
                6.2,
                'TYPO3 6.2',
                'subtitle',
                'description',
                $dateTimeToday->modify('-3 years'),
                null,
                $dateTimeToday->modify('-1 day'),
                $dateTimeToday->modify('-1 day')->modify('+4 years'),
                $collection,
                $collection,
                6.2
            ),
            new MajorVersionExpected(
                6.2,
                'TYPO3 6.2',
                $dateTimeToday->modify('-3 years'),
                null,
                $dateTimeToday->modify('-1 day'),
                $dateTimeToday->modify('-1 day')->modify('+4 years'),
                false,
                true
            ),
        ];
        yield 'OUTDATED' => [
            new MajorVersion(
                4.5,
                'TYPO3 4.5',
                'subtitle',
                'description',
                $dateTimeToday->modify('-6 years'),
                null,
                $dateTimeToday->modify('-3 years')->modify('-1 day'),
                null,
                $collection,
                $collection,
                4.5
            ),
            new MajorVersionExpected(
                4.5,
                'TYPO3 4.5',
                $dateTimeToday->modify('-6 years'),
                null,
                $dateTimeToday->modify('-3 years')->modify('-1 day'),
                $dateTimeToday->modify('-3 years')->modify('-1 day')->modify('+3 years'),
                false,
                false
            ),
        ];
    }
}
