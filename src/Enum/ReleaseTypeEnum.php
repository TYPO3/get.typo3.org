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
    const TYPE_REGULAR = 'regular';
    const TYPE_DEVELOPMENT = 'development';
    const TYPE_SECURITY = 'security';

    protected static $typeName = [
        self::TYPE_REGULAR => 'Regular',
        self::TYPE_DEVELOPMENT => 'Development',
        self::TYPE_SECURITY => 'Security',
    ];

    public static function getTypeName(string $typeShortName): string
    {
        if (!isset(static::$typeName[$typeShortName])) {
            return "Unknown type ($typeShortName)";
        }
        return static::$typeName[$typeShortName];
    }

    public static function getAvailableTypes(): array
    {
        return [
            self::TYPE_REGULAR,
            self::TYPE_DEVELOPMENT,
            self::TYPE_SECURITY,
        ];
    }
}
