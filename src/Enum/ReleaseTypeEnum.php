<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Enum;

class ReleaseTypeEnum
{
    const OPTION_REGULAR = 'regular';
    const OPTION_DEVELOPMENT = 'development';
    const OPTION_SECURITY = 'security';

    protected static $typeName = [
        self::OPTION_REGULAR => 'Regular',
        self::OPTION_DEVELOPMENT => 'Development',
        self::OPTION_SECURITY => 'Security',
    ];

    public static function getName(string $option): string
    {
        if (!isset(static::$optionNames[$option])) {
            return "Unknown option ($option)";
        }
        return static::$optionNames[$option];
    }

    public static function getAvailableOptions(): array
    {
        return [
            self::OPTION_REGULAR,
            self::OPTION_DEVELOPMENT,
            self::OPTION_SECURITY,
        ];
    }
}
