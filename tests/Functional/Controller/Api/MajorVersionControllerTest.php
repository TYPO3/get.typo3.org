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

class MajorVersionControllerTest extends ApiCase
{
    /**
     * @test
     */
    public function createMajorVersionUnauthorized()
    {
        $response = $this->createMajorVersionFromJson('Json/MajorVersion-10.json');
        $this->assertSame(Response::HTTP_UNAUTHORIZED, $response->getStatusCode());
    }

    /**
     * @test
     */
    public function createMajorVersionAuthorized()
    {
        $this->logIn();
        $response = $this->createMajorVersionFromJson('Json/MajorVersion-10.json');
        $this->assertSame(Response::HTTP_CREATED, $response->getStatusCode());
        $this->assertSame(['status' => 'success', 'Location' => '/v1/api/major/10'], json_decode($response->getContent(), true));
    }
}
