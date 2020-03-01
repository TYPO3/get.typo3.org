<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Enum;

class RequirementCategoryEnum
{
    public const OPTION_PHP = 'php';
    public const OPTION_DATABASE = 'database';
    public const OPTION_HARDWARE = 'hardware';
    public const OPTION_CLIENT = 'client';
    public const OPTION_OS = 'os';
    public const OPTION_WEBSERVER = 'webserver';

    protected static $optionNames = [
        self::OPTION_PHP => 'PHP',
        self::OPTION_DATABASE => 'Database',
        self::OPTION_HARDWARE => 'Hardware',
        self::OPTION_CLIENT => 'Client',
        self::OPTION_OS => 'Operating System',
        self::OPTION_WEBSERVER => 'Webserver',
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
            self::OPTION_PHP,
            self::OPTION_DATABASE,
            self::OPTION_HARDWARE,
            self::OPTION_CLIENT,
            self::OPTION_OS,
            self::OPTION_WEBSERVER,
        ];
    }
}
