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

namespace App\Controller\Api;

use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Annotations as OA;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: ['/api/v1/cache', '/v1/api/cache'], methods: ['DELETE'], defaults: ['_format' => 'json'])]
#[IsGranted('ROLE_ADMIN')]
class CacheController extends AbstractController
{
    /**
     * Purge caches related to TYPO3 major version.
     *
     * @Security(name="Basic")
     *
     * @OA\Response(
     *     response=202,
     *     description="Successfully purged caches."
     * )
     * @OA\Response(
     *     response=400,
     *     description="Invalid version format."
     * )
     * @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @OA\Response(
     *     response=404,
     *     description="Version not found."
     * )
     *
     * @OA\Tag(name="cache")
     */
    #[Route(path: '/majorVersion/{version}')]
    public function purgeMajorRelease(string $version): JsonResponse
    {
        $this->findMajorVersion($version);
        $this->getCacheService()->purgeMajorVersion($version);

        return $this->json([], Response::HTTP_ACCEPTED);
    }

    /**
     * Purge caches related to single TYPO3 release.
     *
     * @Security(name="Basic")
     *
     * @OA\Response(
     *     response=202,
     *     description="Successfully purged caches."
     * )
     * @OA\Response(
     *     response=400,
     *     description="Invalid version format"
     * )
     * @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @OA\Response(
     *     response=404,
     *     description="Version not found."
     * )
     *
     * @OA\Tag(name="cache")
     */
    #[Route(path: '/release/{version}')]
    public function purgeRelease(string $version): JsonResponse
    {
        $this->checkVersionFormat($version);
        $this->getCacheService()->purgeMajorVersionReleases(
            (string)$this->getMajorVersionByReleaseVersion($version)->getVersion()
        );

        return $this->json([], Response::HTTP_ACCEPTED);
    }
}
