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
use PHPUnit\Framework\TestCase;

class MajorVersionTest extends TestCase
{
    /**
     * @param array $version
     * @param array $expectedResult
     * @dataProvider entityTestDataProvider
     * @test
     */
    public function entityTest(array $version, array $expectedResult)
    {
        $majorVersion = new MajorVersion(...$version);
        self::assertEquals($expectedResult['version'], $majorVersion->getVersion());
        self::assertEquals($expectedResult['title'], $majorVersion->getTitle());
        self::assertEquals($expectedResult['releaseDate'], $majorVersion->getReleaseDate());
        self::assertEquals($expectedResult['maintainedUntil'], $majorVersion->getMaintainedUntil());
        self::assertEquals($expectedResult['eltsUntil'], $majorVersion->getEltsUntil());
        self::assertEquals($expectedResult['active'], $majorVersion->isActive());
        self::assertEquals($expectedResult['elts'], $majorVersion->isElts());
    }

    /**
     * @param array $version
     * @param array $expectedResult
     * @dataProvider entityTestDataProvider
     * @test
     */
    public function entityToArrayTest(array $version, array $expectedResult)
    {
        $majorVersion = new MajorVersion(...$version);
        $majorVersion = $majorVersion->toArray();
        self::assertEquals($expectedResult['version'], $majorVersion['version']);
        self::assertEquals($expectedResult['title'], $majorVersion['title']);
        self::assertEquals($expectedResult['releaseDate'], $majorVersion['releaseDate']);
        self::assertEquals($expectedResult['maintainedUntil'], $majorVersion['maintainedUntil']);
        self::assertEquals($expectedResult['eltsUntil'], $majorVersion['eltsUntil']);
        self::assertEquals($expectedResult['active'], $majorVersion['active']);
        self::assertEquals($expectedResult['elts'], $majorVersion['elts']);
    }

    /**
     * @param array $version
     * @param array $expectedResult
     * @dataProvider entityTestDataProvider
     * @test
     */
    public function entityToJsonTest(array $version, array $expectedResult)
    {
        $majorVersion = new MajorVersion(...$version);
        $majorVersion = json_encode($majorVersion);
        $majorVersion = json_decode($majorVersion, true);
        self::assertEquals($expectedResult['active'], $majorVersion['active']);
        self::assertEquals($expectedResult['elts'], $majorVersion['elts']);
    }

    /**
     * @return array
     */
    public function entityTestDataProvider(): array
    {
        $dateTimeToday = new \DateTimeImmutable();
        $collection = new ArrayCollection();

        return [
            'SPRINT' => [
                [
                    10,
                    'TYPO3 10',
                    'subtitle',
                    'description',
                    $dateTimeToday,
                    null,
                    null,
                    $collection,
                    $collection,
                    null
                ],
                [
                    'version' => 10,
                    'title' => 'TYPO3 10',
                    'releaseDate' => $dateTimeToday,
                    'maintainedUntil' => null,
                    'eltsUntil' => null,
                    'active' => true,
                    'elts' => false,
                ]
            ],
            'LTS' => [
                [
                    9.5,
                    'TYPO3 9',
                    'subtitle',
                    'description',
                    $dateTimeToday,
                    $dateTimeToday->modify('+3 years')->modify('-1 day'),
                    null,
                    $collection,
                    $collection,
                    9.5
                ],
                [
                    'version' => 9,
                    'title' => 'TYPO3 9',
                    'releaseDate' => $dateTimeToday,
                    'maintainedUntil' => $dateTimeToday->modify('+3 years')->modify('-1 day'),
                    'eltsUntil' => $dateTimeToday->modify('+6 years')->modify('-1 day'),
                    'active' => true,
                    'elts' => false,
                ]
            ],
            'ELTS' => [
                [
                    7.6,
                    'TYPO3 7',
                    'subtitle',
                    'description',
                    $dateTimeToday->modify('-3 years'),
                    $dateTimeToday->modify('-1 day'),
                    null,
                    $collection,
                    $collection,
                    7.6
                ],
                [
                    'version' => 7,
                    'title' => 'TYPO3 7',
                    'releaseDate' => $dateTimeToday->modify('-3 years'),
                    'maintainedUntil' => $dateTimeToday->modify('-1 day'),
                    'eltsUntil' => $dateTimeToday->modify('-1 day')->modify('+3 years'),
                    'active' => false,
                    'elts' => true,
                ]
            ],
            'ELTS-SET' => [
                [
                    6.2,
                    'TYPO3 6.2',
                    'subtitle',
                    'description',
                    $dateTimeToday->modify('-3 years'),
                    $dateTimeToday->modify('-1 day'),
                    $dateTimeToday->modify('-1 day')->modify('+4 years'),
                    $collection,
                    $collection,
                    6.2
                ],
                [
                    'version' => 6.2,
                    'title' => 'TYPO3 6.2',
                    'releaseDate' => $dateTimeToday->modify('-3 years'),
                    'maintainedUntil' => $dateTimeToday->modify('-1 day'),
                    'eltsUntil' => $dateTimeToday->modify('-1 day')->modify('+4 years'),
                    'active' => false,
                    'elts' => true,
                ]
            ],
            'OUTDATED' => [
                [
                    4.5,
                    'TYPO3 4.5',
                    'subtitle',
                    'description',
                    $dateTimeToday->modify('-6 years'),
                    $dateTimeToday->modify('-3 years')->modify('-1 day'),
                    null,
                    $collection,
                    $collection,
                    4.5
                ],
                [
                    'version' => 4.5,
                    'title' => 'TYPO3 4.5',
                    'releaseDate' => $dateTimeToday->modify('-6 years'),
                    'maintainedUntil' => $dateTimeToday->modify('-3 years')->modify('-1 day'),
                    'eltsUntil' => $dateTimeToday->modify('-3 years')->modify('-1 day')->modify('+3 years'),
                    'active' => false,
                    'elts' => false,
                ]
            ]
        ];
    }
}
