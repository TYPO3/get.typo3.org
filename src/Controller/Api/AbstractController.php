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
use App\Utility\VersionUtility;
use Doctrine\Common\Util\Inflector;
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
        $repo = $this->getDoctrine()->getRepository(MajorVersion::class);
        $majorVersion = $repo->findOneBy(['version' => $version]);
        if (!$majorVersion instanceof MajorVersion) {
            throw new NotFoundHttpException('No such version.');
        }
        return $majorVersion;
    }

    /**
     * @param $object
     */
    protected function validateObject(ValidatorInterface $validator, $object): void
    {
        $constraintViolationList = $validator->validate($object);

        if (\count($constraintViolationList) > 0) {
            $errorsString = (string)$constraintViolationList;
            throw new BadRequestHttpException($errorsString);
        }
    }

    protected function mapObjects($baseObject, array $data): void
    {
        $em = $this->getDoctrine()->getManager();
        $classMetadata = $em->getMetadataFactory()->getMetadataFor(\get_class($baseObject));
        foreach ($classMetadata->getFieldNames() as $field) {
            $fieldName = Inflector::tableize($field);
            if (is_array($data)) {
                $data = $this->flat($data);
            }
            if (array_key_exists($fieldName, $data)) {
                if (isset($classMetadata->fieldMappings[$field]['type'])) {
                    if ($classMetadata->fieldMappings[$field]['type'] == 'datetime') {
                        $data[$fieldName] = new \DateTime($data[$fieldName]);
                    } elseif ($classMetadata->fieldMappings[$field]['type'] == 'datetime_immutable') {
                        $data[$fieldName] = new \DateTimeImmutable($data[$fieldName]);
                    }
                }
                //careful! setters are not being called! Inflection is up to you if you need it!
                $classMetadata->setFieldValue($baseObject, $field, $data[$fieldName]);
            }
        }
    }

    protected function checkMajorVersionFormat($version): void
    {
        if (!is_numeric($version)) {
            throw new BadRequestHttpException('Version is not numeric.');
        }
    }

    protected function checkVersionFormat(?string $version): void
    {
        if (!VersionUtility::isValidSemverVersion($version)) {
            throw new BadRequestHttpException('version malformed.');
        }
    }

    protected function getMajorVersionByReleaseVersion(string $version): MajorVersion
    {
        $majorVersion = VersionUtility::extractMajorVersionNumber($version);
        $mventity = $this->getDoctrine()->getManager()->getRepository(MajorVersion::class)->findOneBy(
            ['version' => $majorVersion]
        );
        if (!$mventity instanceof MajorVersion) {
            throw new NotFoundHttpException('Major version data for version ' . $majorVersion . ' does not exist.');
        }
        return $mventity;
    }

    protected function getReleaseByVersion(string $version): Release
    {
        $releaseRepo = $this->getDoctrine()->getRepository(Release::class);
        $releases = $releaseRepo->findOneBy(['version' => $version]);
        if (!$releases instanceof Release) {
            throw new NotFoundHttpException();
        }
        return $releases;
    }

    protected function flat(array $array, string $prefix = '')
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
