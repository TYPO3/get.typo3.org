<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
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
                $data = json_decode($response->getContent(), true);
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
