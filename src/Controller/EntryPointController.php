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
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EntryPointController extends AbstractController
{
    /**
     * @var array<string, string> key / value pairs representing the slug and the route to redirect to
     */
    private const ENTRY_POINTS = [
        // 'slug' => 'route',
        'composer-helper' => 'composer-helper',
        'sitepackage' => 'tools_sitepackage',
        'sitepackage-builder' => 'tools_sitepackage',
    ];

    #[Route('/go/{slug}', requirements: ['slug' => '.+'])]
    public function handle(Request $request, string $slug): RedirectResponse
    {
        if (!array_key_exists($slug, self::ENTRY_POINTS)) {
            throw $this->createNotFoundException(sprintf('Entry point "%s" not found!', $slug));
        }

        return $this->redirectToRoute(self::ENTRY_POINTS[$slug], $request->query->all(), 302);
    }
}
