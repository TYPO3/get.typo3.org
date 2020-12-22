<?php

declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
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

namespace App\Enum;

class RequirementCategoryEnum
{
    const OPTION_PHP = 'php';
    const OPTION_DATABASE = 'database';
    const OPTION_HARDWARE = 'hardware';
    const OPTION_CLIENT = 'client';

    protected static $optionNames = [
        self::OPTION_PHP => 'PHP',
        self::OPTION_DATABASE => 'Database',
        self::OPTION_HARDWARE => 'Hardware',
        self::OPTION_CLIENT => 'Client',
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
        ];
    }
}
