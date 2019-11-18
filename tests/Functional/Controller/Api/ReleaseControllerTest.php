<?php

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Tests\Functional\Controller\Api;

use App\Tests\Functional\AbstractCase;
use Symfony\Component\HttpFoundation\Response;

class ReleaseControllerTest extends AbstractCase
{
    /**
     * @test
     */
    public function createMajorVersion()
    {
        $this->logIn();
        $this->client->request(
            'POST',
            '/v1/api/major/',
            [],
            [],
            ['CONTENT_TYPE' => 'application/json'],
            json_encode(
                [
                    'version' => '10.4',
                    'lts' => 1,
                    'title' => 'TYPO3 10 LTS',
                    'subtitle' => 'It’s not the years, honey. It’s the mileage.',
                    'description' => 'In contrast to the treasure find, which usually happens accidentally and unintentionally, the treasure hunt is a targeted search for lost or hidden valuables.',
                    'release_date' => '2020-04-07T16:00:00 UTC',
                    'maintained_until' => '2023-04-07T15:59:59 UTC'
                ]
            )
        );
        $this->assertSame(Response::HTTP_CREATED, $this->client->getResponse()->getStatusCode());
        $this->assertSame(
            [
                'status' => 'success',
                'Location' => '/v1/api/major/10.4'
            ],
            json_decode($this->client->getResponse()->getContent(), true)
        );
    }
}
