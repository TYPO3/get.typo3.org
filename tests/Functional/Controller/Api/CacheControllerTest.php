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

namespace App\Tests\Functional\Controller\Api;

use App\DataFixtures\MajorVersionFixtures;
use App\DataFixtures\ReleaseFixtures;
use App\DataFixtures\RequirementFixtures;
use Symfony\Component\HttpFoundation\Response;

class CacheControllerTest extends ApiCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->addFixture(new MajorVersionFixtures());
        $this->addFixture(new ReleaseFixtures());
        $this->addFixture(new RequirementFixtures());
        $this->executeFixtures();
    }

    /**
     * @test
     */
    public function deleteCacheMajorVersionUnauthorized()
    {
        $this->client->request('DELETE', '/v1/api/cache/majorVersion/10');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function deleteCacheMajorVersionInvalid()
    {
        $this->logIn();
        $this->client->request('DELETE', '/v1/api/cache/majorVersion/NotAValidVersionNumber');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_BAD_REQUEST, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function deleteCacheMajorVersionNotFound()
    {
        $this->logIn();
        $this->client->request('DELETE', '/v1/api/cache/majorVersion/99');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_NOT_FOUND, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function deleteCacheMajorVersionAuthorized()
    {
        $this->logIn();
        $this->client->request('DELETE', '/v1/api/cache/majorVersion/10');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_ACCEPTED, $response->getStatusCode());
        self::assertSame(
            [
                'locations' => [
                    'http://localhost/v1/api/major/10/release/',
                    'http://localhost/v1/api/major/10/release/latest',
                    'http://localhost/v1/api/major/10/release/latest/security',
                    'http://localhost/v1/api/major/10/release/latest/content',
                    'http://localhost/v1/api/major/',
                    'http://localhost/v1/api/major/10',
                    'http://localhost/',
                    'http://localhost/release-notes',
                    'http://localhost/release-notes/',
                    'http://localhost/version/10',
                ]
            ],
            json_decode($response->getContent(), true)
        );
        $this->client->request('DELETE', '/v1/api/cache/majorVersion/6.2');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_ACCEPTED, $response->getStatusCode());
        self::assertSame(
            [
                'locations' => [
                    'http://localhost/v1/api/major/6.2/release/',
                    'http://localhost/v1/api/major/6.2/release/latest',
                    'http://localhost/v1/api/major/6.2/release/latest/security',
                    'http://localhost/v1/api/major/6.2/release/latest/content',
                    'http://localhost/v1/api/major/',
                    'http://localhost/v1/api/major/6.2',
                    'http://localhost/',
                    'http://localhost/release-notes',
                    'http://localhost/release-notes/',
                    'http://localhost/version/6.2',
                ]
            ],
            json_decode($response->getContent(), true)
        );
    }

    /**
     * @test
     */
    public function deleteCacheReleaseUnauthorized()
    {
        $this->client->request('DELETE', '/v1/api/cache/release/10.0.0');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function deleteCacheReleaseInvalid()
    {
        $this->logIn();
        $this->client->request('DELETE', '/v1/api/cache/release/NotAValidVersionNumber');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_BAD_REQUEST, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function deleteCacheReleaseNotFound()
    {
        $this->logIn();
        $this->client->request('DELETE', '/v1/api/cache/release/99.99.99');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_NOT_FOUND, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function deleteCacheReleaseAuthorized()
    {
        $this->logIn();
        $this->client->request('DELETE', '/v1/api/cache/release/10.0.0');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_ACCEPTED, $response->getStatusCode());
        self::assertSame(
            [
                'locations' => [
                    'http://localhost/v1/api/major/10/release/',
                    'http://localhost/v1/api/major/10/release/latest',
                    'http://localhost/v1/api/major/10/release/latest/security',
                    'http://localhost/v1/api/major/10/release/latest/content',
                    'http://localhost/v1/api/major/',
                    'http://localhost/v1/api/major/10',
                    'http://localhost/',
                    'http://localhost/release-notes',
                    'http://localhost/release-notes/',
                    'http://localhost/version/10',

                    'http://localhost/v1/api/release/',
                    'http://localhost/v1/api/release/10.0.0',
                    'http://localhost/v1/api/release/10.0.0/content',
                    'http://localhost/release-notes',
                    'http://localhost/release-notes/10.0.0',
                ]
            ],
            json_decode($response->getContent(), true)
        );
    }
}
