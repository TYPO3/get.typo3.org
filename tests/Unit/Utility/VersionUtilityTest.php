<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Tests\Unit\Utility;

use App\Utility\VersionUtility;
use PHPUnit\Framework\TestCase;

class VersionUtilityTest extends TestCase
{
    /**
     * @param string $version
     * @param float $expectedResult
     * @dataProvider extractMajorVersionNumberTestDataProvider
     * @test
     */
    public function extractMajorVersionNumberTest(string $version, float $expectedResult)
    {
        $result = VersionUtility::extractMajorVersionNumber($version);
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @return array
     */
    public function extractMajorVersionNumberTestDataProvider(): array
    {
        return [
            ['10.10.10.10', 10],
            ['4.5', 4.5],
            ['4.5.35', 4.5],
            ['6.2.0', 6.2],
            ['6.99.99', 6.99],
            ['7.6.12', 7],
            ['7.2', 7],
            ['10.12.99', 10],
            ['99', 99],
            ['10.99.99-dev', 10]
        ];
    }

    /**
     * @param string $version
     * @param float $expectedResult
     * @dataProvider isValidSemverVersionTestDataProvider
     * @test
     */
    public function isValidSemverVersionTest(string $version, bool $expectedResult)
    {
        $result = VersionUtility::isValidSemverVersion($version);
        $this->assertEquals($expectedResult, $result);
    }

    /**
     * @return array
     */
    public function isValidSemverVersionTestDataProvider(): array
    {
        return [
            ['6.2.0', true],
            ['6.99.99-dev', true],
            ['7.6.12', true],
            ['10.abc.99', false]
        ];
    }
}
