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
use App\Utility\VersionUtility;
use Doctrine\Inflector\InflectorFactory;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AbstractController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    protected SerializerInterface $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    protected function findMajorVersion(string $version): MajorVersion
    {
        $this->checkMajorVersionFormat($version);
        /** @var MajorVersionRepository $majorVersions */
        $majorVersions = $this->getDoctrine()->getRepository(MajorVersion::class);
        $majorVersion = $majorVersions->findVersion($version);
        if (!$majorVersion instanceof MajorVersion) {
            throw new NotFoundHttpException('No such version.');
        }
        return $majorVersion;
    }

    protected function validateObject(ValidatorInterface $validator, object $object): void
    {
        $violations = $validator->validate($object);

        if ($violations->count() > 0) {
            throw new BadRequestHttpException(\implode("\n", \iterator_to_array($violations, false)));
        }
    }

    /**
     * @param array<string, string> $data
     */
    protected function mapObjects(object $baseObject, array $data): void
    {
        $inflector = InflectorFactory::create()->build();
        /** @var ClassMetadataInfo $metadata */
        $metadata = $this->getDoctrine()->getManager()->getMetadataFactory()->getMetadataFor(\get_class($baseObject));
        foreach ($metadata->getFieldNames() as $field) {
            $fieldName = $inflector->tableize($field);
            $data = $this->flat($data);

            if (array_key_exists($fieldName, $data)) {
                if (isset($metadata->fieldMappings[$field]['type'])) {
                    // @todo Switch this to match() in PHP 8.0.
                    if ($metadata->fieldMappings[$field]['type'] == 'datetime') {
                        $data[$fieldName] = new \DateTime($data[$fieldName]);
                    } elseif ($metadata->fieldMappings[$field]['type'] == 'datetime_immutable') {
                        $data[$fieldName] = new \DateTimeImmutable($data[$fieldName]);
                    }
                }
                //careful! setters are not being called! Inflection is up to you if you need it!
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
        /** @var MajorVersionRepository $majorVersions */
        $majorVersions = $this->getDoctrine()->getRepository(MajorVersion::class);
        $majorVersion = $majorVersions->findVersion($majorVersionNumber);
        if (!$majorVersion instanceof MajorVersion) {
            throw new NotFoundHttpException(sprintf('Major version data for version %d does not exist.', $majorVersionNumber));
        }
        return $majorVersion;
    }

    protected function getReleaseByVersion(string $version): Release
    {
        /** @var ReleaseRepository $releases */
        $releases = $this->getDoctrine()->getRepository(Release::class);
        $release = $releases->findVersion($version);
        if (!$release instanceof Release) {
            throw new NotFoundHttpException();
        }
        return $release;
    }

    /**
     * @param array<int, string> $array
     * @return mixed[]
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
}
