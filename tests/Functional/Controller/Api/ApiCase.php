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

use App\Tests\Functional\AbstractCase;
use LogicException;
use Symfony\Component\HttpFoundation\Response;

class ApiCase extends AbstractCase
{
    private function loadFixture(string $fileName): string
    {
        $contents = file_get_contents($fileName);

        if ($contents === false) {
            throw new LogicException(sprintf('Fixture "%s" not accessible', $fileName));
        }

        return $contents;
    }

    /**
     * @return array<string, mixed>
     */
    protected function decodeResponse(Response $response): array
    {
        $content = $response->getContent();
        if ($content === false) {
            return [];
        }

        $content = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
        if (!is_array($content)) {
            return [];
        }

        return $content;
    }

    protected function createMajorVersionFromJson(string $filePath): Response
    {
        $this->client->request(
            'POST',
            '/v1/api/major/',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            $this->loadFixture(__DIR__ . '/../../Fixtures/' . $filePath)
        );

        return $this->client->getResponse();
    }

    protected function createReleaseFromJson(string $filePath): Response
    {
        $this->client->request(
            'POST',
            '/v1/api/release/',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            $this->loadFixture(__DIR__ . '/../../Fixtures/' . $filePath)
        );

        return $this->client->getResponse();
    }

    protected function createRequirementFromJson(string $filePath, string $majorVersion): Response
    {
        $this->client->request(
            'POST',
            '/v1/api/major/' . $majorVersion . '/requirement/',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            $this->loadFixture(__DIR__ . '/../../Fixtures/' . $filePath)
        );

        return $this->client->getResponse();
    }
}
