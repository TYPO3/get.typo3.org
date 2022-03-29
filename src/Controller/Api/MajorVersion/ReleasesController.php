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
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Swagger\Annotations as SWG;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\EventListener\AbstractSessionListener;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: ['/api/v1/major/{version}/release', '/v1/api/major/{version}/release'], defaults: ['_format' => 'json'])]
class ReleasesController extends AbstractController
{
    /**
     * Get releases by major version
     * @Cache(expires="tomorrow", public=true)
     * @SWG\Response(
     *     response=200,
     *     description="Returns TYPO3 releases by major version",
     *     @SWG\Schema(
     *         @SWG\Items(
     *             type="array",
     *             @Model(type=\App\Entity\Release::class, groups={"data"})
     *         )
     *     )
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Version is not numeric."
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @SWG\Tag(name="major")
     * @SWG\Tag(name="release")
     */
    #[Route(path: '/', methods: ['GET'])]
    public function getReleasesByMajorVersion(string $version, Request $request): JsonResponse
    {
        $majorVersion = $this->findMajorVersion($version);
        $json = $this->getSerializer()->serialize(
            $majorVersion->getReleases(),
            'json',
            SerializationContext::create()->setGroups(['data'])
        );
        $response = new JsonResponse($json, \Symfony\Component\HttpFoundation\Response::HTTP_OK, [], true);
        $response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        $response->setEtag(md5($json));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * Get latest release of a major version
     * @Cache(expires="tomorrow", public=true)
     * @SWG\Response(
     *     response=200,
     *     description="Returns data on latest TYPO3 release of a major version",
     *     @SWG\Schema(
     *         @Model(type=\App\Entity\Release::class, groups={"data"})
     *     )
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Version is not numeric"
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @SWG\Tag(name="major")
     * @SWG\Tag(name="release")
     */
    #[Route(path: '/latest', methods: ['GET'])]
    public function getLatestReleaseByMajorVersion(string $version, Request $request): JsonResponse
    {
        $majorVersion = $this->findMajorVersion($version);
        $json = $this->getSerializer()->serialize(
            $majorVersion->getLatestRelease(),
            'json',
            SerializationContext::create()->setGroups(['data'])
        );
        $response = new JsonResponse($json, \Symfony\Component\HttpFoundation\Response::HTTP_OK, [], true);
        $response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        $response->setEtag(md5($json));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * Get latest security release of a major version
     * @Cache(expires="tomorrow", public=true)
     * @SWG\Response(
     *     response=200,
     *     description="Returns data on latest TYPO3 security release of a major version",
     *     @SWG\Schema(
     *         @Model(type=\App\Entity\Release::class, groups={"data"})
     *     )
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Version is not numeric"
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @SWG\Tag(name="major")
     * @SWG\Tag(name="release")
     */
    #[Route(path: '/latest/security', methods: ['GET'])]
    public function getLatestSecurityReleaseByMajorVersion(string $version, Request $request): JsonResponse
    {
        $this->checkMajorVersionFormat($version);
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

        $response = new JsonResponse($json, \Symfony\Component\HttpFoundation\Response::HTTP_OK, [], true);
        $response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        $response->setEtag(md5($json));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * Get latest release of a major version
     * @Cache(expires="tomorrow", public=true)
     * @SWG\Response(
     *     response=200,
     *     description="Returns major TYPO3 version information",
     *     @SWG\Schema(
     *         @Model(type=\App\Entity\Release::class, groups={"content"})
     *     )
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Version is not numeric."
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @SWG\Tag(name="major")
     * @SWG\Tag(name="content")
     * @SWG\Tag(name="release")
     */
    #[Route(path: '/latest/content', methods: ['GET'])]
    public function getLatestReleaseContentByMajorVersion(string $version, Request $request): JsonResponse
    {
        $majorVersion = $this->findMajorVersion($version);
        $json = $this->getSerializer()->serialize(
            $majorVersion->getLatestRelease(),
            'json',
            SerializationContext::create()->setGroups(['content'])
        );
        $response = new JsonResponse($json, \Symfony\Component\HttpFoundation\Response::HTTP_OK, [], true);
        $response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        $response->setEtag(md5($json));
        $response->isNotModified($request);
        return $response;
    }
}
