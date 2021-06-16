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
    /**
     * @var \JMS\Serializer\Serializer
     */
    protected $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    protected function findMajorVersion(string $version): MajorVersion
    {
        $this->checkMajorVersionFormat($version);
        $repo = $this->getDoctrine()->getRepository(MajorVersion::class);
        $entity = $repo->findOneBy(['version' => $version]);
        if (null === $entity) {
            throw new NotFoundHttpException('No such version.');
        }
        return $entity;
    }

    /**
     * @param $object
     */
    protected function validateObject(ValidatorInterface $validator, $object): void
    {
        $errors = $validator->validate($object);

        if (\count($errors) > 0) {
            $errorsString = (string)$errors;
            throw new BadRequestHttpException($errorsString);
        }
    }

    protected function mapObjects($baseObject, array $data): void
    {
        $em = $this->getDoctrine()->getManager();
        $metadata = $em->getMetadataFactory()->getMetadataFor(\get_class($baseObject));
        foreach ($metadata->getFieldNames() as $field) {
            $fieldName = Inflector::tableize($field);
            if (is_array($data)) {
                $data = $this->flat($data);
            }
            if (array_key_exists($fieldName, $data)) {
                if (isset($metadata->fieldMappings[$field]['type'])) {
                    switch ($metadata->fieldMappings[$field]['type']) {
                        case 'datetime':
                            $data[$fieldName] = new \DateTime($data[$fieldName]);
                            break;
                        case 'datetime_immutable':
                            $data[$fieldName] = new \DateTimeImmutable($data[$fieldName]);
                            break;
                    }
                }
                //careful! setters are not being called! Inflection is up to you if you need it!
                $metadata->setFieldValue($baseObject, $field, $data[$fieldName]);
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
        if (null === $mventity) {
            throw new NotFoundHttpException('Major version data for version ' . $majorVersion . ' does not exist.');
        }
        return $mventity;
    }

    protected function getReleaseByVersion(string $version): Release
    {
        $releaseRepo = $this->getDoctrine()->getRepository(Release::class);
        $releases = $releaseRepo->findOneBy(['version' => $version]);
        if (!$releases) {
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
