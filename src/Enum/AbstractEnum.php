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

namespace App\Enum;

 /**
 * @codeCoverageIgnore No need to test this ...
 */
abstract class AbstractEnum
{
    /**
     * @var array<mixed, mixed>
     */
    protected static array $optionNames = [];

    public static function getName(mixed $option): string
    {
        return static::$optionNames[$option] ?? ('Unknown option (' . $option . ')');
    }

    /**
     * @return mixed[]
     */
    public static function getAvailableOptions(bool $withDescription = false): array
    {
        return $withDescription ? static::$optionNames : array_keys(static::$optionNames);
    }

    public static function isOption(mixed $option): bool
    {
        return isset(static::$optionNames[$option]);
    }
}
