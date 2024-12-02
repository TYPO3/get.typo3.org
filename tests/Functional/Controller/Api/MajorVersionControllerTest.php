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

class MajorVersionControllerTest extends ApiCase
{
    /**
     * @test
     */
    public function createMajorVersionUnauthorized(): void
    {
        $response = $this->createMajorVersionFromJson('Json/MajorVersion-10.json');
        self::assertSame(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function createMajorVersionAuthorized(): void
    {
        $this->logIn();
        $response = $this->createMajorVersionFromJson('Json/MajorVersion-10.json');
        self::assertSame(Response::HTTP_CREATED, $response->getStatusCode());
        self::assertSame(['status' => 'success', 'Location' => '/v1/api/major/10'], $this->decodeResponse($response));
    }

    /**
     * @test
     */
    public function getMajorReleasesStructureTest(): void
    {
        $this->addFixture(new MajorVersionFixtures());
        $this->addFixture(new ReleaseFixtures());
        $this->addFixture(new RequirementFixtures());
        $this->executeFixtures();

        $this->client->request('GET', '/api/v1/major/');

        $response = $this->client->getResponse();
        $responseContent = json_decode((string)$response->getContent(), true, 512, JSON_THROW_ON_ERROR);

        self::assertIsArray($responseContent);
        $this->assertArrayStructure(
            [
                [
                    'version' => 'float',
                    'title' => 'string',
                    'subtitle' => 'string',
                    'description' => 'string',
                    'release_date' => 'datetime',
                    '?regular_maintenance_until' => 'datetime',
                    '?maintained_until' => 'datetime',
                    '?elts_until' => 'datetime',
                    'requirements' => [
                        [
                            'category' => 'string',
                            'name' => 'string',
                            '?min' => 'string',
                            '?max' => 'string',
                        ],
                    ],
                    '?lts' => 'float',
                    '?active' => 'boolean',
                    '?elts' => 'boolean',
                ],
            ],
            $responseContent
        );
    }

    /**
     * @test
     */
    public function getMajorReleaseWithVersionStructureTest(): void
    {
        $this->addFixture(new MajorVersionFixtures());
        $this->addFixture(new ReleaseFixtures());
        $this->addFixture(new RequirementFixtures());
        $this->executeFixtures();

        $this->client->request('GET', '/api/v1/major/10');

        $response = $this->client->getResponse();
        $responseContent = json_decode((string)$response->getContent(), true, 512, JSON_THROW_ON_ERROR);

        self::assertIsArray($responseContent);
        $this->assertArrayStructure(
            [
                'version' => 'float',
                'title' => 'string',
                'subtitle' => 'string',
                'description' => 'string',
                'release_date' => 'datetime',
                '?regular_maintenance_until' => 'datetime',
                '?maintained_until' => 'datetime',
                '?elts_until' => 'datetime',
                'requirements' => [
                    [
                        'category' => 'string',
                        'name' => 'string',
                        '?min' => 'string',
                        '?max' => 'string',
                    ],
                ],
                '?lts' => 'float',
                '?active' => 'boolean',
                '?elts' => 'boolean',
            ],
            $responseContent
        );
    }
}
