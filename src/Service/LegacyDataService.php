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

namespace App\Service;

use App\Repository\MajorVersionRepository;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Contracts\Cache\TagAwareCacheInterface;

class LegacyDataService
{
    public function __construct(
        private readonly TagAwareCacheInterface $cache,
        private readonly MajorVersionRepository $majorVersionRepository,
    ) {
    }

    public function getReleaseJson(): string
    {
        $result = $this->cache->get('releases.json', function (ItemInterface $item): string {
            $item->tag(['releases']);
            $content = json_encode($this->majorVersionRepository->findAllPreparedForJson(), JSON_THROW_ON_ERROR);
            $content = $content != false ? $content : '';
            // remove version suffix only used for version sorting
            return str_replace('.0000', '', $content);
        });

        if (!is_string($result)) {
            throw new \RuntimeException(sprintf('String expected but %s given.', gettype($result)));
        }

        return $result;
    }
}
