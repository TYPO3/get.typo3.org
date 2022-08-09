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

class StringUtility
{
    public static function clean(string $string): string
    {
        $string = str_replace('.', '', $string);
        $string = str_replace(':', '', $string);
        $string = str_replace('-', ' ', $string);
        $string = str_replace('&', '', $string);
        $string = self::convertUmlauts($string);
        $string = self::toASCII($string);

        return trim($string);
    }

    public static function convertUmlauts(string $string): string
    {
        $search = ['Ä', 'Ö', 'Ü', 'ä', 'ö', 'ü', 'ß'];
        $replace = ['Ae', 'Oe', 'Ue', 'ae', 'oe', 'ue', 'ss'];

        return str_replace($search, $replace, $string);
    }

    public static function toASCII(string $string): string
    {
        return strtr(
            utf8_decode($string),
            utf8_decode('ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),
            'SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy'
        );
    }

    public static function stringToUpperCamelCase(string $string): string
    {
        $string = self::clean($string);
        $string = is_string($result = preg_replace('#[^a-z0-9]+#i', ' ', $string)) ? $result : $string;
        $string = is_string($result = preg_replace('#[A-Z]+#', ' $0', $string)) ? $result : $string;
        $string = trim($string);
        $string = strtolower($string);
        $string = ucwords($string);

        return str_replace(' ', '', $string);
    }

    public static function camelCaseToLowerCaseUnderscored(string $string): string
    {
        preg_match_all(
            '#([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)#',
            self::clean($string),
            $matches
        );
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper((string)$match) ? strtolower((string)$match) : lcfirst((string)$match);
        }

        return implode('_', $ret);
    }

    public static function camelCaseToLowerCaseDashed(string $string): string
    {
        preg_match_all(
            '#([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)#',
            self::clean($string),
            $matches
        );
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper((string)$match) ? strtolower((string)$match) : lcfirst((string)$match);
        }

        return implode('-', $ret);
    }
}
