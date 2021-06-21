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

use App\Entity\MajorVersion;
use App\Repository\MajorVersionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Contracts\Cache\ItemInterface;

class LegacyDataService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getReleaseJson(): string
    {
        $cache = new FilesystemAdapter();

        return (string)$cache->get('releases.json', function (ItemInterface $item): string {
            /** @var MajorVersionRepository $majorVersions */
            $majorVersions = $this->entityManager->getRepository(MajorVersion::class);
            $content = json_encode($majorVersions->findAllPreparedForJson()) ?: '';
            // remove version suffix only used for version sorting
            return str_replace('.0000', '', $content);
        });
    }
}
