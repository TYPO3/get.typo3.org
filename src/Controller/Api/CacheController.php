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

use App\Entity\MajorVersion;
use App\Repository\MajorVersionRepository;
use Nelmio\ApiDocBundle\Annotation\Security as DocSecurity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Swagger\Annotations as SWG;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * @Route("/v1/api/cache", methods={"DELETE"})
 * @IsGranted("ROLE_ADMIN")
 */
class CacheController extends AbstractController
{
    /**
     * Purge caches related to TYPO3 major version
     * @Route("/majorVersion/{version}")
     * @DocSecurity(name="Basic")
     * @SWG\Response(
     *     response=202,
     *     description="Successfully purged caches."
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Invalid version format."
     * )
     * @SWG\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @SWG\Tag(name="cache")
     *
     * @param string $version Specific TYPO3 Version to delete
     */
    public function purgeMajorRelease(string $version): JsonResponse
    {
        $this->checkMajorVersionFormat($version);
        /** @var MajorVersionRepository $majorVersions */
        $majorVersions = $this->getDoctrine()->getRepository(MajorVersion::class);
        $majorVersion = $majorVersions->findVersion($version);
        if (!$majorVersion instanceof MajorVersion) {
            throw new NotFoundHttpException('Version not found.');
        }
        $purgeUrls = $this->getPurgeUrlsForMajorVersion((float)$version);

        $this->deleteReleases();

        return (new JsonResponse(['locations' => $purgeUrls]))->setStatusCode(Response::HTTP_ACCEPTED);
    }

    /**
     * Purge caches related to single TYPO3 release
     * @Route("/release/{version}")
     * @DocSecurity(name="Basic")
     * @SWG\Response(
     *     response=202,
     *     description="Successfully purged caches."
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Invalid version format"
     * )
     * @SWG\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @SWG\Tag(name="cache")
     *
     * @param string $version Specific TYPO3 Version to delete
     */
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

        $this->deleteReleases();

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
     * Deletes the releases.json in the cache
     */
    private function deleteReleases(): void
    {
        $filesystemAdapter = new FilesystemAdapter();
        $filesystemAdapterHasItem = $filesystemAdapter->hasItem('releases.json');
        if ($filesystemAdapterHasItem) {
            $filesystemAdapter->delete('releases.json');
        }
    }

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
