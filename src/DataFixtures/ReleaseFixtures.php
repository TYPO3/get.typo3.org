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

namespace App\DataFixtures;

use App\Entity\Embeddables\Package;
use App\Entity\Embeddables\ReleaseNotes;
use App\Entity\MajorVersion;
use App\Entity\Release;
use App\Enum\ReleaseTypeEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ReleaseFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $objectManager)
    {
        $this->generateReleasesForMajorVersion($objectManager, $this->getReference(MajorVersionFixtures::MAJOR_VERSION_SPRINT), 6);
        $this->generateReleasesForMajorVersion($objectManager, $this->getReference(MajorVersionFixtures::MAJOR_VERSION_LTS), 12);
        $this->generateReleasesForMajorVersion($objectManager, $this->getReference(MajorVersionFixtures::MAJOR_VERSION_ELTS), 24);
        $this->generateReleasesForMajorVersion($objectManager, $this->getReference(MajorVersionFixtures::MAJOR_VERSION_ELTS_EXT), 24);
        $this->generateReleasesForMajorVersion($objectManager, $this->getReference(MajorVersionFixtures::MAJOR_VERSION_OUTDATED), 24);
        $objectManager->flush();
    }

    /**
     * @return array<class-string<MajorVersionFixtures>>
     */
    public function getDependencies()
    {
        return [
            MajorVersionFixtures::class,
        ];
    }

    protected function generateReleasesForMajorVersion(ObjectManager $objectManager, MajorVersion $majorVersion, int $amount = 12)
    {
        $generator = \Faker\Factory::create();
        $majorVersionNumber =  $majorVersion->getVersion();
        $ltsVersionNumber = $majorVersion->getLts() ?? $majorVersionNumber;

        $versionData = explode('.', trim((string)$majorVersionNumber));
        $versionData[0] = isset($versionData[0]) && is_numeric($versionData[0]) ? (int)$versionData[0] : 0;
        $versionData[1] = isset($versionData[1]) && is_numeric($versionData[1]) ? (int)$versionData[1] : 0;
        $versionData[2] = 0;

        $ltsVersionData = explode('.', trim((string)$ltsVersionNumber));
        $ltsVersionData[0] = isset($ltsVersionData[0]) && is_numeric($ltsVersionData[0]) ? (int)$ltsVersionData[0] : $versionData[0];
        $ltsVersionData[1] = isset($ltsVersionData[1]) && is_numeric($ltsVersionData[1]) ? (int)$ltsVersionData[1] : $versionData[1];

        for ($i = 0; $i < $amount; ++$i) {
            $fakeVersion = $versionData;
            $fakeVersion[1] = $generator->numberBetween($versionData[1], $ltsVersionData[1]);
            $fakeVersion[2] = $i;
            $version = implode('.', $fakeVersion);
            $date = \DateTime::createFromFormat(
                \DateTimeInterface::ATOM,
                $majorVersion->getReleaseDate()->modify('+' . ($i * 3) . ' months')->format(\DateTimeInterface::ATOM)
            );

            $release = new Release();
            $release->setVersion($version);
            $release->setType($generator->randomElement(ReleaseTypeEnum::getAvailableOptions()));
            $release->setDate($date);
            $release->setMajorVersion($majorVersion);
            $package = new Package(
                $generator->boolean() ? $generator->md5() : null,
                $generator->boolean() ? $generator->sha1() : null,
                $generator->boolean() ? $generator->sha256(): null
            );
            $release->setTarPackage($package);
            $release->setZipPackage($package);

            $releaseNotes = new ReleaseNotes();
            $releaseNotes->setNewsLink($generator->url());
            $releaseNotes->setNews($generator->paragraph($generator->numberBetween(1, 6)));
            $releaseNotes->setUpgradingInstructions($generator->paragraph($generator->numberBetween(0, 1)));
            $changelogTypes = ['TASK', 'BUGFIX', 'FEATURE'];
            $changelog = [];
            $changelog[] = '2019-10-30 7254d67918 [RELEASE] ' . $generator->sentence($generator->numberBetween(4, 8)) . ' (thanks to ' . $generator->name() . ')';
            for ($changeIteration = 0; $changeIteration < $generator->numberBetween(5, 50); ++$changeIteration) {
                $changelog[] = '2019-10-30 7254d67918 [' . $generator->randomElement($changelogTypes) . '] ' . $generator->sentence($generator->numberBetween(4, 8)) . ' (thanks to ' . $generator->name() . ')';
            }
            $releaseNotes->setChanges(' * ' . implode("\n * ", $changelog));
            $release->setReleaseNotes($releaseNotes);

            if ($majorVersion->getMaintainedUntil() && $date > $majorVersion->getMaintainedUntil()) {
                $release->setElts(true);
            }
            $objectManager->persist($release);
        }
    }
}
