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

namespace App\Tests\Functional\Controller\Web;

use App\Tests\Functional\Fixtures\MajorVersionFixtures;
use App\Tests\Functional\Fixtures\ReleaseFixtures;
use App\Tests\Functional\AbstractCase;
use Symfony\Component\HttpFoundation\Response;
use Iterator;

class DownloadControllerTest extends AbstractCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->addFixture(new MajorVersionFixtures());
        $this->addFixture(new ReleaseFixtures());
        $this->executeFixtures();
    }

    /**
     * @dataProvider webDownloadVersionDataProvider
     *
     * @test
     */
    public function webDownloadVersion(
        string $requestVersion,
        string $requestFormat,
        int $expectedCode
    ): void {
        if ($requestFormat === '') {
            $this->client->request('GET', '/' . $requestVersion);
        } else {
            $this->client->request('GET', '/' . $requestVersion . '/' . $requestFormat);
        }

        self::assertResponseStatusCodeSame($expectedCode);
    }

    /**
     * @return Iterator<string, array{
     *   requestVersion: string,
     *   requestFormat: string,
     *   expectedCode: int
     * }>
     */
    public function webDownloadVersionDataProvider(): Iterator
    {
        yield 'Sprint version' => [
            'requestVersion' => '10.0.0',
            'requestFormat' => '',
            'expectedCode' => Response::HTTP_FOUND,
        ];
        yield 'Sprint version (tar.gz)' => [
            'requestVersion' => '10.0.1',
            'requestFormat' => 'tar.gz',
            'expectedCode' => Response::HTTP_FOUND,
        ];
        yield 'Sprint version (zip)' => [
            'requestVersion' => '10.0.2',
            'requestFormat' => 'zip',
            'expectedCode' => Response::HTTP_FOUND,
        ];
        yield 'LTS version' => [
            'requestVersion' => '9.5.9',
            'requestFormat' => '',
            'expectedCode' => Response::HTTP_FOUND,
        ];
        yield 'LTS version (tar.gz)' => [
            'requestVersion' => '9.5.10',
            'requestFormat' => 'tar.gz',
            'expectedCode' => Response::HTTP_FOUND,
        ];
        yield 'LTS version (zip)' => [
            'requestVersion' => '9.5.11',
            'requestFormat' => 'zip',
            'expectedCode' => Response::HTTP_FOUND,
        ];
        yield 'Old LTS version' => [
            'requestVersion' => '8.7.15',
            'requestFormat' => '',
            'expectedCode' => Response::HTTP_FOUND,
        ];
        yield 'Old LTS version (tar.gz)' => [
            'requestVersion' => '8.7.16',
            'requestFormat' => 'tar.gz',
            'expectedCode' => Response::HTTP_FOUND,
        ];
        yield 'Old LTS version (zip)' => [
            'requestVersion' => '8.7.17',
            'requestFormat' => 'zip',
            'expectedCode' => Response::HTTP_FOUND,
        ];
        yield 'pre ELTS version' => [
            'requestVersion' => '7.6.17',
            'requestFormat' => '',
            'expectedCode' => Response::HTTP_FOUND,
        ];
        yield 'ELTS version' => [
            'requestVersion' => '7.6.21',
            'requestFormat' => '',
            'expectedCode' => Response::HTTP_PAYMENT_REQUIRED,
        ];
        yield 'ELTS version (tar.gz)' => [
            'requestVersion' => '7.6.22',
            'requestFormat' => 'tar.gz',
            'expectedCode' => Response::HTTP_PAYMENT_REQUIRED,
        ];
        yield 'ELTS version (zip)' => [
            'requestVersion' => '7.6.23',
            'requestFormat' => 'zip',
            'expectedCode' => Response::HTTP_PAYMENT_REQUIRED,
        ];
        yield 'Stable' => [
            'requestVersion' => 'stable',
            'requestFormat' => '',
            'expectedCode' => Response::HTTP_FOUND,
        ];
        yield 'Current' => [
            'requestVersion' => 'current',
            'requestFormat' => '',
            'expectedCode' => Response::HTTP_FOUND,
        ];
        yield 'Invalid version' => [
            'requestVersion' => '1.0.0',
            'requestFormat' => '',
            'expectedCode' => Response::HTTP_NOT_FOUND,
        ];
    }
}
