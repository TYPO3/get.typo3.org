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

namespace App\Tests\Functional\Fixtures;

use App\Entity\MajorVersion;
use App\Entity\Release;
use App\Enum\ReleaseTypeEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use DateTime;
use DateTimeInterface;
use RuntimeException;

final class ReleaseFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $this->generateReleasesForMajorVersion($manager, MajorVersionFixtures::MAJOR_VERSION_SPRINT, 6);
        $this->generateReleasesForMajorVersion($manager, MajorVersionFixtures::MAJOR_VERSION_LTS, 12);
        $this->generateReleasesForMajorVersion($manager, MajorVersionFixtures::MAJOR_VERSION_LTS_OLD, 18);
        $this->generateReleasesForMajorVersion($manager, MajorVersionFixtures::MAJOR_VERSION_ELTS, 24);
        $manager->flush();
    }

    /**
     * @return array<class-string<MajorVersionFixtures>>
     */
    public function getDependencies(): array
    {
        return [
            MajorVersionFixtures::class,
        ];
    }

    protected function generateReleasesForMajorVersion(
        ObjectManager $manager,
        string $versionReference,
        int $amount
    ): void {
        /** @var MajorVersion $majorVersion */
        $majorVersion = $this->getReference($versionReference);

        $majorVersionNumber =  $majorVersion->getVersion();
        $ltsVersionNumber = $majorVersion->getLts() ?? $majorVersionNumber;

        $versionData = explode('.', trim((string)$majorVersionNumber));
        $ltsVersionData = explode('.', trim((string)$ltsVersionNumber));
        $ltsVersionData[0] = isset($ltsVersionData[0]) && is_numeric($ltsVersionData[0])
            ? (int)$ltsVersionData[0]
            : (isset($versionData[0]) && is_numeric($versionData[0]) ? (int)$versionData[0] : 0);
        $ltsVersionData[1] = isset($ltsVersionData[1]) && is_numeric($ltsVersionData[1])
            ? (int)$ltsVersionData[1]
            : (isset($versionData[1]) && is_numeric($versionData[1]) ? (int)$versionData[1] : 0);

        for ($i = 0; $i < $amount; ++$i) {
            $fakeVersion = $ltsVersionData;
            $fakeVersion[2] = $i;
            $version = implode('.', $fakeVersion);
            $date = DateTime::createFromFormat(
                DateTimeInterface::ATOM,
                $majorVersion->getReleaseDate()->modify('+' . ($i * 2) . ' months')->format(DateTimeInterface::ATOM)
            );

            if ($date === false) {
                throw new RuntimeException('Can not calculate date.', 1_624_354_915);
            }

            $release = new Release();
            $release->setVersion($version);
            $release->setType(ReleaseTypeEnum::OPTION_REGULAR);
            $release->setDate($date);
            $release->setMajorVersion($majorVersion);

            if ($majorVersion->getMaintainedUntil() !== null && $date > $majorVersion->getMaintainedUntil()) {
                $release->setElts(true);
            }

            $manager->persist($release);
        }
    }
}
