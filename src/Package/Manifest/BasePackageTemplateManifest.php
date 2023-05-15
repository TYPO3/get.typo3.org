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

namespace App\Package\Manifest;

use function sprintf;

class BasePackageTemplateManifest
{
    use BasePackageManifestTrait;

    public const SCHEMA_PATH = __DIR__ . '/../../../public/schemas/base-package-template-schema.json';

    /**
     * @var array{
     *   description: string,
     *   dependencies: array<string, string>,
     *   images: array{
     *     gallery: array<string, string>
     *   }
     * }
     */
    private array $manifest;

    public function __construct(
        private readonly string $composerPackageInstallPath,
        private readonly string $coreVersion,
    ) {
        $this->load($this->getFilename(), self::SCHEMA_PATH);
    }

    public function getDescription(): string
    {
        return $this->manifest['description'];
    }

    /**
     * @return array<string, string>
     */
    public function getDependencies(): array
    {
        return $this->manifest['dependencies'];
    }

    /**
     * @return array<string, string>
     */
    public function getGallery(): array
    {
        return $this->manifest['images']['gallery'];
    }

    public function getFilename(): string
    {
        return sprintf('%s/templates/%s/manifest.json', $this->composerPackageInstallPath, $this->coreVersion);
    }
}
