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

    public function showAction(Application $app, string $folder = '', string $version = ''): Response
    {
        $releaseNotes = new \T3O\GetTypo3Org\Service\ReleaseNotes();
        $result = $releaseNotes->getAllReleaseNoteNames();
        if ($folder === '' && $version === '') {
            $folder = key($result);
            $version = $result[$folder][0];
        }
        $current = @file_get_contents($this->releaseNotesDir . $folder . '/' . $version . '.html');
        $html = $app['twig']->render('ReleaseNotes/List.html.twig', ['result' => $result, 'current' => $current]);
        return new Response($html);
    }

}