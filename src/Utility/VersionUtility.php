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
    private static $modifierRegex = '[._-]?(?:(stable|beta|b|RC|alpha|a|patch|pl|p)((?:[.-]?\d+)*+)?)?([.-]?dev)?';

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

    public static function normalize($version, int $digits = 3)
    {
        $version = trim((string)$version);

        // match classical versioning
        if (preg_match('{^v?(\d{1,5})(\.\d++)?(\.\d++)?(\.\d++)?' . self::$modifierRegex . '$}i', $version, $matches)) {
            $version = $matches[1];

            for ($i = 2; $i <= $digits; $i++) {
                $version .= (!empty($matches[$i]) ? $matches[$i] : '.0');
            }
        }

        return $version;
    }
}
