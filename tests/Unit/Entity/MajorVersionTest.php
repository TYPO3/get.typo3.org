<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
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
        $this->assertEquals($expectedResult['version'], $majorVersion->getVersion());
        $this->assertEquals($expectedResult['title'], $majorVersion->getTitle());
        $this->assertEquals($expectedResult['releaseDate'], $majorVersion->getReleaseDate());
        $this->assertEquals($expectedResult['maintainedUntil'], $majorVersion->getMaintainedUntil());
        $this->assertEquals($expectedResult['eltsUntil'], $majorVersion->getEltsUntil());
        $this->assertEquals($expectedResult['active'], $majorVersion->isActive());
        $this->assertEquals($expectedResult['elts'], $majorVersion->isElts());
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
        $this->assertEquals($expectedResult['version'], $majorVersion['version']);
        $this->assertEquals($expectedResult['title'], $majorVersion['title']);
        $this->assertEquals($expectedResult['releaseDate'], $majorVersion['releaseDate']);
        $this->assertEquals($expectedResult['maintainedUntil'], $majorVersion['maintainedUntil']);
        $this->assertEquals($expectedResult['eltsUntil'], $majorVersion['eltsUntil']);
        $this->assertEquals($expectedResult['active'], $majorVersion['active']);
        $this->assertEquals($expectedResult['elts'], $majorVersion['elts']);
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
        $this->assertEquals($expectedResult['active'], $majorVersion['active']);
        $this->assertEquals($expectedResult['elts'], $majorVersion['elts']);
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
                    6.2,
                    'TYPO3 6.2',
                    'subtitle',
                    'description',
                    $dateTimeToday->modify('-3 years'),
                    $dateTimeToday->modify('-1 day'),
                    $collection,
                    $collection,
                    6.2
                ],
                [
                    'version' => 6.2,
                    'title' => 'TYPO3 6.2',
                    'releaseDate' => $dateTimeToday->modify('-3 years'),
                    'maintainedUntil' => $dateTimeToday->modify('-1 day'),
                    'eltsUntil' => $dateTimeToday->modify('-1 day')->modify('+3 years'),
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
