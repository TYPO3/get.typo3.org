<?php
declare(strict_types=1);
namespace T3O\GetTypo3Org\Controller;

/*
 * This file is part of the TYPO3 project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Silex\Application;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Response;

class ReleaseNotes
{

    protected $releaseNotesDir = __DIR__ . '/../../Data/ReleaseNotes/';

    public function showAction(Application $app, string $folder = '', string $version = '')
    {
        $result = $this->getAllReleaseNoteNames();
        if ($folder === '' && $version === '') {
            $folder = key($result);
            $version = $result[$folder][0];
        }
        $current = @file_get_contents($this->releaseNotesDir . $folder . '/' . $version . '.html');
        $html = $app['twig']->render('ReleaseNotes/List.html.twig', ['result' => $result, 'current' => $current]);
        return new Response($html);
    }

    /**
     * @return array
     */
    private function getAllReleaseNoteNames(): array
    {
        $directories = Finder::create()->directories()->in($this->releaseNotesDir)->sortByName();
        $result = [];
        foreach ($directories as $directory) {
            $dir = $directory->getRealPath() . DIRECTORY_SEPARATOR;
            $files = Finder::create()->files()->in($dir)->name('*.html')->sortByName();
            $fileNames = [];
            foreach ($files as $file) {
                $fileNames[] = $file->getBasename('.html');
            }
            natsort($fileNames);
            $result[$directory->getBaseName()] = array_reverse($fileNames);
        }
        $result = array_reverse($result);
        return $result;
    }
}