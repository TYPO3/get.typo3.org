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

namespace App;

use Symfony\Bundle\FrameworkBundle\HttpCache\HttpCache;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CacheKernel extends HttpCache
{
    protected function invalidate(Request $request, $catch = false): Response
    {
        $response = parent::invalidate($request, $catch);

        if ($request->getMethod() === 'DELETE' && strpos($request->attributes->get('_route'), 'cache') !== false) {
            $content = $response->getContent();
            if (\is_string($content)) {
                $data = json_decode($content, true);
                if (isset($data['locations'])) {
                    foreach ($data['locations'] as $location) {
                        $this->getStore()->purge($location);
                    }
                }
            }
        }

        return $response;
    }
}
