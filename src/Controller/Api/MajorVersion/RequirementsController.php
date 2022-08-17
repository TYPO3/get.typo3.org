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

#[Route(
    path: ['/api/v1/major/{version}/requirement', '/v1/api/major/{version}/requirement'],
    defaults: ['_format' => 'json']
)]
class RequirementsController extends AbstractController
{
    /**
     * Get TYPO3 major version requirements.
     *
     * @OA\Response(
     *     response=200,
     *     description="Returns TYPO3 major version requirements",
     *     @Model(type=\App\Entity\Requirement::class, groups={"data"})
     * )
     * @OA\Response(
     *     response=400,
     *     description="Version is not numeric."
     * )
     * @OA\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @OA\Tag(name="major")
     * @OA\Tag(name="requirement")
     */
    #[Route(path: 's', methods: ['GET'])]
    public function getRequirementsByMajorVersion(string $version): JsonResponse
    {
        $this->checkMajorVersionFormat($version);

        $json = $this->getCache()->get('requirements-data-' . $version, function (ItemInterface $item) use ($version): string {
            $item->tag(['requirements', 'requirements-' . $version]);

            $requirements = $this->getRequirements()->findBy(
                ['version' => $version],
                ['category' => 'ASC', 'name' => 'ASC']
            );
            if ($requirements === []) {
                throw new NotFoundHttpException('Version not found.');
            }

            return $this->getSerializer()->serialize(
                $requirements,
                'json',
                SerializationContext::create()->setGroups(['data'])
            );
        });

        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    /**
     * Create new major TYPO3 version requirement.
     *
     * @IsGranted("ROLE_ADMIN")
     * @Security(name="Basic")
     * @OA\RequestBody(
     *     @Model(type=Requirement::class, groups={"patch"}),
     *     request="requirement",
     *     required=true
     * )
     * @OA\Response(
     *     response=201,
     *     description="Successfully created",
     *     @OA\JsonContent(
     *         type="object",
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
     *     description="Requirement exists."
     * )
     * @OA\Response(
     *     response=404,
     *     description="Major version not found."
     * )
     * @OA\Tag(name="major")
     * @OA\Tag(name="requirement")
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
            if ($preexistingRequirement !== null) {
                throw new ConflictHttpException('Requirement already exists.');
            }

            $this->validateObject($requirement);
            $entity->addRequirement($requirement);
            $em = $this->getManagerRegistry()->getManager();
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
     * Update requirement of major TYPO3 version.
     *
     * @IsGranted("ROLE_ADMIN")
     * @Security(name="Basic")
     * @OA\RequestBody(
     *     @Model(type=Requirement::class, groups={"patch"}),
     *     request="requirement",
     *     required=true
     * )
     * @OA\Response(
     *     response=200,
     *     description="Successfully created",
     *     @Model(type=\App\Entity\Requirement::class, groups={"content"})
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
     *     response=409,
     *     description="Version exists."
     * )
     * @OA\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @OA\Tag(name="major")
     * @OA\Tag(name="requirement")
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
     * Delete requirement of major TYPO3 version.
     *
     * @IsGranted("ROLE_ADMIN")
     * @Security(name="Basic")
     * @OA\Response(
     *     response=204,
     *     description="Successfully deleted"
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
     * @OA\Tag(name="major")
     * @OA\Tag(name="requirement")
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
