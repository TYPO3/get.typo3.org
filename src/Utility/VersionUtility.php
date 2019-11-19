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
        if (strpos($version, '.') === false && is_numeric($version)) {
            return (float) $version;
        }
        $majorVersion = substr($version, 0, strrpos($version, '.'));
        if ((float)$majorVersion >= 7) {
            $majorVersion = substr($version, 0, strpos($version, '.'));
        }
        return (float) $majorVersion;
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
