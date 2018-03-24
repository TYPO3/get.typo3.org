<?php
declare(strict_types=1);

namespace App\Repository;


use Doctrine\ORM\EntityRepository;

class MajorVersionRepository extends EntityRepository
{

    public function findAllActive()
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
        return $qb->getQuery()->execute();
    }

    public function findAllPreparedForJson()
    {
        $data = $this->findAllGroupedByMajor();
        $data = array_merge($data, $this->findStableReleases());
        $data = array_merge($data, $this->findLtsReleases());
        return $data;
    }

    public function findAllGroupedByMajor(): array
    {
        $all = $this->findAll();
        $data = [];
        /** @var \App\Entity\MajorVersion $version */
        foreach ($all as $version) {
            $data[$this->formatVersion($version->getVersion())] = $version;
        }
        uksort($data, 'version_compare');
        $data = array_reverse($data);
        return $data;
    }

    private function findStableReleases(): array
    {
        $qb = $this->createQueryBuilder('m');
        $qb->setMaxResults(1)->orderBy('m.version', 'DESC');
        $res = $qb->getQuery()->execute();
        $latestMajor = array_pop($res);
        $releases = $latestMajor->getReleases();
        $latestStable = $releases->first();
        $latestOldStable = $releases->next();
        return [
            'latest_stable' => $latestStable->getVersion(),
            'latest_old_stable' => $latestOldStable->getVersion(),
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
        $res = $qb->getQuery()->execute();
        $latestLts = array_pop($res);
        $latestOldLts = array_pop($res);
        $latest = $latestLts->getReleases()->first();
        $latestOld = $latestOldLts->getReleases()->first();
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
            if (\in_array((int)$version, [7, 8, 9], true)) {
                $version .= '.0000';
            } else {
                $version .= '.0';
            }
        }
        return $version;
    }

}