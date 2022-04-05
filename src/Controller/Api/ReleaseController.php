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

use App\Entity\Embeddables\ReleaseNotes;
use App\Entity\Release;
use JMS\Serializer\SerializationContext;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security as DocSecurity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Swagger\Annotations as SWG;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\EventListener\AbstractSessionListener;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: ['/api/v1/release', '/v1/api/release'], defaults: ['_format' => 'json'])]
class ReleaseController extends AbstractController
{
    /**
     * Get information about all TYPO3 releases or a specific release
     * @Cache(expires="tomorrow", public=true)
     * @SWG\Response(
     *     response=200,
     *     description="Returns TYPO3 Release(s)",
     *     @SWG\Schema(
     *         type="array",
     *         @SWG\Items(
     *             @Model(type=\App\Entity\Release::class, groups={"data"})
     *         )
     *     )
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @SWG\Tag(name="release")
     *
     * @param string|null $version Specific TYPO3 Version to fetch
     */
    #[Route(path: '/', methods: ['GET'])]
    #[Route(path: '/{version}', methods: ['GET'], name: 'release_show')]
    public function getRelease(?string $version, Request $request): JsonResponse
    {
        if ($version !== null) {
            $this->checkVersionFormat($version);
            $releases = $this->getReleaseByVersion($version);
        } else {
            $releases = $this->getReleases()->findAll();
        }

        $json = $this->getSerializer()->serialize(
            $releases,
            'json',
            SerializationContext::create()->setGroups(['data'])
        );
        $response =  new JsonResponse($json, \Symfony\Component\HttpFoundation\Response::HTTP_OK, [], true);
        $response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        $response->setEtag(md5($json));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * Add new TYPO3 release
     * @IsGranted("ROLE_ADMIN")
     * @DocSecurity(name="Basic")
     * @SWG\Response(
     *     response=201,
     *     description="Created.",
     *     @SWG\Schema(
     *         type="object",
     *         @SWG\Property(property="Status", title="Status", enum={"success"}, type="string"),
     *         @SWG\Property(
     *             property="Location",
     *             title="Location (URI)",
     *             description="URI of newly created version",
     *             type="string",
     *             example="/api/v1/release/10.0.0"
     *         ),
     *     )
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     * @SWG\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Corresponding major version not found."
     * )
     * @SWG\Response(
     *     response=409,
     *     description="Conflict. Version already exists."
     * )
     * @SWG\Tag(name="release")
     * @SWG\Parameter(
     *     name="release",
     *     in="body",
     *     required=true,
     *     @Model(type=\App\Entity\Release::class, groups={"data", "content"})
     * )
     */
    #[Route(path: '/', methods: ['POST'])]
    public function addRelease(Request $request): JsonResponse
    {
        $content = $request->getContent();
        if ($content !== '') {
            /** @var Release $release */
            $release = $this->getSerializer()->deserialize($content, Release::class, 'json');
            $version = $release->getVersion();
            $this->checkVersionFormat($version);
            $this->checkVersionConflict($version);
            $majorVersion = $this->getMajorVersionByReleaseVersion($version);
            $release->setMajorVersion($majorVersion);
            $this->validateObject($release);
            $em = $this->getManagerRegistry()->getManager();
            $em->persist($release);
            $em->flush();
            $location = $this->generateUrl('release_show', ['version' => $version]);
            $header = [
                'Location' => $location
            ];
            return new JsonResponse(['status' => 'success', 'Location' => $location], Response::HTTP_CREATED, $header);
        }

        throw new BadRequestHttpException('Missing or invalid request body.');
    }

    /**
     * Add TYPO3 Release Notes for Version
     * @IsGranted("ROLE_ADMIN")
     * @DocSecurity(name="Basic")
     * @SWG\Response(
     *     response=204,
     *     description="Returns updated entity."
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     * @SWG\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @SWG\Tag(name="release")
     * @SWG\Tag(name="content")
     * @SWG\Parameter(
     *     name="release-notes",
     *     in="body",
     *     required=true,
     *     @Model(type=\App\Entity\Embeddables\ReleaseNotes::class, groups={"putcontent"})
     * )
     */
    #[Route(path: '/{version}/release-notes', methods: ['PUT'])]
    public function addReleaseNotesForVersion(string $version, Request $request): JsonResponse
    {
        $this->checkVersionFormat($version);
        $content = $request->getContent();
        if ($content !== '') {
            /** @var ReleaseNotes $releaseNotes */
            $releaseNotes = $this->getSerializer()->deserialize($content, ReleaseNotes::class, 'json');
            $this->validateObject($releaseNotes);
            $release = $this->getReleases()->findVersion($version);
            if (!$release instanceof Release) {
                throw new NotFoundHttpException('Release ' . $version . ' not found.');
            }

            $release->setReleaseNotes($releaseNotes);
            $em = $this->getManagerRegistry()->getManager();
            $em->persist($release);
            $em->flush();

            return new JsonResponse([], Response::HTTP_NO_CONTENT);
        }

        throw new BadRequestHttpException('Missing or malformed body.');
    }

    /**
     * Get TYPO3 Release Content
     * @Cache(expires="tomorrow", public=true)
     * @SWG\Response(
     *     response=200,
     *     description="Returns TYPO3 Release content",
     *     @Model(type=\App\Entity\Release::class, groups={"content"})
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     * @SWG\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Version not found"
     * )
     * @SWG\Tag(name="release")
     * @SWG\Tag(name="content")
     */
    #[Route(path: '/{version}/content', methods: ['GET'])]
    public function getContentForVersion(string $version, Request $request): JsonResponse
    {
        $this->checkVersionFormat($version);
        $entity = $this->getReleaseByVersion($version);
        $json = $this->getSerializer()->serialize(
            $entity,
            'json',
            SerializationContext::create()->setGroups(['content'])
        );
        $response = new JsonResponse($json, Response::HTTP_OK, [], true);
        $response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        $response->setEtag(md5($json));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * Update TYPO3 Release
     * @IsGranted("ROLE_ADMIN")
     * @DocSecurity(name="Basic")
     * @SWG\Response(
     *     response=200,
     *     description="Updated Entity",
     *     @SWG\Schema(
     *         @Model(type=\App\Entity\Release::class, groups={"data", "content"})
     *     )
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     * @SWG\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @SWG\Tag(name="release")
     * @SWG\Parameter(
     *     name="release",
     *     in="body",
     *     required=true,
     *     description="May also contain incomplete model with only those properties that shall be updated",
     *     @Model(type=\App\Entity\Release::class, groups={"data", "content"})
     * )
     */
    #[Route(path: '/{version}', methods: ['PATCH'])]
    public function updateRelease(string $version, Request $request): JsonResponse
    {
        $this->checkVersionFormat($version);
        $content = $request->getContent();
        if ($content !== '') {
            $release = $this->getReleases()->findVersion($version);
            if (!$release instanceof Release) {
                throw new NotFoundHttpException('Release ' . $version . ' not found.');
            }

            /** @var array<string, string> $data */
            $data = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
            $this->mapObjects($release, $data);
            $this->validateObject($release);
            $em = $this->getManagerRegistry()->getManager();
            $em->flush();

            $json = $this->getSerializer()->serialize(
                $release,
                'json',
                SerializationContext::create()->setGroups(['data', 'content'])
            );
            return new JsonResponse($json, Response::HTTP_OK, [], true);
        }

        throw new BadRequestHttpException('Missing or invalid request body.');
    }

    /**
     * Delete TYPO3 release
     * @IsGranted("ROLE_ADMIN")
     * @DocSecurity(name="Basic")
     * @SWG\Response(
     *     response=204,
     *     description="Successfully deleted."
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     * @SWG\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @SWG\Tag(name="release")
     * )
     * @param string $version Specific TYPO3 Version to delete
     */
    #[Route(path: '/{version}', methods: ['DELETE'])]
    public function deleteRelease(string $version): JsonResponse
    {
        $entity = $this->getReleaseByVersion($version);
        $em = $this->getManagerRegistry()->getManager();
        $em->remove($entity);
        $em->flush();
        return $this->json([], Response::HTTP_NO_CONTENT);
    }

    protected function checkVersionConflict(string $version): void
    {
        if ($this->getReleases()->findVersion($version) !== null) {
            throw new ConflictHttpException('Version already exists');
        }
    }
}
