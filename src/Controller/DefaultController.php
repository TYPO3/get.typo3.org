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
use Symfony\Component\HttpFoundation\Response;

/**
 * Regular content and download pages
 */
class DefaultController
{

    protected $releaseNotesDir = __DIR__ . '/../../Data/ReleaseNotes/';
    protected $releasesJsonFile = __DIR__ . '/../../Data/releases.json';

    public function showAction(Application $app)
    {
        $releaseNotes = new \T3O\GetTypo3Org\Service\ReleaseNotes();
        $result = $releaseNotes->getAllReleaseNoteNames();
        $content = $app['twig']->render('default/show.html.twig', ['result' => $result]);
        return new Response($content);
    }

    /**
     * Outputs the JSON file
     * /json
     *
     * @param Application $app
     *
     * @return Response
     */
    public function jsonAction(Application $app)
    {
        $releasesFile = $this->releasesJsonFile;
        $maxAgeForReleases = filemtime($this->releasesJsonFile) + 3600 - time();

        $content = file_get_contents($releasesFile);

        $headers = [
            'Content-type' => 'application/json',
            'Access-Control-Allow-Origin' => '*',
            'Cache-control' => 'max-age=' . $maxAgeForReleases
	];
        return new Response($content, 200, $headers);
    }


    /**
     * Display release notes for a version
     *
     * @param Application $app
     * @param string $folder
     * @param string $version
     * @return Response
     */
    public function releaseNotesAction(Application $app, string $folder = '', string $version = ''): Response
    {
        $releaseNotes = new \T3O\GetTypo3Org\Service\ReleaseNotes();
        $result = $releaseNotes->getAllReleaseNoteNames();
        if ($folder === '' && $version === '') {
            $folder = key($result);
            $version = $result[$folder][0];
        }
        $current = @file_get_contents($this->releaseNotesDir . $folder . '/' . $version . '.html');
        $html = $app['twig']->render('default/release-notes.html.twig', ['version' => $version, 'result' => $result, 'current' => $current]);
        return new Response($html);
    }

    /**
     * @param Application $app
     * @param string $requestedVersion
     * @param string $requestedFormat
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function downloadAction(Application $app, $requestedVersion = 'stable', $requestedFormat = 'tar.gz')
    {
        $maxAgeForReleases = filemtime($this->releasesJsonFile) + 3600 - time();
        if ($requestedVersion === 'current') {
            $requestedVersion = 'stable';
        }

        // Get information about version to download
        $redirectData = $this->getSourceForgeRedirect($requestedVersion, $requestedFormat, $this->releasesJsonFile);
        if (empty($redirectData)) {
            $redirectData = $this->getFedextRedirect($requestedVersion, $requestedFormat, $this->releasesJsonFile);
        }

        if (empty($redirectData)) {
            $app->abort(404);
        }
        header('Cache-control: max-age=' . $maxAgeForReleases);
        return $app->redirect($redirectData['url']);
    }

    public function showVersionAction(Application $app, int $version)
    {
        $templateName = 'default/download.html.twig';
        $jsonPath = __DIR__ . '/../../Resources/data/' . $version . '.json';
        $jsonPath = str_replace(['/','\\'], DIRECTORY_SEPARATOR, $jsonPath);
        $jsonPath = realpath($jsonPath);
        $data = json_decode(file_get_contents($jsonPath), true);
        $content = $app['twig']->render($templateName, $data);
        return new Response($content);
    }

    /**
     * @param string $versionName
     * @param string $format
     * @param string $releasesFile
     *
     * @return array
     */
    private function getSourceForgeRedirect($versionName, $format, $releasesFile)
    {
        $packageFiles = [
            // slug (url part) => filename (without Extensions, url-encoded)
            'typo3_src' => 'typo3_src',
            'typo3_src_dummy' => 'typo3_src%2Bdummy',
            'dummy' => 'dummy',
            'introduction' => 'introductionpackage',
            'government' => 'governmentpackage',
            'blank' => 'blankpackage',
        ];

        $result = [];
        $releases = json_decode(file_get_contents($releasesFile));
        // defaults
        $package = 'typo3_src';

        /*
         * $versionName could be something like:
         * stable
         * dev
         * 4.5
         * 6.0.0
         * typo3_src-4.5
         * typo3_src-dev
         * dummy-4.5
         * dummy-6.0.0
         */
        // Detecting Package files, possible with version number
        foreach ($packageFiles as $slug => $filename) {

            // a Package Name without version number
            if ($versionName === $slug) { // simple
                $package = $filename;
                $versionName = 'stable';
                break;
            }
            // a Package Name with version number
            if (substr($versionName, 0, strlen($slug) + 1) === $slug . '-') {
                $package = $filename;
                $versionName = substr($versionName, strlen($slug) + 1);
                break;
            }
        }

        // named version detection
        if ($versionName === 'stable') {
            $versionName = $releases->latest_stable;
        } elseif ($versionName == 'dev') {
            die('"dev" version cannot be used anymore. Please stick to "stable"');
        }
        $versionParts = explode('.', $versionName);

        $isValidVersion = !empty($versionParts)
                          && ((int)$versionParts[0] >= 7 || count($versionParts) > 1);

        // Make sure we can retrieve a product release
        if ($isValidVersion && in_array($format, ['tar.gz', 'zip'])) {
            $branchName = (int)$versionParts[0] >= 7 ? $versionParts[0] : $versionParts[0] . '.' . $versionParts[1];
            if (!isset($releases->$branchName)) {
                return null;
            }
            $branch = $releases->$branchName;

            // $versionParts[2] can be the number '0' as a valid content. e.g. 6.0.0.
            if (isset($versionParts[2]) === false) {
                $versionName = $branch->latest;
            }

            $version = $branch->releases->$versionName->version;

            if ($version !== null) {
                // TYPO3 6.2 does not have some packages anymore
                $legacyPackages = ['introductionpackage', 'governmentpackage', 'blankpackage', 'dummy'];
                if (version_compare($version, '6.2.0', '>=') && in_array($package, $legacyPackages)) {
                    $flippedPackageFiles = array_flip($packageFiles);
                    $fallbackPackage = $flippedPackageFiles[$package] . '-6.1.7';
                    return $this->getSourceForgeRedirect($fallbackPackage, $format, $releasesFile);
                }
                $result = [
                    'url' => 'https://typo3.azureedge.net/typo3/' .
                             $version .
                             '/' .
                             $package .
                             '-' .
                             $version .
                             '.' .
                             $format,
                    'version' => $version,
                    'format' => $format,
                ];
            }
        }
        return $result;
    }

    /**
     * @param string $versionName
     * @param string $format
     * @param string $releasesFile
     *
     * @return array
     */
    private function getFedextRedirect($versionName, $format, $releasesFile)
    {
        $result = [];
        if ($versionName === 'bootstrap') {
            $releases = json_decode(file_get_contents($releasesFile));
            $result['url'] = sprintf('http://cdn.fedext.net/%spackage.%s', $versionName, $format);
            $result['format'] = $format;
            $result['version'] = $releases->latest_stable;
        }
        return $result;
    }
}
