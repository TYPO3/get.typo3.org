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

use App\Tests\Functional\AbstractCase;
use App\Tests\Functional\Fixtures\MajorVersionFixtures;
use App\Tests\Functional\Fixtures\ReleaseFixtures;
use RuntimeException;
use Symfony\Component\HttpFoundation\Response;

use function is_array;

class JsonControllerTest extends AbstractCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->addFixture(new MajorVersionFixtures());
        $this->addFixture(new ReleaseFixtures());
        $this->executeFixtures();
    }

    /**
     * @test
     */
    public function index(): void
    {
        $this->client->request('GET', '/json');
        $response = $this->client->getResponse();

        if (($json = $response->getContent()) === false) {
            throw new RuntimeException('Error no response content.', 1_657_642_832);
        }

        if (!is_array($content = json_decode($json, true, 512, JSON_THROW_ON_ERROR))) {
            throw new RuntimeException('Error array expected.', 1_657_642_833);
        }

        self::assertSame(Response::HTTP_OK, $response->getStatusCode());

        self::assertArrayHasKey('10', $content);
        self::assertArrayHasKey('9', $content);
        self::assertArrayHasKey('8', $content);
        self::assertArrayHasKey('7', $content);

        self::assertArrayHasKey('latest_stable', $content);
        self::assertArrayHasKey('latest_old_stable', $content);
        self::assertArrayHasKey('latest_lts', $content);
        self::assertArrayHasKey('latest_old_lts', $content);

        self::assertSame('10.0.2', $content['latest_stable']);
        self::assertSame('10.0.1', $content['latest_old_stable']);
        self::assertSame('9.5.5', $content['latest_lts']);
        self::assertSame('8.7.8', $content['latest_old_lts']);
    }
}
