<?php

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

use App\DataFixtures\MajorVersionFixtures;
use App\DataFixtures\ReleaseFixtures;
use App\DataFixtures\RequirementFixtures;
use App\Tests\Functional\AbstractCase;
use Symfony\Component\HttpFoundation\Response;
use RuntimeException;

class JsonControllerTest extends AbstractCase
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
    public function index(): void
    {
        $this->client->request('GET', '/json');
        $response = $this->client->getResponse();
        $json = $response->getContent();

        if ($json === false) {
            throw new RuntimeException('Error no response content.', 1_657_642_832);
        }

        if (!\is_array($content = json_decode($json, true, 512, JSON_THROW_ON_ERROR))) {
            throw new RuntimeException('Error array expected.', 1_657_642_833);
        }

        self::assertSame(Response::HTTP_OK, $response->getStatusCode());
        self::assertArrayHasKey('10', $content);
        self::assertArrayHasKey('latest_stable', $content);
        self::assertArrayHasKey('latest_old_stable', $content);
        self::assertArrayHasKey('latest_lts', $content);
        self::assertArrayHasKey('latest_old_lts', $content);
    }
}
