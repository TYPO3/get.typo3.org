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
use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Annotations as OA;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Cache\ItemInterface;

#[Route(path: ['/api/v1/release', '/v1/api/release'], defaults: ['_format' => 'json'])]
class ReleaseController extends AbstractController
{
    /**
     * Get information about all TYPO3 releases or a specific release.
     *
     * @OA\Response(
     *     response=200,
     *     description="Returns TYPO3 Release(s)",
     *     @OA\JsonContent(
     *         type="array",
     *         @OA\Items(ref=@Model(type=\App\Entity\Release::class, groups={"data"}))
     *     )
     * )
     * @OA\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     * @OA\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @OA\Tag(name="release")
     *
     * @param string|null $version Specific TYPO3 Version to fetch
     */
    #[Route(path: '/', methods: ['GET'])]
    #[Route(path: '/{version}', methods: ['GET'], name: 'release_show')]
    public function getRelease(?string $version): JsonResponse
    {
        if ($version !== null) {
            $this->checkVersionFormat($version);
            $versionSuffix = '-' . $version;
        } else {
            $versionSuffix = 's';
        }

        $json = $this->getCache()->get('release' . $versionSuffix, function (ItemInterface $item) use ($version): string {
            $versionSuffix = $version !== null ? '-' . $version : '';

            $item->tag(['releases', 'release' . $versionSuffix]);
            $releases = $version !== null ? $this->getReleaseByVersion($version) : $this->getReleases()->findAll();

            return $this->getSerializer()->serialize(
                $releases,
                'json',
                SerializationContext::create()->setGroups(['data'])
            );
        });

        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    /**
     * Add new TYPO3 release.
     *
     * @IsGranted("ROLE_ADMIN")
     * @Security(name="Basic")
     * @OA\RequestBody(
     *     @Model(type=Release::class, groups={"data", "content"}),
     *     request="release",
     *     required=true
     * )
     * @OA\Response(
     *     response=201,
     *     description="Created.",
     *     @OA\JsonContent(
     *         type="object",
     *         @OA\Property(property="Status", title="Status", enum={"success"}, type="string"),
     *         @OA\Property(
     *             property="Location",
     *             title="Location (URI)",
     *             description="URI of newly created version",
     *             type="string",
     *             example="/api/v1/release/10.0.0"
     *         ),
     *     )
     * )
     * @OA\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     * @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @OA\Response(
     *     response=404,
     *     description="Corresponding major version not found."
     * )
     * @OA\Response(
     *     response=409,
     *     description="Conflict. Version already exists."
     * )
     * @OA\Tag(name="release")
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
                'Location' => $location,
            ];
            return new JsonResponse(['status' => 'success', 'Location' => $location], Response::HTTP_CREATED, $header);
        }

        throw new BadRequestHttpException('Missing or invalid request body.');
    }

    /**
     * Add TYPO3 Release Notes for Version.
     *
     * @IsGranted("ROLE_ADMIN")
     * @Security(name="Basic")
     * @OA\RequestBody(
     *     @Model(type=ReleaseNotes::class, groups={"putcontent"}),
     *     request="release-notes",
     *     required=true
     * )
     * @OA\Response(
     *     response=204,
     *     description="Returns updated entity."
     * )
     * @OA\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     * @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @OA\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @OA\Tag(name="release")
     * @OA\Tag(name="content")
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
     * Get TYPO3 Release Content.
     *
     * @OA\Response(
     *     response=200,
     *     description="Returns TYPO3 Release content",
     *     @Model(type=\App\Entity\Release::class, groups={"content"})
     * )
     * @OA\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     * @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @OA\Response(
     *     response=404,
     *     description="Version not found"
     * )
     * @OA\Tag(name="release")
     * @OA\Tag(name="content")
     */
    #[Route(path: '/{version}/content', methods: ['GET'])]
    public function getContentForVersion(string $version): JsonResponse
    {
        $this->checkVersionFormat($version);

        $json = $this->getCache()->get('release-' . $version, function (ItemInterface $item) use ($version): string {
            $item->tag(['releases', 'release-' . $version]);

            $release = $this->getReleaseByVersion($version);

            return $this->getSerializer()->serialize(
                $release,
                'json',
                SerializationContext::create()->setGroups(['content'])
            );
        });

        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    /**
     * Update TYPO3 Release.
     *
     * @IsGranted("ROLE_ADMIN")
     * @Security(name="Basic")
     * @OA\RequestBody(
     *     @Model(type=Release::class, groups={"data", "content"}),
     *     request="release",
     *     description="May also contain incomplete model with only those properties that shall be updated",
     *     required=true
     * )
     * @OA\Response(
     *     response=200,
     *     description="Updated Entity",
     *     @Model(type=\App\Entity\Release::class, groups={"data", "content"})
     * )
     * @OA\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     * @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @OA\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @OA\Tag(name="release")
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
     * Delete TYPO3 release.
     *
     * @IsGranted("ROLE_ADMIN")
     * @Security(name="Basic")
     * @OA\Response(
     *     response=204,
     *     description="Successfully deleted."
     * )
     * @OA\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     * @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @OA\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @OA\Tag(name="release")
     * )
     *
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
