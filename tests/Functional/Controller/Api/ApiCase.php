<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Tests\Functional\Controller\Api;

use App\Tests\Functional\AbstractCase;
use Symfony\Component\HttpFoundation\Response;

class ApiCase extends AbstractCase
{
    protected function createMajorVersionFromJson(string $filePath): Response
    {
        $this->client->request(
            'POST',
            '/v1/api/major/',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            file_get_contents(__DIR__ . '/../../Fixtures/' . $filePath)
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
            file_get_contents(__DIR__ . '/../../Fixtures/' . $filePath)
        );
        return $this->client->getResponse();
    }
}
