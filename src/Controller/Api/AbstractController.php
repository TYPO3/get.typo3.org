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
use App\Entity\Release;
use App\Repository\MajorVersionRepository;
use App\Repository\ReleaseRepository;
use App\Repository\RequirementRepository;
use App\Service\CacheService;
use App\Utility\VersionUtility;
use Doctrine\Inflector\InflectorFactory;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormErrorIterator;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\ConstraintViolationInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Contracts\Cache\TagAwareCacheInterface;

abstract class AbstractController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    public function __construct(
        private TagAwareCacheInterface $cache,
        private CacheService $cacheService,
        private SerializerInterface $serializer,
        private ManagerRegistry $managerRegistry,
        private MajorVersionRepository $majorVersions,
        private RequirementRepository $requirements,
        private ReleaseRepository $releases,
        private ValidatorInterface $validator
    ) {}

    protected function getCache(): TagAwareCacheInterface
    {
        return $this->cache;
    }

    protected function getCacheService(): CacheService
    {
        return $this->cacheService;
    }

    protected function getSerializer(): SerializerInterface
    {
        return $this->serializer;
    }

    protected function getManagerRegistry(): ManagerRegistry
    {
        return $this->managerRegistry;
    }

    protected function getMajorVersions(): MajorVersionRepository
    {
        return $this->majorVersions;
    }

    protected function getRequirements(): RequirementRepository
    {
        return $this->requirements;
    }

    protected function getReleases(): ReleaseRepository
    {
        return $this->releases;
    }

    protected function findMajorVersion(string $version): MajorVersion
    {
        $this->checkMajorVersionFormat($version);

        $majorVersion = $this->majorVersions->findVersion($version);
        if (!$majorVersion instanceof MajorVersion) {
            throw new NotFoundHttpException('No such version.');
        }

        return $majorVersion;
    }

    protected function validateObject(object $object): void
    {
        $violations = $this->validator->validate($object);

        if ($violations->count() > 0) {
            $messages = '';

            \iterator_apply(
                $violations,
                static function (ConstraintViolationInterface $violation) use (&$messages): bool {
                    $messages .= \sprintf("%s: %s\n", $violation->getPropertyPath(), $violation->getMessage());
                    return true;
                },
                \iterator_to_array($violations)
            );

            throw new BadRequestHttpException(trim($messages));
        }
    }

    /**
     * @param array<string, string> $data
     */
    protected function mapObjects(object $baseObject, array $data): void
    {
        $inflector = InflectorFactory::create()->build();
        /** @var ClassMetadataInfo<object> $metadata */
        $metadata = $this->managerRegistry->getManager()->getMetadataFactory()->getMetadataFor($baseObject::class);
        $data = $this->flat($data);
        foreach ($metadata->getFieldNames() as $field) {
            $fieldName = $inflector->tableize($field);

            if (array_key_exists($fieldName, $data) && \is_string($data[$fieldName])) {
                if (isset($metadata->fieldMappings[$field]['type'])) {
                    if ($metadata->fieldMappings[$field]['type'] === 'datetime') {
                        $data[$fieldName] = new \DateTime($data[$fieldName]);
                    } elseif ($metadata->fieldMappings[$field]['type'] === 'datetime_immutable') {
                        $data[$fieldName] = new \DateTimeImmutable($data[$fieldName]);
                    }
                }

                // careful! setters are not being called! Inflection is up to you if you need it!
                $metadata->setFieldValue($baseObject, $field, $data[$fieldName]);
            }
        }
    }

    protected function checkMajorVersionFormat(string $version): void
    {
        if (!is_numeric($version)) {
            throw new BadRequestHttpException('Version is not numeric.');
        }
    }

    protected function checkVersionFormat(?string $version): void
    {
        if ($version === null || !VersionUtility::isValidSemverVersion($version)) {
            throw new BadRequestHttpException('Version malformed.');
        }
    }

    protected function getMajorVersionByReleaseVersion(string $version): MajorVersion
    {
        $majorVersionNumber = VersionUtility::extractMajorVersionNumber($version);
        $majorVersion = $this->majorVersions->findVersion($majorVersionNumber);
        if (!$majorVersion instanceof MajorVersion) {
            throw new NotFoundHttpException(sprintf(
                'Major version data for version %d does not exist.',
                $majorVersionNumber
            ));
        }

        return $majorVersion;
    }

    protected function getReleaseByVersion(string $version): Release
    {
        $release = $this->releases->findVersion($version);
        if (!$release instanceof Release) {
            throw new NotFoundHttpException();
        }

        return $release;
    }

    protected function findLatestSecurityReleaseByMajorVersion(string $version): ?Release
    {
        $this->checkMajorVersionFormat($version);

        return $this->releases->findLatestSecurityReleaseByMajorVersion($version);
    }

    /**
     * @param array<string, string> $array
     *
     * @return array<string, string>
     */
    protected function flat(array $array, string $prefix = ''): array
    {
        $result = [];

        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $result = array_merge(
                    $result,
                    $this->flat($value, $prefix . $key . '.')
                );
            } else {
                $result[$prefix . $key] = $value;
            }
        }

        return $result;
    }

    /**
     * @template T
     *
     * @param FormInterface<T> $form
     */
    protected function sendErroneousResponse(FormInterface $form): Response
    {
        return new JsonResponse([
            'errors' => $this->getErrors($form),
        ], Response::HTTP_BAD_REQUEST);
    }

    /**
     * @template T
     *
     * @param FormInterface<T> $form
     *
     * @return array<int|string, mixed>
     */
    private function getErrors(FormInterface $form): array
    {
        $errors = [];
        /** @var FormErrorIterator<FormError> $formErrors */
        $formErrors = $form->getErrors();
        foreach ($formErrors as $error) {
            $errors[] = $error->getMessage();
        }
        foreach ($form->all() as $childForm) {
            if (($childForm instanceof FormInterface) && count($childErrors = $this->getErrors($childForm)) > 0) {
                $errors[$childForm->getName()] = $childErrors;
            }
        }

        return $errors;
    }
}
