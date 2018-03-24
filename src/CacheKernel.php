<?php
declare(strict_types=1);

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