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
use App\Repository\ReleaseRepository;
use JMS\Serializer\SerializationContext;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security as DocSecurity;
use OpenApi\Annotations as OA;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\EventListener\AbstractSessionListener;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route(path: ['/api/v1/release', '/v1/api/release'], defaults: ['_format' => 'json'])]
class ReleaseController extends AbstractController
{
    /**
     * Get information about all TYPO3 releases or a specific release
     * @Route("/", methods={"GET"})
     * @Route("/{version}", methods={"GET"}, name="release_show")
     * @Cache(expires="tomorrow", public=true)
     * @OA\Response(
     *     response=200,
     *     description="Returns TYPO3 Release(s)",
     *     @OA\Schema(
     *         type="array",
     *         @OA\Items(ref=@Model(type=Release::class, groups={"data"}))
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
    public function getRelease(?string $version, Request $request): JsonResponse
    {
        if ($version !== null) {
            $this->checkVersionFormat($version);
            $releases = $this->getReleaseByVersion($version);
        } else {
            $releases = $this->managerRegistry->getRepository(Release::class)->findAll();
        }

        $json = $this->serializer->serialize(
            $releases,
            'json',
            SerializationContext::create()->setGroups(['data'])
        );
        $response =  new JsonResponse($json, 200, [], true);
        $response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        $response->setEtag(md5($json));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * Add new TYPO3 release
     * @Route("/", methods={"POST"})
     * @IsGranted("ROLE_ADMIN")
     * @DocSecurity(name="Basic")
     * @OA\Response(
     *     response=201,
     *     description="Created.",
     *     @OA\Schema(
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
     * @OA\Parameter(
     *     name="release",
     *     in="query",
     *     required=true,
     *     @Model(type=Release::class, groups={"data", "content"})
     * )
     */
    public function addRelease(Request $request, ValidatorInterface $validator): JsonResponse
    {
        $content = $request->getContent();
        if ($content !== '') {
            /** @var Release $release */
            $release = $this->serializer->deserialize($content, Release::class, 'json');
            $version = $release->getVersion();
            $this->checkVersionFormat($version);
            $this->checkVersionConflict($version);
            $majorVersion = $this->getMajorVersionByReleaseVersion($version);
            $release->setMajorVersion($majorVersion);
            $this->validateObject($validator, $release);
            $em = $this->managerRegistry->getManager();
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
     * @Route("/{version}/release-notes", methods={"PUT"})
     * @IsGranted("ROLE_ADMIN")
     * @DocSecurity(name="Basic")
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
     * @OA\Parameter(
     *     name="release-notes",
     *     in="query",
     *     required=true,
     *     @Model(type=ReleaseNotes::class, groups={"putcontent"})
     * )
     */
    public function addReleaseNotesForVersion(string $version, Request $request, ValidatorInterface $validator): JsonResponse
    {
        $this->checkVersionFormat($version);
        $content = $request->getContent();
        if ($content !== '') {
            /** @var ReleaseNotes $releaseNotes */
            $releaseNotes = $this->serializer->deserialize($content, ReleaseNotes::class, 'json');
            $this->validateObject($validator, $releaseNotes);
            /** @var ReleaseRepository $releases */
            $releases = $this->managerRegistry->getRepository(Release::class);
            $release = $releases->findVersion($version);
            if (!$release instanceof Release) {
                throw new NotFoundHttpException('Release ' . $version . ' not found.');
            }

            $release->setReleaseNotes($releaseNotes);
            $em = $this->managerRegistry->getManager();
            $em->persist($release);
            $em->flush();

            return new JsonResponse([], Response::HTTP_NO_CONTENT);
        }

        throw new BadRequestHttpException('Missing or malformed body.');
    }

    /**
     * Get TYPO3 Release Content
     * @Route("/{version}/content", methods={"GET"})
     * @Cache(expires="tomorrow", public=true)
     * @OA\Response(
     *     response=200,
     *     description="Returns TYPO3 Release content",
     *     @Model(type=Release::class, groups={"content"})
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
    public function getContentForVersion(string $version, Request $request): JsonResponse
    {
        $this->checkVersionFormat($version);
        $entity = $this->getReleaseByVersion($version);
        $json = $this->serializer->serialize(
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
     * @Route("/{version}", methods={"PATCH"})
     * @IsGranted("ROLE_ADMIN")
     * @DocSecurity(name="Basic")
     * @OA\Response(
     *     response=200,
     *     description="Updated Entity",
     *     @OA\Schema(ref=@Model(type=Release::class, groups={"data", "content"}))
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
     * @OA\Parameter(
     *     name="release",
     *     in="query",
     *     required=true,
     *     description="May also contain incomplete model with only those properties that shall be updated",
     *     @Model(type=Release::class, groups={"data", "content"})
     * )
     */
    public function updateRelease(string $version, Request $request, ValidatorInterface $validator): JsonResponse
    {
        $this->checkVersionFormat($version);
        $content = $request->getContent();
        if ($content !== '') {
            /** @var ReleaseRepository $releases */
            $releases = $this->managerRegistry->getRepository(Release::class);
            $release = $releases->findVersion($version);
            if (!$release instanceof Release) {
                throw new NotFoundHttpException('Release ' . $version . ' not found.');
            }

            /** @var array<string, string> $data */
            $data = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
            $this->mapObjects($release, $data);
            $this->validateObject($validator, $release);
            $em = $this->managerRegistry->getManager();
            $em->flush();

            $json = $this->serializer->serialize(
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
     * @Route("/{version}", methods={"DELETE"})
     * @DocSecurity(name="Basic")
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
    public function deleteRelease(string $version): JsonResponse
    {
        $entity = $this->getReleaseByVersion($version);
        $em = $this->managerRegistry->getManager();
        $em->remove($entity);
        $em->flush();
        return $this->json([], Response::HTTP_NO_CONTENT);
    }

    protected function checkVersionConflict(string $version): void
    {
        /** @var ReleaseRepository $releases */
        $releases = $this->managerRegistry->getRepository(Release::class);
        if ($releases->findVersion($version) !== null) {
            throw new ConflictHttpException('Version already exists');
        }
    }
}
