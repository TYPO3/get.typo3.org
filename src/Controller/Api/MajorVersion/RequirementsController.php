<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Controller\Api\MajorVersion;

use App\Controller\Api\AbstractController;
use App\Entity\Requirement;
use JMS\Serializer\SerializationContext;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security as DocSecurity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Swagger\Annotations as SWG;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @Route("/v1/api/major/{version}/requirement", defaults={"_format"="json"})
 */
class RequirementsController extends AbstractController
{
    /**
     * Get TYPO3 major version requirements
     * @Route("s", methods={"GET"})
     * @SWG\Response(
     *     response=200,
     *     description="Returns TYPO3 major version requirements",
     *     @SWG\Schema(
     *     @Model(type=\App\Entity\Requirement::class, groups={"data"})
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
     *
     * @param string $version Specific TYPO3 Version to fetch
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getRequirementsByMajorVersion(string $version, Request $request): JsonResponse
    {
        $this->checkMajorVersionFormat($version);
        $requirementRepo = $this->getDoctrine()->getRepository(Requirement::class);
        $entities = $requirementRepo->findBy(['version' => $version], ['category' => 'ASC', 'name' => 'ASC']);
        if (null === $entities) {
            throw new NotFoundHttpException('Version not found.');
        }
        $json = $this->serializer->serialize(
            $entities,
            'json',
            SerializationContext::create()->setGroups(['data'])
        );
        $response = new JsonResponse($json, 200, [], true);
        $response->setEtag(md5($json));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * Create new major TYPO3 version requirement
     * @Route("/", methods={"POST"})
     * @IsGranted("ROLE_ADMIN")
     * @DocSecurity(name="Basic")
     * @SWG\Response(
     *     response=201,
     *     description="Successfully created",
     *     @SWG\Schema(
     *          type="object",
     *          @SWG\Property(property="Status", title="Status", enum={"success"}, type="string"),
     *          @SWG\Property(property="Location", title="Location (URI)", description="URI of newly created version", type="string", example="/v1/api/major/21"),
     *      )
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
     *
     * @param string $version
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Symfony\Component\Validator\Validator\ValidatorInterface $validator
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function addRequirement(string $version, Request $request, ValidatorInterface $validator): JsonResponse
    {
        $content = $request->getContent();
        if (!empty($content)) {
            $requirementRepo = $this->getDoctrine()->getRepository(Requirement::class);
            $requirement = $this->serializer->deserialize($content, Requirement::class, 'json');
            $entity = $this->findMajorVersion($version);
            $requirement->setVersion($entity);
            $preexistingRequirement = $requirementRepo->findOneBy(
                [
                    'version' => $version,
                    'name' => $requirement->getName(),
                    'category' => $requirement->getCategory(),
                ]
            );
            if (null !== $preexistingRequirement) {
                throw new ConflictHttpException('Requirement already exists.');
            }
            $this->validateObject($validator, $requirement);
            $entity->addRequirement($requirement);
            $em = $this->getDoctrine()->getManager();
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
     * @Route("/", methods={"PATCH"})
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
     *
     * @param null|string $version Specific TYPO3 Version to fetch
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @param \Symfony\Component\Validator\Validator\ValidatorInterface $validator
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function updateRequirement(string $version, Request $request, ValidatorInterface $validator): JsonResponse
    {
        $content = $request->getContent();
        if (!empty($content)) {
            $requirementRepo = $this->getDoctrine()->getRepository(Requirement::class);
            $requirement = $this->serializer->deserialize($content, Requirement::class, 'json');
            $entity = $requirementRepo->findOneBy(
                [
                    'version' => $version,
                    'name' => $requirement->getName(),
                    'category' => $requirement->getCategory(),
                ]
            );
            if (null === $entity) {
                throw new NotFoundHttpException('Requirement does not exists');
            }
            $requirement->setVersion($entity->getVersion());
            $this->validateObject($validator, $entity);
            $em = $this->getDoctrine()->getManager();
            $em->remove($entity);
            $em->flush();
            $em->persist($requirement);
            $em->flush();
            $json = $this->serializer->serialize(
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
     * @Route("/{category}/{name}", methods={"DELETE"})
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
     *
     * @param null|string $version Specific TYPO3 Version to fetch
     * @param string $category
     * @param string $name
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteRequirement(
        string $version,
        string $category,
        string $name
    ): JsonResponse {
        $requirementRepo = $this->getDoctrine()->getRepository(Requirement::class);
        $entity = $requirementRepo->findOneBy(
            [
                'version' => $this->findMajorVersion($version),
                'name' => $name,
                'category' => $category,
            ]
        );
        if (null === $entity) {
            throw new NotFoundHttpException('Requirement does not exists');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($entity);
        $em->flush();
        return $this->json([], Response::HTTP_NO_CONTENT);
    }
}
