<?php
declare(strict_types=1);

namespace App\Controller\Api;

use App\CacheKernel;
use App\Entity\MajorVersion;
use App\Entity\Release;
use App\Entity\Requirement;
use App\Kernel;
use Doctrine\Common\Util\Inflector;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerInterface;
use Nelmio\ApiDocBundle\Annotation\Model;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\HttpCache\HttpCache;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Routing\Annotation\Route;
use Swagger\Annotations as SWG;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class AbstractController extends Controller
{
    /**
     * @var \JMS\Serializer\Serializer
     */
    protected $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param string $version
     * @return \App\Entity\MajorVersion
     */
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
     * @param \Symfony\Component\Validator\Validator\ValidatorInterface $validator
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
            if (array_key_exists($fieldName, $data)) {
                if (isset($metadata->fieldMappings[$fieldName]['type']) &&
                    $metadata->fieldMappings[$fieldName]['type'] === 'datetime'
                ) {
                    $data[$fieldName] = new \DateTime($data[$fieldName]);
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

    /**
     * @param null|string $version
     */
    protected function checkVersionFormat(?string $version): void
    {
        if (!$this->isValidSemverVersion($version)) {
            throw new BadRequestHttpException('version malformed.');
        }
    }

    protected function getMajorVersionByReleaseVersion(string $version): MajorVersion
    {
        $majorVersion = substr($version, 0, strpos($version, '.'));
        $mventity = $this->getDoctrine()->getManager()->getRepository(MajorVersion::class)->findOneBy(
            ['version' => $majorVersion]
        );
        if (null === $mventity) {
            throw new NotFoundHttpException('Major version data for version ' . $majorVersion . ' does not exist.');
        }
        return $mventity;
    }

    /**
     * @param string $version
     * @return Release
     */
    protected function getReleaseByVersion(string $version): Release
    {
        $releaseRepo = $this->getDoctrine()->getRepository(Release::class);
        $releases = $releaseRepo->findOneBy(['version' => $version]);
        if (!$releases) {
            throw new NotFoundHttpException();
        }
        return $releases;
    }

    protected function isValidSemverVersion(string $version): bool
    {
        $success = preg_match(
            "/^(\d+\.\d+\.\d+)(?:-?([0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*))?(?:\+([0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*))?$/",
            $version,
            $matches
        );
        return ((int)$success === 1);
    }

}