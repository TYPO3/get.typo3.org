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
        $filesystemAdapter = new FilesystemAdapter();

        return (string)$filesystemAdapter->get('releases.json', function (ItemInterface $item): string {
            /** @var \App\Repository\MajorVersionRepository $rep */
            $rep = $this->entityManager->getRepository(MajorVersion::class);
            $content = json_encode($rep->findAllPreparedForJson());
            // remove version suffix only used for version sorting
            $content = str_replace('.0000', '', $content);
            return $content;
        });
    }
}
