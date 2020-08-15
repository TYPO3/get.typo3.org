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

use Symfony\Component\HttpFoundation\Response;

class ReleaseControllerTest extends ApiCase
{
    /**
     * @test
     */
    public function createReleaseUnauthorized()
    {
        $response = $this->createReleaseFromJson('Json/Release-10.0.0.json');
        self::assertSame(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function createReleaseAuthorized()
    {
        $this->logIn();
        $this->createMajorVersionFromJson('Json/MajorVersion-10.json');

        $response = $this->createReleaseFromJson('Json/Release-10.0.0.json');
        self::assertSame(Response::HTTP_CREATED, $response->getStatusCode());
        self::assertSame(['status' => 'success', 'Location' => '/v1/api/release/10.0.0'], json_decode($response->getContent(), true));

        $response = $this->createReleaseFromJson('Json/Release-10.0.1.json');
        self::assertSame(Response::HTTP_CREATED, $response->getStatusCode());
        self::assertSame(['status' => 'success', 'Location' => '/v1/api/release/10.0.1'], json_decode($response->getContent(), true));
    }
}
