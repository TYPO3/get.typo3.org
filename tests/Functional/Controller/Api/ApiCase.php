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
use Symfony\Component\HttpFoundation\Response;

class ApiCase extends AbstractCase
{
    private function loadFixture(string $fileName): string
    {
        $contents = file_get_contents($fileName);

        if ($contents === false) {
            throw new \LogicException(sprintf('Fixture "%s" not accessible', $fileName));
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

    protected function assertArrayStructure(array $expectedStructure, $actualArray)
    {
        // If the expected structure is an array (root level as list)
        if (isset($expectedStructure[0])) {
            // Validate each item in the list
            foreach ($actualArray as $item) {
                $this->assertArrayStructure($expectedStructure[0], $item);
            }
        } else {
            // Validate each key in the structure
            foreach ($expectedStructure as $key => $value) {
                $isOptional = str_starts_with($key, '?');
                $actualKey = $isOptional ? ltrim($key, '?') : $key;

                if (array_key_exists($actualKey, $actualArray)) {
                    // If the key exists, validate its structure or type
                    if (is_array($value)) {
                        if ($this->isListStructure($value)) {
                            // Validate a list of items
                            foreach ($actualArray[$actualKey] as $item) {
                                $this->assertArrayStructure($value[0], $item);
                            }
                        } else {
                            // Validate a single nested structure
                            $this->assertArrayStructure($value, $actualArray[$actualKey]);
                        }
                    } else {
                        $this->assertIsType($value, $actualArray[$actualKey], "Key '$actualKey' does not match the expected type.");
                    }
                } elseif (!$isOptional) {
                    // If the key is not optional, it must exist
                    $this->fail("Missing required key: $actualKey");
                }
            }
        }
    }

    protected function assertIsType(string $type, $value, string $message)
    {
        switch ($type) {
            case 'string':
                $this->assertIsString($value, $message);
                break;
            case 'boolean':
                $this->assertIsBool($value, $message);
                break;
            case 'integer':
                $this->assertIsInt($value, $message);
                break;
            case 'float':
                $this->assertIsFloat($value, $message); // New check for float
                break;
            case 'array':
                $this->assertIsArray($value, $message);
                break;
            case 'datetime':
                $this->assertValidDateTime($value, $message);
                break;
            default:
                $this->fail("Unsupported type: $type");
        }
    }

    protected function assertValidDateTime(string $value, string $message)
    {
        // ISO 8601 datetime regex
        $pattern = '/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(\.\d+)?(\+\d{2}:\d{2}|Z)$/';
        $this->assertMatchesRegularExpression($pattern, $value, $message);
    }

    protected function isListStructure(array $structure): bool
    {
        // Determines if the given structure is a list of items (e.g., [ { ... } ])
        return count($structure) === 1 && array_keys($structure) === [0] && is_array($structure[0]);
    }
}
