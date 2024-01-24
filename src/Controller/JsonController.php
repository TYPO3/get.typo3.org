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

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/json', methods: ['GET'], name: 'json_')]
class JsonController extends AbstractController
{
    public function __construct(
        private \App\Service\LegacyDataService $legacyDataService,
    ) {}

    // Route has set a priority to avoid conflicts with `specificversion`
    #[Route(path: '', methods: ['GET'], name: 'index', priority: 1)]
    public function index(): Response
    {
        $content = $this->legacyDataService->getReleaseJson();
        $headers = [
            'Content-type'                => 'application/json',
            'Access-Control-Allow-Origin' => '*',
        ];
        return new Response($content, \Symfony\Component\HttpFoundation\Response::HTTP_OK, $headers);
    }
}
