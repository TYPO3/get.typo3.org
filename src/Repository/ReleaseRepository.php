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
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Release>
 * @method Release|null find($id, $lockMode = null, $lockVersion = null)
 * @method Release|null findOneBy(array $criteria, array $orderBy = null)
 * @method Release[]    findAll()
 * @method Release[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 * @method Release|null findVersion(string $version)
 * @method Release|null findLatestSecurityReleaseByMajorVersion(string $version)
 */
class ReleaseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Release::class);
    }

    public function findVersion(string $version): ?Release
    {
        return $this->findOneBy(['version' => $version]);
    }

    public function findLatestSecurityReleaseByMajorVersion(string $version): ?Release
    {
        return $this->findOneBy(['majorVersion' => $version, 'type' => 'security'], ['date' => Criteria::DESC]);
    }
}
