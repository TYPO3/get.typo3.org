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

namespace App\Package;

use Composer\Package\PackageInterface;
use RuntimeException;

use function rsort;
use function is_string;
use function is_array;
use function sprintf;

class BasePackageManifest
{
    /**
     * @var string
     */
    private const EXTRA_KEY = 'typo3/base-package';

    public function __construct(
        private readonly PackageInterface $package,
    ) {
    }

    public function getName(): string
    {
        return $this->package->getName();
    }

    public function getVersion(): string
    {
        return $this->package->getVersion();
    }

    public function getTitle(): string
    {
        return $this->getStringValue('title');
    }

    public function getDescription(): string
    {
        return $this->getStringValue('description');
    }

    /**
     * @return array<int, string>
     */
    public function getCoreVersions(): array
    {
        $array = $this->getArrayValue('core-versions');
        rsort($array, SORT_NUMERIC);
        return $array;
    }

    public function getPreviewImage(): string
    {
        $array = $this->getArrayValue('images', []);
        return $array['preview'] ?? 'images/preview.png';
    }

    /**
     * @return array<string, string|string[]>
     */
    private function getExtraConfig(): array
    {
        if (!is_array($extraConfig = ($this->package->getExtra()[self::EXTRA_KEY] ?? []))) {
            throw new RuntimeException(
                'Extra config is not defined or is not an array.',
                1_658_926_616
            );
        }

        return $extraConfig;
    }

    private function getStringValue(string $key, ?string $default = null): string
    {
        if (!is_string($value = ($this->getExtraConfig()[$key] ?? null))) {
            if ($default === null) {
                throw new RuntimeException(
                    sprintf('Mandatory property "%s" is not defined or is not a string.', $key),
                    1_658_926_617
                );
            }

            $value = $default;
        }

        return $value;
    }

    /**
     * @param string[]|null $default
     *
     * @return string[]
     */
    private function getArrayValue(string $key, ?array $default = null): array
    {
        if (!is_array($value = ($this->getExtraConfig()[$key] ?? null))) {
            if ($default === null) {
                throw new RuntimeException(
                    sprintf('Mandatory property "%s" is not defined or is not an array.', $key),
                    1_658_926_618
                );
            }

            $value = $default;
        }

        return $value;
    }
}
