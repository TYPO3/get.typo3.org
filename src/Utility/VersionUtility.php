<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Utility;

class VersionUtility
{
    public static function extractMajorVersionNumber(string $version): float
    {
        $versionData = explode('.', trim($version));
        $versionData[0] = isset($versionData[0]) && is_numeric($versionData[0]) ? (int) $versionData[0] : 0;
        $versionData[1] = isset($versionData[1]) && is_numeric($versionData[1]) && $versionData[0] < 7 ? (int) $versionData[1] : 0;
        array_splice($versionData, 2);
        return (float) implode('.', $versionData);
    }

    public static function isValidSemverVersion(string $version): bool
    {
        $success = preg_match(
            "/^(\d+\.\d+\.\d+)(?:-?([0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*))?(?:\+([0-9A-Za-z-]+(?:\.[0-9A-Za-z-]+)*))?$/",
            $version,
            $matches
        );
        return (int) $success === 1;
    }
}
