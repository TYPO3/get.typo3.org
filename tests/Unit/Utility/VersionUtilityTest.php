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

namespace App\Tests\Unit\Utility;

use App\Utility\VersionUtility;
use Iterator;
use PHPUnit\Framework\TestCase;

class VersionUtilityTest extends TestCase
{
    /**
     * @dataProvider extractMajorVersionNumberTestDataProvider
     *
     * @test
     */
    public function extractMajorVersionNumberTest(string $version, float $expectedResult): void
    {
        $result = VersionUtility::extractMajorVersionNumber($version);
        self::assertSame($expectedResult, (float)$result);
    }

    /**
     * @return Iterator<string, array<int, float|string>>
     */
    public function extractMajorVersionNumberTestDataProvider(): Iterator
    {
        yield 'Minor 4' => ['4.5', 4.5];
        yield 'Patch 4' => ['4.5.35', 4.5];
        yield 'Minor 6' => ['6.2.0', 6.2];
        yield 'Patch 6' => ['6.99.99', 6.99];
        yield 'Minor 7' => ['7.6', 7];
        yield 'Patch 7' => ['7.6.12', 7];
        yield 'Minor 10' => ['10.11', 10];
        yield 'Patch 10' => ['10.12.99', 10];
        yield 'Build 10' => ['10.11.12.13', 10];
        yield 'Dev 10' => ['10.99.99-dev', 10];
        yield 'Max' => ['99', 99];
    }

    /**
     * @dataProvider isValidSemverVersionTestDataProvider
     *
     * @test
     */
    public function isValidSemverVersionTest(string $version, bool $expectedResult): void
    {
        $result = VersionUtility::isValidSemverVersion($version);
        self::assertEquals($expectedResult, $result);
    }

    /**
     * @return Iterator<string, array<bool|string>>
     */
    public function isValidSemverVersionTestDataProvider(): Iterator
    {
        yield 'Patch 6' => ['6.2.0', true];
        yield 'Dev 6' => ['6.99.99-dev', true];
        yield 'Patch 7' => ['7.6.12', true];
        yield 'Invalid' => ['10.abc.99', false];
    }
}
