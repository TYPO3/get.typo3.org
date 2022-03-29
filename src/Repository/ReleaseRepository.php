<?php

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

namespace App\Repository;

use App\Entity\Release;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

final class ReleaseRepository
{
    /**
     * @var EntityRepository<Release>
     */
    private readonly EntityRepository $repository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repository = $entityManager->getRepository(Release::class);
    }

    /**
     * @return Release[]
     */
    public function findAll(): array
    {
        return $this->repository->findAll();
    }

    public function findVersion(string $version): ?Release
    {
        return $this->repository->findOneBy(['version' => $version]);
    }

    public function findLatestSecurityReleaseByMajorVersion(string $version): ?Release
    {
        return $this->repository->findOneBy(['majorVersion' => $version, 'type' => 'security'], ['date' => Criteria::DESC]);
    }
}
