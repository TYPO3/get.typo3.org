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

namespace App\Utility;

class VersionUtility
{
    /**
     * Regex to match pre-release data (sort of).
     *
     * Due to backwards compatibility:
     *   - Instead of enforcing hyphen, an underscore, dot or nothing at all are also accepted.
     *   - Only stabilities as recognized by Composer are allowed to precede a numerical identifier.
     *   - Numerical-only pre-release identifiers are not supported, see tests.
     *
     *                        |--------------|
     * [major].[minor].[patch] -[pre-release] +[build-metadata]
     *
     * @var string
     */
    private const MODIFIER_REGEX = '[._-]?(?:(stable|beta|b|RC|alpha|a|patch|pl|p)((?:[.-]?\d+)*+)?)?([.-]?dev)?';

    public static function extractMajorVersionNumber(string $version): string
    {
        $versionData = explode('.', trim($version));
        $versionData[0] = isset($versionData[0]) && is_numeric($versionData[0]) ? (int)$versionData[0] : 0;
        $versionData[1] = isset($versionData[1]) && is_numeric($versionData[1]) && $versionData[0] < 7 ? (int)$versionData[1] : 0;
        array_splice($versionData, 2);
        return implode('.', $versionData);
    }

    public static function isValidSemverVersion(string $version): bool
    {
        $success = preg_match(
            '#^(\d+\.\d+\.\d+)(?:-?([0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*))?(?:\+([0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*))?$#',
            $version,
            $matches
        );
        return (int)$success === 1;
    }

    /**
     * @param string|float|int $version
     */
    public static function normalize($version, int $digits = 3): string
    {
        $version = trim((string)$version);

        // match classical versioning
        if (preg_match('{^v?(\d{1,5})(\.\d++)?(\.\d++)?(\.\d++)?' . self::MODIFIER_REGEX . '$}i', $version, $matches)) {
            $version = $matches[1];

            for ($i = 2; $i <= $digits; ++$i) {
                $version .= (empty($matches[$i]) ? '.0' : $matches[$i]);
            }
        }

        return $version;
    }
}
