<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
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
        $this->assertSame(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function createReleaseAuthorized()
    {
        $this->logIn();
        $this->createMajorVersionFromJson('Json/MajorVersion-10.json');

        $response = $this->createReleaseFromJson('Json/Release-10.0.0.json');
        $this->assertSame(Response::HTTP_CREATED, $response->getStatusCode());
        $this->assertSame(['status' => 'success', 'Location' => '/v1/api/release/10.0.0'], json_decode($response->getContent(), true));

        $response = $this->createReleaseFromJson('Json/Release-10.0.1.json');
        $this->assertSame(Response::HTTP_CREATED, $response->getStatusCode());
        $this->assertSame(['status' => 'success', 'Location' => '/v1/api/release/10.0.1'], json_decode($response->getContent(), true));
    }
}
