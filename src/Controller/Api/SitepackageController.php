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

use App\Entity\Sitepackage;
use App\Service\SitepackageGenerator;
use App\Utility\StringUtility;
use JMS\Serializer\SerializerInterface;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\Validator\Validation;

/**
 * @Route("/api/v1/sitepackage", defaults={"_format": "json"})
 * @Route("/v1/api/sitepackage", defaults={"_format": "json"})
 */
class SitepackageController extends AbstractController
{
    /**
     * @var \JMS\Serializer\SerializerInterface
     */
    protected $serializer;

    /**
     * @var SitepackageGenerator
     */
    protected $sitepackageGenerator;

    public function __construct(
        SerializerInterface $serializer,
        SitepackageGenerator $sitepackageGenerator
    ) {
        $this->serializer = $serializer;
        $this->sitepackageGenerator = $sitepackageGenerator;
    }

    /**
     * @Route("/", methods={"POST"})
     * @SWG\Parameter(
     *     name="sitepackage",
     *     in="body",
     *     @Model(type=Sitepackage::class)
     * )
     * @SWG\Response(
     *     response=200,
     *     description="Successfully generated.",
     *     @SWG\Schema(type="file")
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     * @SWG\Tag(name="sitepackage")
     */
    public function createSitepackage(Request $request): Response
    {
        $content = $request->getContent();
        /** @var Sitepackage $sitepackage */
        $sitepackage = $this->serializer->deserialize($content, Sitepackage::class, 'json');
        $this->validateObject($sitepackage);
        $this->sitepackageGenerator->create($sitepackage);
        $filename = $this->sitepackageGenerator->getFilename();
        BinaryFileResponse::trustXSendfileTypeHeader();

        return $this
            ->file($this->sitepackageGenerator->getZipPath(), StringUtility::toASCII($filename))
            ->deleteFileAfterSend(true);
    }

    /**
     * @param Sitepackage $object
     */
    protected function validateObject(Sitepackage $object): void
    {
        $validator = Validation::createValidatorBuilder()
            ->enableAnnotationMapping()
            ->getValidator()
        ;
        $violations = $validator->validate($object);

        if ($violations->count() > 0) {
            $messages = '';
            \iterator_apply($violations, function (\Iterator $iterator) use ($messages) {
                $messages .= $iterator->current()->getMessage() . "\n";
                return true;
            });
            throw new BadRequestHttpException(trim($messages));
        }
    }
}
