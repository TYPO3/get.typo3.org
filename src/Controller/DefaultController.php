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

    protected $releaseNotesDir = __DIR__ . '/../../ReleaseNotes/';
    protected $releasesJsonFile = __DIR__ . '/../../Data/releases.json';

    public function showAction(Application $app)
    {
        $content = $app['twig']->render('default/show.html.twig', ['result' => $result]);
        return new Response($content);
    }

    /**
     * Outputs the JSON file
     * /json
     *
     * @param Application $app
     * @return Response
     */
    public function jsonAction(Application $app)
    {
        $releasesFile = $this->releasesJsonFile;
        $maxAgeForReleases = filemtime($this->releasesJsonFile) + 3600 - time();

        $content = file_get_contents($releasesFile);

        header('Content-type: application/json; charset=utf-8');
        header('Access-Control-Allow-Origin: *');
        header('Cache-control: max-age=' . $maxAgeForReleases);
        return new Response($content);
    }

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


    /**
     * @param string $versionName
     * @param string $format
     * @param string $releasesFile
     * @return array
     */
    private function getSourceForgeRedirect($versionName, $format, $releasesFile)
    {
        $packageFiles = array(
            // slug (url part) => filename (without Extensions, url-encoded)
            'typo3_src' => 'typo3_src',
            'typo3_src_dummy' => 'typo3_src%2Bdummy',
            'dummy' => 'dummy',
            'introduction' => 'introductionpackage',
            'government' => 'governmentpackage',
            'blank' => 'blankpackage'
        );

        $result = array();
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
        if ($isValidVersion && in_array($format, array('tar.gz', 'zip'))) {
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
                $legacyPackages = array('introductionpackage', 'governmentpackage', 'blankpackage', 'dummy');
                if (version_compare($version, '6.2.0', '>=') && in_array($package, $legacyPackages)) {
                    $flippedPackageFiles = array_flip($packageFiles);
                    $fallbackPackage = $flippedPackageFiles[$package] . '-6.1.7';
                    return $this->getSourceForgeRedirect($fallbackPackage, $format, $releasesFile);
                }
                $result = array(
                    'url' => 'https://typo3.azureedge.net/typo3/' . $version . '/' . $package . '-' . $version . '.' . $format,
                    'version' => $version,
                    'format' => $format
                );
            }
        }
        return $result;
    }

    /**
     * @param string $versionName
     * @param string $format
     * @param string $releasesFile
     * @return array
     */
    private function getFedextRedirect($versionName, $format, $releasesFile)
    {
        $result = array();
        if ($versionName === 'bootstrap') {
            $releases = json_decode(file_get_contents($releasesFile));
            $result['url'] = sprintf('http://cdn.fedext.net/%spackage.%s', $versionName, $format);
            $result['format'] = $format;
            $result['version'] = $releases->latest_stable;
        }
        return $result;
    }
}