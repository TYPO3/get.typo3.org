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
use App\Form\SitepackageType;
use App\Utility\StringUtility;
use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Attributes as OA;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(path: '/api/v1/sitepackage', defaults: ['_format' => 'json'])]
class SitepackageController extends AbstractController
{
    #[Route(path: '/', methods: ['POST'])]
    #[OA\RequestBody(
        required: true,
        content: new OA\JsonContent(ref: new Model(type: SitepackageType::class, options: ['csrf_protection' => false])),
    )]
    #[OA\Response(response: 200, description: 'Successfully generated.', content: new OA\MediaType(mediaType: 'application/zip'))]
    #[OA\Response(response: 400, description: 'Request malformed.')]
    #[OA\Tag(name: 'sitepackage')]
    public function createSitepackage(Request $request): Response
    {
        $content = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        if (!is_array($content)) {
            $content = [];
        }

        $sitepackage = new Sitepackage();
        $form = $this->createForm(SitepackageType::class, $sitepackage, ['csrf_protection' => false]);
        $form->submit($content, true);

        if ($form->isValid()) {
            $sitepackage->setVendorName(StringUtility::stringToUpperCamelCase($sitepackage->getAuthor()->getCompany()));
            $sitepackage->setVendorNameAlternative(StringUtility::camelCaseToLowerCaseDashed($sitepackage->getVendorName()));
            $sitepackage->setPackageName(StringUtility::stringToUpperCamelCase($sitepackage->getTitle()));
            $sitepackage->setPackageNameAlternative(StringUtility::camelCaseToLowerCaseDashed($sitepackage->getPackageName()));
            $sitepackage->setExtensionKey(StringUtility::camelCaseToLowerCaseUnderscored($sitepackage->getPackageName()));

            $sitepackageGenerator = $this->getSitepackageGenerator();
            $sitepackageGenerator->create($sitepackage);
            $filename = $sitepackageGenerator->getFilename();
            BinaryFileResponse::trustXSendfileTypeHeader();

            return $this
                ->file($sitepackageGenerator->getZipPath(), StringUtility::toASCII($filename))
                ->deleteFileAfterSend(true);
        }

        return $this->sendErroneousResponse($form);
    }
}
