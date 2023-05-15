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

use App\Package\Sitepackage;
use App\Utility\StringUtility;
use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Annotations as OA;
//use OpenApi\Attributes as OA;
use OpenApi\Attributes\MediaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Annotation\Route;

use function is_string;

#[Route(path: '/api/v1/sitepackage', defaults: ['_format' => 'json'])]
class SitepackageController extends AbstractController
{
    use ValidationTrait;

    public function __construct(
        private \App\Service\SitepackageGenerator $sitepackageGenerator,
        private \JMS\Serializer\SerializerInterface $serializer,
        private \Symfony\Component\Validator\Validator\ValidatorInterface $validator,
    ) {
    }

    /**
     * @OA\RequestBody(
     *
     *     @Model(type=Sitepackage::class),
     *     request="sitepackage",
     *     required=true
     * )
     *
     * @OA\Response(
     *     response=200,
     *     description="Successfully generated.",
     *
     *     @OA\Schema(type="file")
     * )
     *
     * @OA\Response(
     *     response=400,
     *     description="Request malformed."
     * )
     *
     * @OA\Tag(name="sitepackage")
     */
    /*
    #[OA\RequestBody(
        //new Model(type: Sitepackage::class)
        //ref: new OA\Schema(type: Sitepackage::class),
        request: 'sitepackage',
        required: true,
        //new Model(type: Sitepackage::class)
        content: new Model(type: Sitepackage::class)
        //content: new OA\Schema(ref: new Model(type: Sitepackage::class))
    )]
    #[OA\RequestBody(new Model(type: Sitepackage::class))]
    #[OA\Response(
        response: 200,
        description: 'Successfully generated.',
        //content: new OA\Schema(type: 'file')
        content: new OA\MediaType(mediaType: 'application/zip')
    )]
    #[OA\Response(
        response: 400,
        description: 'Request malformed.'
    )]
    #[OA\Tag(name: 'sitepackage')]
    */
    #[Route(path: '/create', methods: ['POST'])]
    public function createSitepackage(Request $request): BinaryFileResponse
    {
        if (!is_string($content = $request->getContent())) {
            throw new BadRequestHttpException('Missing or invalid request body.');
        }

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
}
