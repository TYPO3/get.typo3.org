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

namespace App\Service;

use Symfony\Component\Finder\Finder;

class ReleaseNotes
{
    protected string $releaseNotesDir = __DIR__ . '/../../Data/ReleaseNotes/';

    public function getAllReleaseNoteNames(): array
    {
        /** @var \Symfony\Component\HttpFoundation\File\File[] $directories */
        $directories = Finder::create()->directories()->in($this->releaseNotesDir)->sortByName();
        $result = [];
        foreach ($directories as $directory) {
            $dir = $directory->getRealPath() . DIRECTORY_SEPARATOR;
            /** @var \Symfony\Component\HttpFoundation\File\File[] $files */
            $files = Finder::create()->files()->in($dir)->name('*.html')->sortByName();
            $fileNames = [];
            foreach ($files as $file) {
                $fileNames[] = $file->getBasename('.html');
            }
            natsort($fileNames);
            $result[$directory->getBasename()] = array_reverse($fileNames);
        }
        return array_reverse($result);
    }
}
