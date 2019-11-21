<?php

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\DataFixtures;

use App\Entity\Embeddables\Package;
use App\Entity\MajorVersion;
use App\Entity\Release;
use App\Enum\ReleaseTypeEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ReleaseFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $this->generateReleasesForMajorVersion($manager, $this->getReference(MajorVersionFixtures::MAJOR_VERSION_SPRINT), 6);
        $this->generateReleasesForMajorVersion($manager, $this->getReference(MajorVersionFixtures::MAJOR_VERSION_LTS), 12);
        $this->generateReleasesForMajorVersion($manager, $this->getReference(MajorVersionFixtures::MAJOR_VERSION_ELTS), 24);
        $this->generateReleasesForMajorVersion($manager, $this->getReference(MajorVersionFixtures::MAJOR_VERSION_OUTDATED), 24);
        $manager->flush();
    }

    protected function generateReleasesForMajorVersion(ObjectManager $manager, MajorVersion $majorVersion, int $amount = 12)
    {
        $faker = \Faker\Factory::create();
        $majorVersionNumber =  $majorVersion->getVersion();

        $versionData = explode('.', trim($majorVersion->getVersion()));
        $versionData[0] = isset($versionData[0]) && is_numeric($versionData[0]) ? (int) $versionData[0] : 0;
        $versionData[1] = isset($versionData[1]) && is_numeric($versionData[1]) ? (int) $versionData[1] : 0;
        $versionData[2] = 0;

        for ($i = 0; $i < $amount; $i++) {
            $versionData[2] = $i;
            $version = implode('.', $versionData);
            $date = \DateTime::createFromFormat(
                \DateTimeInterface::ATOM,
                $majorVersion->getReleaseDate()->modify('+' . ($i * 3) . ' months')->format(\DateTimeInterface::ATOM)
            );

            $release = new Release();
            $release->setVersion($version);
            $release->setType($faker->randomElement(ReleaseTypeEnum::getAvailableTypes()));
            $release->setDate($date);
            $release->setMajorVersion($majorVersion);
            $package = new Package(
                $faker->boolean ? $faker->md5 : null,
                $faker->boolean ? $faker->sha1 : null,
                $faker->boolean ? $faker->sha256: null
            );
            $release->setTarPackage($package);
            $release->setZipPackage($package);
            if ($majorVersion->getMaintainedUntil() && $date > $majorVersion->getMaintainedUntil()) {
                $release->setElts(true);
            }
            $manager->persist($release);
        }
    }

    public function getDependencies()
    {
        return [
            MajorVersionFixtures::class,
        ];
    }
}
