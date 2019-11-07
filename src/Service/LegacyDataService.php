<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Service;

use App\Entity\MajorVersion;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Contracts\Cache\ItemInterface;

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
        $cache = new FilesystemAdapter();
        $content = (string)$cache->get('releases.json', function (ItemInterface $item) {
            /** @var \App\Repository\MajorVersionRepository $rep */
            $rep = $this->entityManager->getRepository(MajorVersion::class);
            $content = json_encode($rep->findAllPreparedForJson());
            // remove version suffix only used for version sorting
            $content = str_replace('.0000', '', $content);
            return $content;
        });

        return $content;
    }
}
