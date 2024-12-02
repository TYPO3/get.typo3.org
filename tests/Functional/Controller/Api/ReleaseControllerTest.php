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

class ReleaseControllerTest extends ApiCase
{
    /**
     * @test
     */
    public function createReleaseUnauthorized(): void
    {
        $response = $this->createReleaseFromJson('Json/Release-10.0.0.json');
        self::assertSame(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function createReleaseAuthorized(): void
    {
        $this->logIn();
        $this->createMajorVersionFromJson('Json/MajorVersion-10.json');

        $response = $this->createReleaseFromJson('Json/Release-10.0.0.json');
        self::assertSame(Response::HTTP_CREATED, $response->getStatusCode());
        self::assertSame(
            ['status' => 'success', 'Location' => '/v1/api/release/10.0.0'],
            $this->decodeResponse($response)
        );

        $response = $this->createReleaseFromJson('Json/Release-10.0.1.json');
        self::assertSame(Response::HTTP_CREATED, $response->getStatusCode());
        self::assertSame(
            ['status' => 'success', 'Location' => '/v1/api/release/10.0.1'],
            $this->decodeResponse($response)
        );
    }

    /**
     * @test
     */
    public function getReleaseStructureTest(): void
    {
        $this->addFixture(new MajorVersionFixtures());
        $this->addFixture(new ReleaseFixtures());
        $this->addFixture(new RequirementFixtures());
        $this->executeFixtures();

        $this->client->request('GET', '/api/v1/release/');

        $response = $this->client->getResponse();
        $responseContent = json_decode((string)$response->getContent(), true, 512, JSON_THROW_ON_ERROR);

        self::assertIsArray($responseContent);
        $this->assertArrayStructure(
            [
                [
                    'version' => 'string',
                    'date' => 'datetime',
                    'type' => 'string',
                    'elts' => 'boolean',
                    'tar_package' => [
                        '?md5sum' => 'string',
                        '?sha1sum' => 'string',
                        '?sha256sum' => 'string',
                    ],
                    'zip_package' => [
                        '?md5sum' => 'string',
                        '?sha1sum' => 'string',
                        '?sha256sum' => 'string',
                    ],
                ],
            ],
            $responseContent
        );
    }

    /**
     * @test
     */
    public function getReleaseWithVersionStructureTest(): void
    {
        $this->addFixture(new MajorVersionFixtures());
        $this->addFixture(new ReleaseFixtures());
        $this->addFixture(new RequirementFixtures());
        $this->executeFixtures();

        $this->client->request('GET', '/api/v1/release/10.0.0');

        $response = $this->client->getResponse();
        $responseContent = json_decode((string)$response->getContent(), true, 512, JSON_THROW_ON_ERROR);

        self::assertIsArray($responseContent);
        $this->assertArrayStructure(
            [
                'version' => 'string',
                'date' => 'datetime',
                'type' => 'string',
                'elts' => 'boolean',
                'tar_package' => [
                    '?md5sum' => 'string',
                    '?sha1sum' => 'string',
                    '?sha256sum' => 'string',
                ],
                'zip_package' => [
                    '?md5sum' => 'string',
                    '?sha1sum' => 'string',
                    '?sha256sum' => 'string',
                ],
            ],
            $responseContent
        );
    }

    /**
     * @test
     */
    public function getContentForVersionStructureTest(): void
    {
        $this->addFixture(new MajorVersionFixtures());
        $this->addFixture(new ReleaseFixtures());
        $this->addFixture(new RequirementFixtures());
        $this->executeFixtures();

        $this->client->request('GET', '/api/v1/release/10.0.0/content');

        $response = $this->client->getResponse();
        $responseContent = json_decode((string)$response->getContent(), true, 512, JSON_THROW_ON_ERROR);

        self::assertIsArray($responseContent);
        $this->assertArrayStructure(
            [
                'version' => 'string',
                'date' => 'datetime',
                'elts' => 'boolean',
                'release_notes' => [
                    'news_link' => 'string',
                    'news' => 'string',
                    'upgrading_instructions' => 'string',
                    'changes' => 'string',
                    '?legacy_content' => 'string',
                ],
            ],
            $responseContent
        );
    }
}
