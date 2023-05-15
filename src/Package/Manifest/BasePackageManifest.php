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

use function rsort;
use function sprintf;
use function rtrim;
use function trim;

class BasePackageManifest
{
    use BasePackageManifestTrait;

    public const SCHEMA_PATH = __DIR__ . '/../../../public/schemas/base-package-schema.json';

    /**
     * @var array{
     *   title: string,
     *   description: string,
     *   typo3-versions: array<string>,
     *   images: array{
     *     preview: string|null
     *   }|array{}
     * }
     */
    private array $manifest;

    public function __construct(
        private readonly string $composerPackageInstallPath,
    ) {
        $this->load($this->getFilename(), self::SCHEMA_PATH);
    }

    public function getTitle(): string
    {
        return $this->manifest['title'];
    }

    public function getDescription(): string
    {
        return $this->manifest['description'];
    }

    /**
     * @return string[]
     */
    public function getTypo3Versions(): array
    {
        $array = $this->manifest['typo3-versions'];
        rsort($array, SORT_NUMERIC);
        return $array;
    }

    public function getPreviewImage(): string
    {
        return $this->manifest['images']['preview'] ?? 'preview.png';
    }

    private function getFilename(): string
    {
        return sprintf('%s/manifest.json', rtrim(trim($this->composerPackageInstallPath), '/\\'));
    }
}
