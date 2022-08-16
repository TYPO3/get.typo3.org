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

namespace App\EventListener;

use App\Entity\MajorVersion;
use App\Service\CacheService;
use Doctrine\ORM\Event\LifecycleEventArgs;

final class MajorVersionListener
{
    public function __construct(
        private readonly CacheService $cacheService,
    ) {
    }

    public function postUpdate(MajorVersion $majorVersion, LifecycleEventArgs $eventArgs): void
    {
        $this->cacheService->purgeMajorVersion((string)$majorVersion->getVersion());
    }

    public function postRemove(MajorVersion $majorVersion, LifecycleEventArgs $eventArgs): void
    {
        $this->cacheService->purgeMajorVersion((string)$majorVersion->getVersion());
    }

    public function postPersist(MajorVersion $majorVersion, LifecycleEventArgs $eventArgs): void
    {
        $this->cacheService->purgeMajorVersion((string)$majorVersion->getVersion());
    }
}
