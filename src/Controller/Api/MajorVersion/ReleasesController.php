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

namespace App\Controller\Api\MajorVersion;

use App\Controller\Api\AbstractController;
use App\Entity\Release;
use JMS\Serializer\SerializationContext;
use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Annotations as OA;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Cache\ItemInterface;

#[Route(path: ['/api/v1/major/{version}/release', '/v1/api/major/{version}/release'], defaults: ['_format' => 'json'])]
class ReleasesController extends AbstractController
{
    /**
     * Get releases by major version.
     *
     * @OA\Response(
     *     response=200,
     *     description="Returns TYPO3 releases by major version",
     *
     *     @OA\JsonContent(
     *         type="array",
     *
     *         @OA\Items(ref=@Model(type=\App\Entity\Release::class, groups={"data"}))
     *     )
     * )
     *
     * @OA\Response(
     *     response=400,
     *     description="Version is not numeric."
     * )
     * @OA\Response(
     *     response=404,
     *     description="Version not found."
     * )
     *
     * @OA\Tag(name="major")
     * @OA\Tag(name="release")
     */
    #[Route(path: '/', methods: ['GET'])]
    public function getReleasesByMajorVersion(string $version): JsonResponse
    {
        $json = $this->getCache()->get('releases-data-' . $version, function (ItemInterface $item) use ($version): string {
            $item->tag(['releases', 'releases-' . $version]);

            $majorVersion = $this->findMajorVersion($version);

            return $this->getSerializer()->serialize(
                $majorVersion->getReleases(),
                'json',
                SerializationContext::create()->setGroups(['data'])
            );
        });

        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    /**
     * Get latest release of a major version.
     *
     * @OA\Response(
     *     response=200,
     *     description="Returns data on latest TYPO3 release of a major version",
     *
     *     @Model(type=\App\Entity\Release::class, groups={"data"})
     * )
     *
     * @OA\Response(
     *     response=400,
     *     description="Version is not numeric"
     * )
     * @OA\Response(
     *     response=404,
     *     description="Version not found."
     * )
     *
     * @OA\Tag(name="major")
     * @OA\Tag(name="release")
     */
    #[Route(path: '/latest', methods: ['GET'])]
    public function getLatestReleaseByMajorVersion(string $version): JsonResponse
    {
        $json = $this->getCache()->get('release-latest-data-' . $version, function (ItemInterface $item) use ($version): string {
            $item->tag(['releases', 'releases-' . $version]);

            $majorVersion = $this->findMajorVersion($version);

            return $this->getSerializer()->serialize(
                $majorVersion->getLatestRelease(),
                'json',
                SerializationContext::create()->setGroups(['data'])
            );
        });

        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    /**
     * Get latest security release of a major version.
     *
     * @OA\Response(
     *     response=200,
     *     description="Returns data on latest TYPO3 security release of a major version",
     *
     *     @Model(type=\App\Entity\Release::class, groups={"data"})
     * )
     *
     * @OA\Response(
     *     response=400,
     *     description="Version is not numeric"
     * )
     * @OA\Response(
     *     response=404,
     *     description="Version not found."
     * )
     *
     * @OA\Tag(name="major")
     * @OA\Tag(name="release")
     */
    #[Route(path: '/latest/security', methods: ['GET'])]
    public function getLatestSecurityReleaseByMajorVersion(string $version): JsonResponse
    {
        $this->checkMajorVersionFormat($version);

        $json = $this->getCache()->get('release-latest-security-data-' . $version, function (ItemInterface $item) use ($version): string {
            $item->tag(['releases', 'releases-' . $version]);

            $release = $this->findLatestSecurityReleaseByMajorVersion($version);
            if (!$release instanceof Release) {
                $json = json_encode([]);
                if ($json === false) {
                    $json = '{}';
                }
            } else {
                $json = $this->getSerializer()->serialize(
                    $release,
                    'json',
                    SerializationContext::create()->setGroups(['data'])
                );
            }

            return $json;
        });

        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    /**
     * Get latest release of a major version.
     *
     * @OA\Response(
     *     response=200,
     *     description="Returns major TYPO3 version information",
     *
     *     @Model(type=\App\Entity\Release::class, groups={"content"})
     * )
     *
     * @OA\Response(
     *     response=400,
     *     description="Version is not numeric."
     * )
     * @OA\Response(
     *     response=404,
     *     description="Version not found."
     * )
     *
     * @OA\Tag(name="major")
     * @OA\Tag(name="content")
     * @OA\Tag(name="release")
     */
    #[Route(path: '/latest/content', methods: ['GET'])]
    public function getLatestReleaseContentByMajorVersion(string $version): JsonResponse
    {
        $json = $this->getCache()->get('release-latest-content-' . $version, function (ItemInterface $item) use ($version): string {
            $item->tag(['releases', 'releases-' . $version]);

            $majorVersion = $this->findMajorVersion($version);

            return $this->getSerializer()->serialize(
                $majorVersion->getLatestRelease(),
                'json',
                SerializationContext::create()->setGroups(['content'])
            );
        });

        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }
}
