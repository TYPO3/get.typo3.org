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
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @Route("/v1/api/major", defaults={"_format": "json"})
 */
class MajorVersionController extends AbstractController
{

    /**
     * Get information about a major TYPO3 version
     * @Route("/", methods={"GET"})
     * @Cache(expires="tomorrow", public=true)
     * @SWG\Response(
     *     response=200,
     *     description="Returns major TYPO3 version information",
     *     @SWG\Schema(
     *         type="array",
     *         @SWG\Items(
     *             @Model(type=\App\Entity\MajorVersion::class, groups={"content"})
     *         )
     *     )
     * )
     * @SWG\Tag(name="major")
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getMajorReleases(Request $request): JsonResponse
    {
        /** @var MajorVersionRepository $majorVersions */
        $majorVersions = $this->getDoctrine()->getRepository(MajorVersion::class);
        $majors = $majorVersions->findAllDescending();
        $json = $this->serializer->serialize(
            $majors,
            'json',
            SerializationContext::create()->setGroups(['content'])
        );
        $response = new JsonResponse($json, 200, [], true);
        $response->headers->set(AbstractSessionListener::NO_AUTO_CACHE_CONTROL_HEADER, 'true');
        $response->setEtag(md5($json));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * Get hard facts of a major TYPO3 Release
     * @Route("/{version}", methods={"GET"}, name="majorVersion_show")
     * @Cache(expires="tomorrow", public=true)
     * @SWG\Response(
     *     response=200,
     *     description="Returns major TYPO3 version information",
     *     @SWG\Schema(
     *         @Model(type=\App\Entity\MajorVersion::class, groups={"data"})
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
     */
    public function getMajorRelease(string $version, Request $request): JsonResponse
    {
        $this->checkMajorVersionFormat($version);
        /** @var MajorVersionRepository $majorVersions */
        $majorVersions = $this->getDoctrine()->getRepository(MajorVersion::class);
        $majorVersion = $majorVersions->findVersion($version);
        if (!$majorVersion instanceof MajorVersion) {
            throw new NotFoundHttpException('Version not found.');
        }
        $json = $this->serializer->serialize(
            $majorVersion,
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
     * Create new major TYPO3 version
     * @Route("/", methods={"POST"})
     * @IsGranted("ROLE_ADMIN")
     * @DocSecurity(name="Basic")
     * @SWG\Response(
     *     response=201,
     *     description="Successfully created",
     *     @SWG\Schema(
     *         type="object",
     *         @SWG\Property(property="Status", title="Status", enum={"success"}, type="string"),
     *         @SWG\Property(property="Location", title="Location (URI)", description="URI of newly created version", type="string", example="/v1/api/major/21"),
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
     *     response=409,
     *     description="Version exists."
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @SWG\Tag(name="major")
     * @SWG\Parameter(
     *     name="major",
     *     in="body",
     *     required=true,
     *     @Model(type=\App\Entity\MajorVersion::class, groups={"patch"})
     * )
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function createMajorRelease(Request $request, ValidatorInterface $validator): JsonResponse
    {
        $content = $request->getContent();
        if (!empty($content)) {
            $majorVersion = $this->serializer->deserialize($content, MajorVersion::class, 'json');
            $version = $majorVersion->getVersion();
            /** @var MajorVersionRepository $majorVersions */
            $majorVersions = $this->getDoctrine()->getRepository(MajorVersion::class);
            $preexisting = $majorVersions->findVersion((string)$version);
            if ($preexisting instanceof MajorVersion) {
                throw new ConflictHttpException('Version already exists');
            }
            $this->checkMajorVersionFormat($version);
            $this->validateObject($validator, $majorVersion);
            $em = $this->getDoctrine()->getManager();
            $em->persist($majorVersion);
            $em->flush();
            $location = $this->generateUrl('majorVersion_show', ['version' => $version]);
            $header = [
                'Location' => $location
            ];
            return new JsonResponse(['status' => 'success', 'Location' => $location], Response::HTTP_CREATED, $header);
        }
        throw new BadRequestHttpException('Missing or invalid request body.');
    }

    /**
     * Update properties of major TYPO3 version
     * @Route("/{version}", methods={"PATCH"})
     * @IsGranted("ROLE_ADMIN")
     * @DocSecurity(name="Basic")
     * @SWG\Response(
     *     response=200,
     *     description="Updated Entity",
     *     @SWG\Schema(
     *         @Model(type=\App\Entity\MajorVersion::class, groups={"content"})
     *
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
     * @SWG\Tag(name="major")
     * @SWG\Parameter(
     *     name="major",
     *     in="body",
     *     required=true,
     *     description="May also contain incomplete model with only those properties that shall be updated",
     *     @Model(type=\App\Entity\MajorVersion::class, groups={"patch"})
     * )
     *
     * @param string $version Specific TYPO3 Version to fetch
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function updateMajorRelease(string $version, Request $request, ValidatorInterface $validator): JsonResponse
    {
        $content = $request->getContent();
        if (!empty($content)) {
            $entity = $this->findMajorVersion($version);
            $data = json_decode($content, true);
            $this->mapObjects($entity, $data);
            $this->validateObject($validator, $entity);
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $json = $this->serializer->serialize(
                $entity,
                'json',
                SerializationContext::create()->setGroups(['content'])
            );
            return new JsonResponse($json, Response::HTTP_OK, [], true);
        }
        throw new BadRequestHttpException('Missing or invalid request body.');
    }

    /**
     * Delete major TYPO3 version
     * @Route("/{version}", methods={"DELETE"})
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
     * @SWG\Tag(name="major")
     * )
     *
     * @param string $version Specific TYPO3 Version to delete
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteMajorRelease(string $version): JsonResponse
    {
        $entity = $this->findMajorVersion($version);
        $em = $this->getDoctrine()->getManager();
        $em->remove($entity);
        $em->flush();

        return $this->json([], Response::HTTP_NO_CONTENT);
    }
}
