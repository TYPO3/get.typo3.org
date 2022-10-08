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
use JMS\Serializer\SerializationContext;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Annotations as OA;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Contracts\Cache\ItemInterface;

#[Route(path: ['/api/v1/major', '/v1/api/major'], defaults: ['_format' => 'json'])]
class MajorVersionController extends AbstractController
{
    /**
     * Get information about a major TYPO3 version.
     *
     * @OA\Response(
     *     response=200,
     *     description="Returns major TYPO3 version information",
     *
     *     @OA\JsonContent(
     *         type="array",
     *
     *         @OA\Items(ref=@Model(type=\App\Entity\MajorVersion::class, groups={"content"}))
     *     )
     * )
     *
     * @OA\Tag(name="major")
     */
    #[Route(path: '/', methods: ['GET'])]
    public function getMajorReleases(): JsonResponse
    {
        $json = $this->getCache()->get('major-versions-descending-content', function (ItemInterface $item): string {
            $item->tag(['major-versions', 'major-version']);

            $majors = $this->getMajorVersions()->findAllDescending();

            return $this->getSerializer()->serialize(
                $majors,
                'json',
                SerializationContext::create()->setGroups(['content'])
            );
        });

        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    /**
     * Get hard facts of a major TYPO3 Release.
     *
     * @OA\Response(
     *     response=200,
     *     description="Returns major TYPO3 version information",
     *
     *     @Model(type=\App\Entity\MajorVersion::class, groups={"data"})
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
     */
    #[Route(path: '/{version}', methods: ['GET'], name: 'majorVersion_show')]
    public function getMajorRelease(string $version): JsonResponse
    {
        $this->checkMajorVersionFormat($version);

        $json = $this->getCache()->get('major-version-content-' . $version, function (ItemInterface $item) use ($version): string {
            $item->tag(['major-versions', 'major-version-' . $version]);

            $majorVersion = $this->getMajorVersions()->findVersion($version);
            if (!$majorVersion instanceof MajorVersion) {
                throw new NotFoundHttpException('Version not found.');
            }

            return $this->getSerializer()->serialize(
                $majorVersion,
                'json',
                SerializationContext::create()->setGroups(['content'])
            );
        });

        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    /**
     * Create new major TYPO3 version.
     *
     * @Security(name="Basic")
     *
     * @OA\RequestBody(
     *
     *     @Model(type=MajorVersion::class, groups={"patch"}),
     *     request="major",
     *     required=true
     * )
     *
     * @OA\Response(
     *     response=201,
     *     description="Successfully created",
     *
     *     @OA\JsonContent(
     *         type="object",
     *
     *         @OA\Property(property="Status", title="Status", enum={"success"}, type="string"),
     *         @OA\Property(
     *             property="Location",
     *             title="Location (URI)",
     *             description="URI of newly created version",
     *             type="string",
     *             example="/api/v1/major/21"
     *         ),
     *     )
     * )
     *
     * @OA\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     * @OA\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @OA\Response(
     *     response=409,
     *     description="Version exists."
     * )
     * @OA\Response(
     *     response=404,
     *     description="Version not found."
     * )
     *
     * @OA\Tag(name="major")
     */
    #[Route(path: '/', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function createMajorRelease(Request $request): JsonResponse
    {
        $content = $request->getContent();
        if ($content !== '') {
            /** @var MajorVersion $majorVersion */
            $majorVersion = $this->getSerializer()->deserialize($content, MajorVersion::class, 'json');
            $version = $majorVersion->getVersion();
            $preexisting = $this->getMajorVersions()->findVersion((string)$version);
            if ($preexisting instanceof MajorVersion) {
                throw new ConflictHttpException('Version already exists');
            }

            $this->checkMajorVersionFormat((string)$version);
            $this->validateObject($majorVersion);
            $em = $this->getManagerRegistry()->getManager();
            $em->persist($majorVersion);
            $em->flush();
            $location = $this->generateUrl('majorVersion_show', ['version' => $version]);
            $header = [
                'Location' => $location,
            ];
            return new JsonResponse(['status' => 'success', 'Location' => $location], Response::HTTP_CREATED, $header);
        }

        throw new BadRequestHttpException('Missing or invalid request body.');
    }

    /**
     * Update properties of major TYPO3 version.
     *
     * @Security(name="Basic")
     *
     * @OA\RequestBody(
     *
     *     @Model(type=MajorVersion::class, groups={"patch"}),
     *     request="major",
     *     description="May also contain incomplete model with only those properties that shall be updated",
     *     required=true
     * )
     *
     * @OA\Response(
     *     response=200,
     *     description="Updated Entity",
     *
     *     @Model(type=\App\Entity\MajorVersion::class, groups={"content"})
     * )
     *
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
     *
     * @OA\Tag(name="major")
     */
    #[Route(path: '/{version}', methods: ['PATCH'])]
    #[IsGranted('ROLE_ADMIN')]
    public function updateMajorRelease(string $version, Request $request): JsonResponse
    {
        $content = $request->getContent();
        if ($content !== '') {
            $entity = $this->findMajorVersion($version);
            /** @var array<string, string> $data */
            $data = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
            $this->mapObjects($entity, $data);
            $this->validateObject($entity);
            $em = $this->getManagerRegistry()->getManager();
            $em->flush();

            $json = $this->getSerializer()->serialize(
                $entity,
                'json',
                SerializationContext::create()->setGroups(['content'])
            );
            return new JsonResponse($json, Response::HTTP_OK, [], true);
        }

        throw new BadRequestHttpException('Missing or invalid request body.');
    }

    /**
     * Delete major TYPO3 version.
     *
     * @Security(name="Basic")
     *
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
     *
     * @OA\Tag(name="major")
     * )
     */
    #[Route(path: '/{version}', methods: ['DELETE'])]
    #[IsGranted('ROLE_ADMIN')]
    public function deleteMajorRelease(string $version): JsonResponse
    {
        $entity = $this->findMajorVersion($version);
        $em = $this->getManagerRegistry()->getManager();
        $em->remove($entity);
        $em->flush();
        return $this->json([], Response::HTTP_NO_CONTENT);
    }
}
