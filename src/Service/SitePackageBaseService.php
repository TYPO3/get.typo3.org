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

namespace App\Service;

use App\Entity\SitePackage\BasePackage;
use App\Entity\SitePackage\BasePackageVersion;
use Doctrine\Common\Collections\ArrayCollection;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Yaml\Yaml;

class SitePackageBaseService
{
    protected KernelInterface $kernel;
    protected CacheItemPoolInterface $cache;

    public function __construct(KernelInterface $kernel, CacheItemPoolInterface $cache)
    {
        $this->kernel = $kernel;
        $this->cache = $cache;
    }

    /**
     * @return ArrayCollection<int, BasePackage>
     */
    public function getPackages(): ArrayCollection
    {
        $cache = $this->cache->getItem('sitepackagegenerator.basepackages');
        if (!$cache->isHit()) {
            $cache->set($this->generatePackages());
        }

        /** @var ArrayCollection<int, BasePackage> $data */
        $data = $cache->get();

        return $data;
    }

    /**
     * @return array<string, string>
     */
    public function getBasePackageChoices(): array
    {
        $choices = [];
        foreach ($this->getPackages() as $package) {
            $choices[$package->getLabel()] = $package->getIdentifier();
        }

        /** @var array<string, string> $choices */
        return $choices;
    }

    /**
     * @return array<string, float>
     */
    public function getBasePackageVersionChoices(): array
    {
        /** @var array<string, float> $choices */
        $choices = [];

        /** @var BasePackage $package */
        foreach ($this->getPackages() as $package) {
            /** @var BasePackageVersion $version */
            foreach ($package->getVersions() as $version) {
                $choices[(string)$version->getVersion()] = $version->getVersion();
            }
        }
        krsort($choices);

        return $choices;
    }

    /**
     * @return ArrayCollection<int, BasePackage>
     */
    protected function generatePackages(): ArrayCollection
    {
        $finder = new Finder();
        $finder->directories()->in($this->kernel->getProjectDir() . '/resources/packages')->depth('== 0');

        $collection = new ArrayCollection();
        foreach ($finder as $folder) {
            $identifier = $folder->getFilename();
            $path = $folder->getPathname();
            $configFile = $path . '/config.yaml';

            if (file_exists($configFile)) {
                /** @var array{'label': string} $config */
                $config = Yaml::parseFile($configFile);

                $basepackage = new BasePackage();
                $basepackage->setIdentifier($identifier);
                $basepackage->setLabel($config['label'] ?? $identifier);

                $versionFinder = new Finder();
                $versionFinder->directories()->in($folder->getPathname())->depth('== 0');
                foreach ($versionFinder as $versionFolder) {
                    $versionNumber = (float)($versionFolder->getFilename());
                    $basepackageVersion = new BasePackageVersion();
                    $basepackageVersion->setVersion($versionNumber);
                    $basepackage->addVersion($basepackageVersion);
                }
                $collection->add($basepackage);
            }
        }

        return $collection;
    }
}
