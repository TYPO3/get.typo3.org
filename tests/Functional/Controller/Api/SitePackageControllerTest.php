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

class SitePackageControllerTest extends ApiCase
{
    /**
     * @test
     */
    public function createSitePackage(): void
    {
        $this->client->request(
            'POST',
            '/api/v1/sitepackage/',
            [],
            [],
            [
                'CONTENT_TYPE' => 'application/json',
                'HTTP_ACCEPT' => 'application/zip',
            ],
            (string)json_encode([
                'base_package' => 'bootstrap_package',
                'typo3_version' => 13.4,
                'title' => 'My Site Package',
                'vendor_name' => 'MyVendor',
                'description' => 'Project Configuration for Client',
                'repository_url' => 'https://github.com/FriendsOfTYPO3/introduction',
                'author' => [
                    'name' => 'J. Doe',
                    'email' => 'info@typo3.com',
                    'company' => 'TYPO3',
                    'homepage' => 'https://typo3.com',
                ],
            ])
        );

        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_OK, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function validationMissingCheck(): void
    {
        $this->client->request(
            'POST',
            '/api/v1/sitepackage/',
            [],
            [],
            [
                'CONTENT_TYPE' => 'application/json',
                'HTTP_ACCEPT' => 'application/zip',
            ],
            (string)json_encode([
                'base_package' => 'bootstrap_package',
                'typo3_version' => 999,
            ])
        );

        $response = $this->client->getResponse();
        self::assertSame(Response::HTTP_BAD_REQUEST, $response->getStatusCode());
        $responseContent = json_decode((string)$response->getContent(), true, 512, JSON_THROW_ON_ERROR);
        self::assertSame($responseContent, [
            'errors' => [
                'Please enter a vendor, CamelCase',
                'typo3_version' => [
                    'The selected choice is invalid.',
                ],
                'title' => [
                    'Please enter a title for your site package',
                ],
            ],
        ]);
    }
}
