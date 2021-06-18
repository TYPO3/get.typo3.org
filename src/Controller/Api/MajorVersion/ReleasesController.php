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
use App\Entity\MajorVersion;
use App\Entity\Release;
use JMS\Serializer\SerializationContext;
use Nelmio\ApiDocBundle\Annotation\Model;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Swagger\Annotations as SWG;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\EventListener\AbstractSessionListener;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/v1/api/major/{version}/release", defaults={"_format": "json"})
 */
class ReleasesController extends AbstractController
{

    /**
     * Get releases by major version
     * @Route("/", methods={"GET"})
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
     *
     * @param string $version Specific TYPO3 Version to fetch
     */
    public function getReleasesByMajorVersion(string $version, Request $request): JsonResponse
    {
        $this->checkMajorVersionFormat($version);
        $majorVersion = $this->getDoctrine()->getRepository(MajorVersion::class)->findVersion($version);
        if (!$majorVersion instanceof MajorVersion) {
            throw new NotFoundHttpException('Version not found.');
        }
        $json = $this->serializer->serialize(
            $majorVersion->getReleases(),
            'json',
            SerializationContext::create()->setGroups(['data'])
        );
        $response = new JsonResponse($json, 200, [], true);
        $response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        $response->setEtag(md5($json));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * Get latest release of a major version
     * @Route("/latest", methods={"GET"})
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
     *
     * @param string $version Specific TYPO3 Version to fetch
     */
    public function getLatestReleaseByMajorVersion(string $version, Request $request): JsonResponse
    {
        $this->checkMajorVersionFormat($version);
        $majorVersion = $this->getDoctrine()->getRepository(MajorVersion::class)->findVersion($version);
        if (!$majorVersion instanceof MajorVersion) {
            throw new NotFoundHttpException('Version not found.');
        }
        $json = $this->serializer->serialize(
            $majorVersion->getLatestRelease(),
            'json',
            SerializationContext::create()->setGroups(['data'])
        );
        $response = new JsonResponse($json, 200, [], true);
        $response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        $response->setEtag(md5($json));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * Get latest security release of a major version
     * @Route("/latest/security", methods={"GET"})
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
     *
     * @param string|null $version Specific TYPO3 Version to fetch
     */
    public function getLatestSecurityReleaseByMajorVersion(string $version, Request $request): JsonResponse
    {
        $this->checkMajorVersionFormat($version);
        $release = $this->getDoctrine()->getRepository(Release::class)->findLatestSecurityReleaseByMajorVersion($version);
        if (!$release instanceof Release) {
            $json = json_encode([]);
        } else {
            $json = $this->serializer->serialize(
                $release,
                'json',
                SerializationContext::create()->setGroups(['data'])
            );
        }
        $response = new JsonResponse($json, 200, [], true);
        $response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        $response->setEtag(md5($json));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * Get latest release of a major version
     * @Route("/latest/content", methods={"GET"})
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
     *
     * @param string $version Specific TYPO3 Version to fetch
     */
    public function getLatestReleaseContentByMajorVersion(string $version, Request $request): JsonResponse
    {
        $this->checkMajorVersionFormat($version);
        $majorVersion = $this->getDoctrine()->getRepository(MajorVersion::class)->findVersion($version);
        if (!$majorVersion instanceof MajorVersion) {
            throw new NotFoundHttpException('Version not found.');
        }
        $json = $this->serializer->serialize(
            $majorVersion->getLatestRelease(),
            'json',
            SerializationContext::create()->setGroups(['content'])
        );
        $response = new JsonResponse($json, 200, [], true);
        $response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        $response->setEtag(md5($json));
        $response->isNotModified($request);
        return $response;
    }
}
