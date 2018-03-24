<?php
declare(strict_types=1);

namespace App\Service;


use App\Entity\MajorVersion;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Cache\Simple\FilesystemCache;

class LegacyDataService
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getReleaseJson(): string
    {
        $cache = new FilesystemCache();
        if ($cache->has('releases.json')) {
            $content = (string)$cache->get('releases.json');
        } else {
            /** @var \App\Repository\MajorVersionRepository $rep */
            $rep = $this->entityManager->getRepository(MajorVersion::class);
            $content = json_encode($rep->findAllPreparedForJson());
            // remove version suffix only used for version sorting
            $content = str_replace('.0000', '', $content);
            $cache->set('releases.json', $content);
        }
        return $content;
    }
}