<?php
declare(strict_types=1);

namespace App\Controller;

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

use App\Entity\MajorVersion;
use App\Entity\Release;
use App\Service\LegacyDataService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Regular content and download pages
 */
class DefaultController extends Controller
{

    protected $releaseNotesDir = __DIR__ . '/../../Data/ReleaseNotes/';
    protected $releasesJsonFile = __DIR__ . '/../../Data/releases.json';
    /**
     * @var \App\Service\LegacyDataService
     */
    private $legacyDataService;

    public function __construct(LegacyDataService $legacyDataService)
    {
        $this->legacyDataService = $legacyDataService;
    }

    /**
     * @Route("/", methods={"GET"}, name="root")
     * @Cache(expires="tomorrow", public=true)
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(Request $request)
    {
        $majorVersionRepository = $this->getDoctrine()->getRepository(MajorVersion::class);
        $majorVersions = $majorVersionRepository->findAllActive();
        $response = $this->render('default/show.html.twig', ['majorVersions' => $majorVersions]);
        $response->setEtag(md5(serialize($majorVersions)));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * Outputs the JSON file
     * /json
     * Legacy end point
     * @Route("/json", methods={"GET"})
     *
     * @return Response
     */
    public function releaseJson(): Response
    {
        $maxAgeForReleases = 3600;
        $content = $this->legacyDataService->getReleaseJson();
        $headers = [
            'Content-type' => 'application/json',
            'Access-Control-Allow-Origin' => '*',
            'Cache-control' => 'max-age=' . $maxAgeForReleases,
        ];
        return new Response($content, 200, $headers);
    }


    /**
     * Display release notes for a version
     * @Cache(expires="tomorrow", public=true)
     * @Route("/release-notes", methods={"GET"}, name="release-notes")
     * @Route("/release-notes/", methods={"GET"})
     * @Route("/release-notes/{version}", methods={"GET"}, name="release-notes-for-version")
     * @Route("/release-notes/{folder}/{version}", methods={"GET"}, name="legacy-release-notes-for-version")
     *
     * @param string $version
     * @return Response
     */
    public function releaseNotes(string $version = '', Request $request): Response
    {
        $version = str_replace('TYPO3_CMS_', '', $version);

        /** @var \App\Repository\MajorVersionRepository $mVersionRepo */
        $mVersionRepo = $this->getDoctrine()->getRepository(MajorVersion::class);
        $majors = $mVersionRepo->findAllGroupedByMajor();

        $releaseRepository = $this->getDoctrine()->getRepository(Release::class);
        if ($version === '') {
            $release = $releaseRepository->findOneBy([], ['version' => 'DESC']);
            return $this->redirectToRoute('release-notes-for-version', ['version' => $release->getVersion()]);
        } else {
            $release = $releaseRepository->findOneBy(['version' => $version]);
        }
        $data = ['result' => $majors, 'current' => $release];
        $response = $this->render('default/release-notes.html.twig', $data);
        $response->setEtag(md5(serialize($data)));
        $response->isNotModified($request);
        return $response;
    }


    /**
     * @Route("/version/{version}", methods={"GET"}, name="version")
     * @Cache(expires="tomorrow", public=true)
     * @param int $version
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showVersion(int $version, Request $request): Response
    {
        $templateName = 'default/download.html.twig';
        /** @var \App\Repository\MajorVersionRepository $repository */
        $repository = $this->getDoctrine()->getRepository(MajorVersion::class);
        $data = $repository->findOneBy(['version' => $version]);
        if ($data instanceof MajorVersion) {
            $latestRelease = $data->getLatestRelease();
            $data = $data->toArray();
            $data['current'] = $latestRelease;
        }
        if (!$data) {
            throw new NotFoundHttpException('No data for version ' . $version . ' found.');
        }
        $response = $this->render($templateName, $data);
        $response->setEtag(md5(serialize($data)));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * @Route("/{requestedVersion}", methods={"GET"}, name="specificversion")
     * @Route("/{requestedVersion}/{requestedFormat}",
     *     methods={"GET"},
     *     name="versionandformat",
     *     condition="context.getPathInfo() matches '#^\\/?((?:stable|current)|(?:\\d+)|(typo3_src|typo3_src_dummy|dummy|introduction|government|blank)?-?(\\d+\\.\\d+\\.\\d+)(?:-([0-9A-Za-z-]+(?:\\.[0-9A-Za-z-]+)*))?(?:\\+([0-9A-Za-z-]+(?:\\.[0-9A-Za-z-]+)*))?)\\/?(?:tar\\.gz|zip|tar\\.gz\\.sig|zip\\.sig)?$#'"
     * )
     * @param string $requestedVersion
     * @param string $requestedFormat
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function download($requestedVersion = 'stable', $requestedFormat = 'tar.gz')
    {
        if ($requestedVersion === 'current') {
            $requestedVersion = 'stable';
        }

        // Get information about version to download
        $redirectData = $this->getSourceForgeRedirect($requestedVersion, $requestedFormat);
        if (empty($redirectData)) {
            $redirectData = $this->getFedextRedirect($requestedVersion, $requestedFormat);
        }

        if (!isset($redirectData['url'])) {
            throw $this->createNotFoundException();
        }
        header('Cache-control: max-age=3600');
        return $this->redirect($redirectData['url']);
    }


    /**
     * @param string $versionName
     * @param string $format
     * @return array
     */
    private function getSourceForgeRedirect($versionName, $format)
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
        $content = $this->legacyDataService->getReleaseJson();
        $releases = json_decode($content);
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
        } elseif ($versionName === 'dev') {
            die('"dev" version cannot be used anymore. Please stick to "stable"');
        }
        $versionParts = explode('.', $versionName);

        $isValidVersion = !empty($versionParts)
                          && ((int)$versionParts[0] >= 7 || count($versionParts) > 1);

        // Make sure we can retrieve a product release
        if ($isValidVersion && in_array($format, ['tar.gz', 'zip', 'tar.gz.sig', 'zip.sig'])) {
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
                    return $this->getSourceForgeRedirect($fallbackPackage, $format);
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
     * @return array
     */
    private function getFedextRedirect($versionName, $format)
    {
        $result = [];
        if ($versionName === 'bootstrap') {
            $releases = json_decode($this->legacyDataService->getReleaseJson());
            $result['url'] = sprintf('http://cdn.fedext.net/%spackage.%s', $versionName, $format);
            $result['format'] = $format;
            $result['version'] = $releases->latest_stable;
        }
        return $result;
    }
}
