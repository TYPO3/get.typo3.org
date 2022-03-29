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
use App\Entity\Requirement;
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

#[Route(path: ['/api/v1/major/{version}/requirement', '/v1/api/major/{version}/requirement'], defaults: ['_format' => 'json'])]
class RequirementsController extends AbstractController
{
    /**
     * Get TYPO3 major version requirements
     * @Cache(expires="tomorrow", public=true)
     * @SWG\Response(
     *     response=200,
     *     description="Returns TYPO3 major version requirements",
     *     @SWG\Schema(
     *         @Model(type=\App\Entity\Requirement::class, groups={"data"})
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
     * @SWG\Tag(name="requirement")
     */
    #[Route(path: 's', methods: ['GET'])]
    public function getRequirementsByMajorVersion(string $version, Request $request): JsonResponse
    {
        $this->checkMajorVersionFormat($version);
        $requirements = $this->getRequirements()->findBy(['version' => $version], ['category' => 'ASC', 'name' => 'ASC']);
        if ($requirements === []) {
            throw new NotFoundHttpException('Version not found.');
        }

        $json = $this->getSerializer()->serialize(
            $requirements,
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
     * Create new major TYPO3 version requirement
     * @IsGranted("ROLE_ADMIN")
     * @DocSecurity(name="Basic")
     * @SWG\Response(
     *     response=201,
     *     description="Successfully created",
     *     @SWG\Schema(
     *         type="object",
     *         @SWG\Property(property="Status", title="Status", enum={"success"}, type="string"),
     *         @SWG\Property(property="Location", title="Location (URI)", description="URI of newly created version", type="string", example="/api/v1/major/21"),
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
     *     description="Requirement exists."
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Major version not found."
     * )
     * @SWG\Tag(name="major")
     * @SWG\Tag(name="requirement")
     * @SWG\Parameter(
     *     name="requirement",
     *     in="body",
     *     required=true,
     *     @Model(type=\App\Entity\Requirement::class, groups={"patch"})
     * )
     */
    #[Route(path: '/', methods: ['POST'])]
    public function addRequirement(string $version, Request $request): JsonResponse
    {
        $content = $request->getContent();
        if ($content !== '') {
            /** @var Requirement $requirement */
            $requirement = $this->getSerializer()->deserialize($content, Requirement::class, 'json');
            $entity = $this->findMajorVersion($version);
            $requirement->setVersion($entity);
            $preexistingRequirement = $this->getRequirements()->findOneBy(
                [
                    'version' => $version,
                    'name' => $requirement->getName(),
                    'category' => $requirement->getCategory(),
                ]
            );
            if (null !== $preexistingRequirement) {
                throw new ConflictHttpException('Requirement already exists.');
            }

            $this->validateObject($requirement);
            $entity->addRequirement($requirement);
            $em = $this->getManagerRegistry()->getManager();
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
     * Update requirement of major TYPO3 version
     * @IsGranted("ROLE_ADMIN")
     * @DocSecurity(name="Basic")
     * @SWG\Response(
     *     response=200,
     *     description="Successfully created",
     *     @Model(type=\App\Entity\Requirement::class, groups={"content"})
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
     * @SWG\Tag(name="requirement")
     * @SWG\Parameter(
     *     name="requirement",
     *     in="body",
     *     required=true,
     *     @Model(type=\App\Entity\Requirement::class, groups={"patch"})
     * )
     */
    #[Route(path: '/', methods: ['PATCH'])]
    public function updateRequirement(string $version, Request $request): JsonResponse
    {
        $content = $request->getContent();
        if ($content !== '') {
            /** @var Requirement $requirement */
            $requirement = $this->getSerializer()->deserialize($content, Requirement::class, 'json');
            $entity = $this->getRequirements()->findOneBy(
                [
                    'version' => $version,
                    'name' => $requirement->getName(),
                    'category' => $requirement->getCategory(),
                ]
            );
            if (!$entity instanceof Requirement) {
                throw new NotFoundHttpException('Requirement does not exists');
            }

            $requirement->setVersion($entity->getVersion());
            $this->validateObject($entity);
            $em = $this->getManagerRegistry()->getManager();
            $em->remove($entity);
            $em->flush();
            $em->persist($requirement);
            $em->flush();
            $json = $this->getSerializer()->serialize(
                $requirement,
                'json',
                SerializationContext::create()->setGroups(['content'])
            );
            return new JsonResponse($json, Response::HTTP_OK, [], true);
        }

        throw new BadRequestHttpException('Missing or invalid request body.');
    }

    /**
     * Delete requirement of major TYPO3 version
     * @IsGranted("ROLE_ADMIN")
     * @DocSecurity(name="Basic")
     * @SWG\Response(
     *     response=204,
     *     description="Successfully deleted"
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
     * @SWG\Tag(name="requirement")
     */
    #[Route(path: '/{category}/{name}', methods: ['DELETE'])]
    public function deleteRequirement(string $version, string $category, string $name): JsonResponse
    {
        $requirement = $this->getRequirements()->findOneBy(
            [
                'version' => $this->findMajorVersion($version),
                'name' => $name,
                'category' => $category,
            ]
        );
        if (!$requirement instanceof Requirement) {
            throw new NotFoundHttpException('Requirement does not exists');
        }

        $em = $this->getManagerRegistry()->getManager();
        $em->remove($requirement);
        $em->flush();
        return $this->json([], Response::HTTP_NO_CONTENT);
    }
}
