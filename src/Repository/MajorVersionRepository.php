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

namespace App\Repository;

use App\Entity\MajorVersion;
use App\Entity\Release;
use Doctrine\Common\Collections\Criteria;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use RuntimeException;

final class MajorVersionRepository
{
    /**
     * @var EntityRepository<MajorVersion>
     */
    private readonly EntityRepository $repository;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repository = $entityManager->getRepository(MajorVersion::class);
    }

    /**
     * @return MajorVersion[]
     */
    public function findAll(): array
    {
        return $this->repository->findAll();
    }

    /**
     * @return array<MajorVersion>
     */
    public function findAllDescending(): array
    {
        return $this->repository->findBy([], ['version' => Criteria::DESC]);
    }

    public function findLatestWithReleases(): ?MajorVersion
    {
        $versions = $this->repository->findBy([], ['version' => Criteria::DESC]);

        foreach ($versions as $version) {
            if ($version->getReleases()->count() > 0) {
                return $version;
            }
        }

        return null;
    }

    public function findVersion(string $version): ?MajorVersion
    {
        return $this->repository->findOneBy(['version' => $version]);
    }

    /**
     * @return array<MajorVersion>
     * @throws RuntimeException
     */
    public function findAllActive(): array
    {
        $date = (new \DateTimeImmutable())->format('Y-m-d');
        $qb = $this->repository->createQueryBuilder('m');
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
        $qb->addOrderBy('m.version', Criteria::DESC);

        if (!is_array($result = $qb->getQuery()->execute())) {
            throw new RuntimeException('Query not returned an array type.', 1_638_022_065);
        }

        return $result;
    }

    /**
     * @return array<MajorVersion>
     * @throws RuntimeException
     */
    public function findAllActiveCommunity(): array
    {
        $date = (new \DateTimeImmutable())->format('Y-m-d');
        $qb = $this->repository->createQueryBuilder('m');
        $qb->where(
            $qb->expr()->orX(
                $qb->expr()->gte('m.maintainedUntil', ':date'),
                $qb->expr()->isNull('m.maintainedUntil')
            )
        );
        $qb->setParameter('date', $date);
        $qb->addOrderBy('m.version', Criteria::DESC);

        if (!is_array($result = $qb->getQuery()->execute())) {
            throw new RuntimeException('Query not returned an array type.', 1_638_022_066);
        }

        // Remove versions without releases
        foreach ($result as $key => $version) {
            if ($version->getReleases()->count() === 0) {
                unset($result[$key]);
            }
        }

        return $result;
    }

    /**
     * @return array<MajorVersion>
     * @throws RuntimeException
     */
    public function findAllActiveElts(): array
    {
        $date = (new \DateTimeImmutable())->format('Y-m-d');
        $qb = $this->repository->createQueryBuilder('m');
        $qb->where(
            $qb->expr()->andX(
                $qb->expr()->gt('m.eltsUntil', ':date'),
                $qb->expr()->lte('m.maintainedUntil', ':date')
            )
        );
        $qb->setParameter('date', $date);
        $qb->addOrderBy('m.version', Criteria::DESC);

        if (!is_array($result = $qb->getQuery()->execute())) {
            throw new RuntimeException('Query not returned an array type.', 1_638_022_067);
        }

        return $result;
    }

    /**
     * @return mixed[]
     */
    public function findAllPreparedForJson(): array
    {
        $data = $this->findCommunityVersionsGroupedByMajor();
        $data = array_merge($data, $this->findStableReleases());
        return array_merge($data, $this->findLtsReleases());
    }

    /**
     * @return array<string, MajorVersion>
     */
    public function findAllGroupedByMajor(): array
    {
        $versions = $this->repository->findAll();
        $data = [];
        foreach ($versions as $version) {
            $data[$this->formatVersion($version->getVersion())] = $version;
        }

        uksort(
            $data,
            fn (string $a, string $b): int => version_compare($a, $b)
        );
        return array_reverse($data);
    }

    /**
     * @return array<string, MajorVersion>
     */
    public function findCommunityVersionsGroupedByMajor(): array
    {
        $versions = $this->repository->findAll();
        $data = [];
        foreach ($versions as $version) {
            $data[$this->formatVersion($version->getVersion())] = $this->removeEltsReleases($version);
        }

        uksort(
            $data,
            fn (string $a, string $b): int => version_compare($a, $b)
        );
        return array_reverse($data);
    }

    /**
     * @return array<MajorVersion>
     * @throws RuntimeException
     */
    public function findAllComposerSupported(): array
    {
        $qb = $this->repository->createQueryBuilder('m');
        $qb->where(
            $qb->expr()->gte('m.version', ':minversion')
        );
        $qb->setParameter('minversion', 8);
        $qb->addOrderBy('m.version', Criteria::DESC);

        if (!is_array($result = $qb->getQuery()->execute())) {
            throw new RuntimeException('Query not returned an array type.', 1_638_022_068);
        }

        return $result;
    }

    /**
     * @throws RuntimeException
     */
    public function findLatestLtsComposerSupported(): ?MajorVersion
    {
        $qb = $this->repository->createQueryBuilder('m');
        $qb->where(
            $qb->expr()->andX(
                $qb->expr()->isNotNull('m.lts'),
                $qb->expr()->gte('m.version', ':minversion')
            )
        );
        $qb->setParameter('minversion', 8);
        $qb->setMaxResults(1)->orderBy('m.version', Criteria::DESC);

        if (!is_array($result = $qb->getQuery()->execute())) {
            throw new RuntimeException('Query not returned an array type.', 1_638_022_069);
        }

        return array_pop($result);
    }

    /**
     * @return array{latest_stable: string, latest_old_stable: string|null}
     * @throws RuntimeException
     */
    private function findStableReleases(): array
    {
        $qb = $this->repository->createQueryBuilder('m');
        $qb->setMaxResults(1)->orderBy('m.version', Criteria::DESC);

        if (!is_array($result = $qb->getQuery()->execute())) {
            throw new RuntimeException('Query not returned an array type.', 1_638_022_070);
        }

        $latestMajor = array_pop($result);
        $releases = $this->majorVersionDescending($latestMajor);
        $latestStable = $releases[0];
        $latestOldStable = $releases[1] ?? null;
        return [
            'latest_stable' => $latestStable->getVersion(),
            'latest_old_stable' => $latestOldStable !== null ? $latestOldStable->getVersion() : null,
        ];
    }

    /**
     * @return array{latest_lts: string, latest_old_lts: string}
     * @throws RuntimeException
     */
    private function findLtsReleases(): array
    {
        $date = (new \DateTimeImmutable())->format('Y-m-d');
        $qb = $this->repository->createQueryBuilder('m');
        $qb->setMaxResults(2)
            ->where(
                $qb->expr()->andX(
                    $qb->expr()->isNotNull('m.lts'),
                    $qb->expr()->gte('m.maintainedUntil', $date)
                )
            );
        $qb->orderBy('m.maintainedUntil', Criteria::DESC);

        if (!is_array($result = $qb->getQuery()->execute())) {
            throw new RuntimeException('Query not returned an array type.', 1_638_022_071);
        }

        $latestLts = array_shift($result);
        $latestOldLts = array_shift($result);

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
     */
    private function formatVersion(float|int|string $version): string
    {
        $version = (string)$version;
        if (!str_contains($version, '.')) {
            if (\in_array((int)$version, [7, 8, 9, 10, 11, 12, 13], true)) {
                $version .= '.0000';
            } else {
                $version .= '.0';
            }
        }

        return $version;
    }

    private function removeEltsReleases(MajorVersion $version): MajorVersion
    {
        $version->setReleases($version->getReleases()->filter(static fn (Release $release): bool => !$release->isElts()));

        return $version;
    }

    /**
     * @return Release[]
     */
    private function majorVersionDescending(MajorVersion $version): array
    {
        $releases = $version->getReleases()->toArray();

        usort(
            $releases,
            fn (Release $a, Release $b): int => version_compare($b->getVersion(), $a->getVersion())
        );

        return $releases;
    }
}
