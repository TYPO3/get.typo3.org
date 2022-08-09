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

use Nelmio\ApiDocBundle\Annotation\Security as Security;
use OpenApi\Annotations as OA;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route(path: ['/api/v1/cache', '/v1/api/cache'], methods: ['DELETE'], defaults: ['_format' => 'json'])]
#[IsGranted('ROLE_ADMIN')]
class CacheController extends AbstractController
{
    /**
     * Purge caches related to TYPO3 major version
     * @Security(name="Basic")
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
     * @OA\Tag(name="cache")
     */
    #[Route(path: '/majorVersion/{version}')]
    public function purgeMajorRelease(string $version): JsonResponse
    {
        $this->findMajorVersion($version);
        $purgeUrls = $this->getPurgeUrlsForMajorVersion((float)$version);
        $this->deleteRelease($version);
        $this->deleteMajorVersion($version);
        return (new JsonResponse(['locations' => $purgeUrls]))->setStatusCode(Response::HTTP_ACCEPTED);
    }

    /**
     * Purge caches related to single TYPO3 release
     * @Security(name="Basic")
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
     * @OA\Tag(name="cache")
     */
    #[Route(path: '/release/{version}')]
    public function purgeRelease(string $version): JsonResponse
    {
        $this->checkVersionFormat($version);
        $majorVersion = $this->getMajorVersionByReleaseVersion($version);
        $purgeUrls = $this->getPurgeUrlsForMajorVersion($majorVersion->getVersion());
        $releaseUrls = [
            $this->generateAbsoluteUrl('app_api_release_getrelease'),
            $this->generateAbsoluteUrl(
                'release_show',
                ['version' => $version]
            ),
            $this->generateAbsoluteUrl(
                'app_api_release_getcontentforversion',
                ['version' => $version]
            ),
            $this->generateAbsoluteUrl('release-notes'),
            $this->generateAbsoluteUrl(
                'release-notes-for-version',
                ['version' => $version]
            ),
        ];
        $this->deleteRelease((string)$majorVersion->getVersion());
        return (new JsonResponse(['locations' => array_merge($purgeUrls, $releaseUrls)]))
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    /**
     * @return string[]
     */
    private function getPurgeUrlsForMajorVersion(float $version): array
    {
        return [
            $this->generateAbsoluteUrlForVersion(
                'app_api_majorversion_releases_getreleasesbymajorversion',
                $version
            ),
            $this->generateAbsoluteUrlForVersion(
                'app_api_majorversion_releases_getlatestreleasebymajorversion',
                $version
            ),
            $this->generateAbsoluteUrlForVersion(
                'app_api_majorversion_releases_getlatestsecurityreleasebymajorversion',
                $version
            ),
            $this->generateAbsoluteUrlForVersion(
                'app_api_majorversion_releases_getlatestreleasecontentbymajorversion',
                $version
            ),
            $this->generateAbsoluteUrl('app_api_majorversion_getmajorreleases'),
            $this->generateAbsoluteUrlForVersion(
                'majorVersion_show',
                $version
            ),
            $this->generateAbsoluteUrl('root'),
            $this->generateAbsoluteUrl('release-notes'),
            $this->generateAbsoluteUrl('app_default_releasenotes'),
            $this->generateAbsoluteUrlForVersion(
                'version',
                $version
            ),
        ];
    }

    /**
     * Deletes a release and the releases.json in the cache
     */
    private function deleteRelease(string $version): void
    {
        $this->getCache()->invalidateTags([
            'release-' . $version,
            'release',
        ]);
    }

    /**
     * Deletes the releases.json in the cache
     */
    private function deleteMajorVersion(string $version): void
    {
        $this->getCache()->invalidateTags([
            'major-version-' . $version,
            'major-version',
            'requirements-' . $version,
        ]);
    }

    /**
     * @param array<string, mixed> $parameters
     */
    private function generateAbsoluteUrl(string $route, array $parameters = []): string
    {
        return $this->generateUrl(
            $route,
            $parameters,
            UrlGeneratorInterface::ABSOLUTE_URL
        );
    }

    private function generateAbsoluteUrlForVersion(string $route, float $version): string
    {
        return $this->generateAbsoluteUrl(
            $route,
            ['version' => $version]
        );
    }
}
