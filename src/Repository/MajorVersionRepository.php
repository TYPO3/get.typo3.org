<?php

declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
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

use App\Entity\MajorVersion;
use App\Entity\Release;
use Doctrine\ORM\EntityRepository;

class MajorVersionRepository extends EntityRepository
{
    /**
     * Finds all entities in the repository.
     *
     * @return array The entities.
     */
    public function findAllDescending()
    {
        return $this->findBy([], ['version' => 'DESC']);
    }

    public function findAllActive()
    {
        $date = (new \DateTimeImmutable())->format('Y-m-d');
        $qb = $this->createQueryBuilder('m');
        $qb->where(
            $qb->expr()->orX(
                $qb->expr()->gte('m.maintainedUntil', ':date'),
                $qb->expr()->isNull('m.maintainedUntil'),
                $qb->expr()->andX(
                    $qb->expr()->gt('m.eltsUntil', ':date'),
                    $qb->expr()->lte('m.maintainedUntil', ':date')
                )
            )
        );
        $qb->setParameter('date', $date);
        $qb->addOrderBy('m.version', 'DESC');
        return $qb->getQuery()->execute();
    }

    public function findAllActiveCommunity()
    {
        $date = (new \DateTimeImmutable())->format('Y-m-d');
        $qb = $this->createQueryBuilder('m');
        $qb->where(
            $qb->expr()->orX(
                $qb->expr()->gte('m.maintainedUntil', ':date'),
                $qb->expr()->isNull('m.maintainedUntil')
            )
        );
        $qb->setParameter('date', $date);
        $qb->addOrderBy('m.version', 'DESC');
        return $qb->getQuery()->execute();
    }

    public function findAllActiveElts()
    {
        $date = (new \DateTimeImmutable())->format('Y-m-d');
        $qb = $this->createQueryBuilder('m');
        $qb->where(
            $qb->expr()->andX(
                $qb->expr()->gt('m.eltsUntil', ':date'),
                $qb->expr()->lte('m.maintainedUntil', ':date')
            )
        );
        $qb->setParameter('date', $date);
        $qb->addOrderBy('m.version', 'DESC');
        return $qb->getQuery()->execute();
    }

    public function findAllPreparedForJson()
    {
        $data = $this->findCommunityVersionsGroupedByMajor();
        $data = array_merge($data, $this->findStableReleases());
        $data = array_merge($data, $this->findLtsReleases());
        return $data;
    }

    public function findAllGroupedByMajor(): array
    {
        $all = $this->findAll();
        $data = [];
        foreach ($all as $version) {
            $data[$this->formatVersion($version->getVersion())] = $version;
        }
        uksort($data, 'version_compare');
        $data = array_reverse($data);
        return $data;
    }

    public function findCommunityVersionsGroupedByMajor(): array
    {
        $all = $this->findAll();
        $data = [];
        foreach ($all as $version) {
            $version = $this->removeEltsReleases($version);
            $data[$this->formatVersion($version->getVersion())] = $version;
        }
        uksort($data, 'version_compare');
        $data = array_reverse($data);
        return $data;
    }

    public function findAllComposerSupported()
    {
        $qb = $this->createQueryBuilder('m');
        $qb->where(
            $qb->expr()->gte('m.version', ':minversion')
        );
        $qb->setParameter('minversion', 8);
        $qb->addOrderBy('m.version', 'DESC');
        return $qb->getQuery()->execute();
    }

    public function findLatestLtsComposerSupported()
    {
        $qb = $this->createQueryBuilder('m');
        $qb->where(
            $qb->expr()->andX(
                $qb->expr()->isNotNull('m.lts'),
                $qb->expr()->gte('m.version', ':minversion')
            )
        );
        $qb->setParameter('minversion', 8);
        $qb->addOrderBy('m.version', 'DESC');
        $res = $qb->getQuery()->execute();
        return reset($res);
    }

    private function findStableReleases(): array
    {
        $qb = $this->createQueryBuilder('m');
        $qb->setMaxResults(1)->orderBy('m.version', 'DESC');
        $res = $qb->getQuery()->execute();
        $latestMajor = array_pop($res);
        $releases = $this->majorVersionDescending($latestMajor);
        $latestStable = $releases[0];
        $latestOldStable = $releases[1] ?? null;
        return [
            'latest_stable' => $latestStable->getVersion(),
            'latest_old_stable' => $latestOldStable ? $latestOldStable->getVersion() : null,
        ];
    }

    private function findLtsReleases(): array
    {
        $date = (new \DateTimeImmutable())->format('Y-m-d');
        $qb = $this->createQueryBuilder('m');
        $qb->setMaxResults(2)
            ->where(
                $qb->expr()->andX(
                    $qb->expr()->isNotNull('m.lts'),
                    $qb->expr()->gte('m.maintainedUntil', $date)
                )
            );
        $qb->orderBy('m.maintainedUntil', 'DESC');
        $res = $qb->getQuery()->execute();
        $latestLts = array_shift($res);
        $latestOldLts = array_shift($res);

        $latestLtsReleases = $this->majorVersionDescending($latestLts);
        $latestOldLtsReleases = $this->majorVersionDescending($latestOldLts);
        $latest = $latestLtsReleases[0];
        $latestOld = $latestOldLtsReleases[0];
        return [
            'latest_lts' => $latest->getVersion(),
            'latest_old_lts' => $latestOld->getVersion(),
        ];
    }

    /**
     * As PHP does not like sorting arrays with a mix of int
     * and string keys, we forcibly suffix .0 releases
     * In versions 7, 8, 9 the json key should only be the first
     * digit -- therefor we add a recognizable suffix that will
     * be later removed in DefaultController.
     *
     * @param int|float|string $version
     * @return string
     */
    private function formatVersion($version): string
    {
        $version = (string)$version;
        if (\strpos($version, '.') === false) {
            if (\in_array((int)$version, [7, 8, 9, 10, 11, 12, 13], true)) {
                $version .= '.0000';
            } else {
                $version .= '.0';
            }
        }
        return $version;
    }

    /**
     * @param MajorVersion $majorVersion
     * @return Release[]
     */
    private function majorVersionDescending(MajorVersion $majorVersion): array
    {
        $releases = $majorVersion->getReleases()->toArray();

        usort(
            $releases,
            function (Release $a, Release $b) {
                return version_compare($b->getVersion(), $a->getVersion());
            }
        );

        return $releases;
    }

    /**
     * @param MajorVersion $majorVersion
     * @return MajorVersion
     */
    private function removeEltsReleases(MajorVersion $majorVersion): MajorVersion
    {
        $majorVersion->setReleases($majorVersion->getReleases()->filter(static function (Release $release) {
            return !$release->isElts();
        }));

        return $majorVersion;
    }
}
