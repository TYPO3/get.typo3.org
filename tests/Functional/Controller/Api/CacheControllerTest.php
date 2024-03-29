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
    protected function setUp(): void
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
    public function deleteCacheMajorVersionUnauthorized(): void
    {
        $this->client->request('DELETE', '/v1/api/cache/majorVersion/10');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function deleteCacheMajorVersionInvalid(): void
    {
        $this->logIn();
        $this->client->request('DELETE', '/v1/api/cache/majorVersion/NotAValidVersionNumber');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_BAD_REQUEST, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function deleteCacheMajorVersionNotFound(): void
    {
        $this->logIn();
        $this->client->request('DELETE', '/v1/api/cache/majorVersion/99');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_NOT_FOUND, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function deleteCacheMajorVersionAuthorized(): void
    {
        $this->logIn();
        $this->client->request('DELETE', '/v1/api/cache/majorVersion/10');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_ACCEPTED, $response->getStatusCode());
        self::assertSame(
            [],
            $this->decodeResponse($response)
        );
        $this->client->request('DELETE', '/v1/api/cache/majorVersion/6.2');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_ACCEPTED, $response->getStatusCode());
        self::assertSame(
            [],
            $this->decodeResponse($response)
        );
    }

    /**
     * @test
     */
    public function deleteCacheReleaseUnauthorized(): void
    {
        $this->client->request('DELETE', '/v1/api/cache/release/10.0.0');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function deleteCacheReleaseInvalid(): void
    {
        $this->logIn();
        $this->client->request('DELETE', '/v1/api/cache/release/NotAValidVersionNumber');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_BAD_REQUEST, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function deleteCacheReleaseNotFound(): void
    {
        $this->logIn();
        $this->client->request('DELETE', '/v1/api/cache/release/99.99.99');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_NOT_FOUND, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function deleteCacheReleaseAuthorized(): void
    {
        $this->logIn();
        $this->client->request('DELETE', '/v1/api/cache/release/10.0.0');
        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_ACCEPTED, $response->getStatusCode());
        self::assertSame(
            [],
            $this->decodeResponse($response)
        );
    }
}
