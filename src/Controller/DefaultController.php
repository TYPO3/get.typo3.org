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

namespace App\Controller;

use App\Entity\MajorVersion;
use App\Entity\Release;
use App\Service\ComposerPackagesService;
use App\Service\LegacyDataService;
use App\Utility\VersionUtility;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Regular content and download pages
 *
 * @Cache(maxage="3600", public=true)
 */
class DefaultController extends AbstractController
{
    protected string $releaseNotesDir  = __DIR__ . '/../../Data/ReleaseNotes/';
    protected string $releasesJsonFile = __DIR__ . '/../../Data/releases.json';
    private LegacyDataService $legacyDataService;
    private ComposerPackagesService $composerPackagesService;

    public function __construct(LegacyDataService $legacyDataService, ComposerPackagesService $composerPackagesService)
    {
        $this->legacyDataService = $legacyDataService;
        $this->composerPackagesService = $composerPackagesService;
    }

    /**
     * @Route("/", host="composer.%app.domain%", name="composer-root")
     */
    public function composerRoot(): Response
    {
        return $this->redirect('https://get.' . $this->getParameter('app.domain') . '/misc/composer/repository');
    }

    /**
     * @Route("/", methods={"GET"}, name="root")
     */
    public function show(Request $request): Response
    {
        $majorVersionRepository = $this->getDoctrine()->getRepository(MajorVersion::class);
        $communityVersions = $majorVersionRepository->findAllActiveCommunity();
        $eltsVersions = $majorVersionRepository->findAllActiveElts();

        $response = $this->render(
            'default/root.html.twig',
            [
                'communityVersions' => $communityVersions,
                'eltsVersions' => $eltsVersions
            ]
        );
        $response->setEtag(md5(serialize($communityVersions) . serialize($eltsVersions)));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * Outputs the JSON file
     * /json
     * Legacy end point
     * @Route("/json", methods={"GET"}, name="legacy-releases-json")
     */
    public function releaseJson(): Response
    {
        $content = $this->legacyDataService->getReleaseJson();
        $headers = [
            'Content-type'                => 'application/json',
            'Access-Control-Allow-Origin' => '*',
        ];
        return new Response($content, 200, $headers);
    }

    /**
     * Display release notes for a version
     *
     * @Route("/release-notes", methods={"GET"}, name="release-notes")
     * @Route("/release-notes/", methods={"GET"})
     * @Route("/release-notes/{version}", methods={"GET"}, name="release-notes-for-version")
     * @Route("/release-notes/{folder}/{version}", methods={"GET"}, name="legacy-release-notes-for-version")
     */
    public function releaseNotes(Request $request, string $version = ''): Response
    {
        $data = [];
        $version = str_replace('TYPO3_CMS_', '', $version);

        /** @var \App\Repository\MajorVersionRepository $majorVersionRepository */
        $majorVersionRepository = $this->getDoctrine()->getRepository(MajorVersion::class);
        $data['groupedVersions'] = $majorVersionRepository->findAllGroupedByMajor();

        if ($version === '') {
            $majorVersion = $majorVersionRepository->findOneBy([], ['version' => 'DESC']);
            return $this->redirectToRoute('release-notes-for-version', ['version' => $majorVersion->getVersion()]);
        }

        $majorVersionNumber = VersionUtility::extractMajorVersionNumber($version);
        $data['currentVersion'] = $majorVersionRepository->findOneBy(['version' => $majorVersionNumber]);
        if (!$data['currentVersion'] instanceof MajorVersion) {
            throw new NotFoundHttpException('No data for version ' . $version . ' found.');
        }

        if (VersionUtility::isValidSemverVersion($version)) {
            $releaseRepository = $this->getDoctrine()->getRepository(Release::class);
            $release = $releaseRepository->findOneBy(['version' => $version]);
        } else {
            $release = $data['currentVersion']->getLatestRelease();
        }
        if (!$release instanceof Release) {
            throw new NotFoundHttpException('No data for version ' . $version . ' found.');
        }

        $data['currentVersion'] = $data['currentVersion']->toArray();
        $data['currentVersion']['current'] = $release;

        $response = $this->render('default/release-notes.html.twig', $data);
        $response->setEtag(md5(serialize($data)));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * @Route("/download", methods={"GET"}, name="download")
     * @Route("/download/", methods={"GET"})
     * @Route("/version", methods={"GET"})
     * @Route("/version/", methods={"GET"})
     * @Route("/version/{version}", methods={"GET"}, name="version")
     */
    public function showVersion(Request $request, string $version = ''): Response
    {
        $data = [];
        $version = str_replace('TYPO3_CMS_', '', $version);

        /** @var \App\Repository\MajorVersionRepository $majorVersionRepository */
        $majorVersionRepository = $this->getDoctrine()->getRepository(MajorVersion::class);
        $data['activeVersions'] = $majorVersionRepository->findAllActive();

        if ($version === '') {
            $majorVersion = $majorVersionRepository->findOneBy([], ['version' => 'DESC']);
            return $this->redirectToRoute('version', ['version' => $majorVersion->getVersion()]);
        }

        $majorVersionNumber = VersionUtility::extractMajorVersionNumber($version);
        $data['currentVersion'] = $majorVersionRepository->findOneBy(['version' => $majorVersionNumber]);
        if (!$data['currentVersion'] instanceof MajorVersion) {
            throw new NotFoundHttpException('No data for version ' . $version . ' found.');
        }

        if (VersionUtility::isValidSemverVersion($version)) {
            $releaseRepository = $this->getDoctrine()->getRepository(Release::class);
            $release = $releaseRepository->findOneBy(['version' => $version]);
        } else {
            $release = $data['currentVersion']->getLatestRelease();
        }
        if (!$release instanceof Release) {
            throw new NotFoundHttpException('No data for version ' . $version . ' found.');
        }

        $data['currentVersion'] = $data['currentVersion']->toArray();
        $data['currentVersion']['current'] = $release;

        $response = $this->render('default/version.html.twig', $data);
        $response->setEtag(md5(serialize($data)));
        $response->isNotModified($request);
        return $response;
    }

    /**
     * @Route("/list/version/{version}", methods={"GET"}, name="list")
     */
    public function showVersionListByMajorVersion(float $version, Request $request): Response
    {
        $templateName = 'default/list.html.twig';
        /** @var \App\Repository\MajorVersionRepository $repository */
        $repository = $this->getDoctrine()->getRepository(MajorVersion::class);
        $data['activeVersions'] = $repository->findAllActive();
        $data['currentVersion'] = $repository->findOneBy(['version' => $version]);
        if ($data['currentVersion'] instanceof MajorVersion) {
            $data['currentVersion'] = $data['currentVersion']->toArray();
        }
        if (!$data['currentVersion']) {
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
     *     condition="context.getPathInfo() matches '#^\\/?((?:stable|current)|(?:\\d+)|(typo3_src|typo3_src_dummy|dummy|introduction|government|blank)?-?(\\d+\\.\\d+[\\.\\d+]?)(?:-?([0-9A-Za-z-]+(?:\\.[0-9A-Za-z-]+)*))?(?:\\+([0-9A-Za-z-]+(?:\\.[0-9A-Za-z-]+)*))?)\\/?(?:tar\\.gz|zip|tar\\.gz\\.sig|zip\\.sig)?$#'"
     * )
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function download(Request $request, string $requestedVersion = 'stable', string $requestedFormat = 'tar.gz')
    {
        if ($requestedVersion === 'current') {
            $requestedVersion = 'stable';
        }

        if (VersionUtility::isValidSemverVersion($requestedVersion)) {
            $release = $this->getDoctrine()->getRepository(Release::class)
                ->findOneBy(['version' => $requestedVersion]);
            if ($release !== null && $release->isElts()) {
                return $this->createEltsVersionResponse($request, $release);
            }
        }

        // Get information about version to download
        $redirectData = $this->getSourceForgeRedirect($requestedVersion, $requestedFormat);

        if (!isset($redirectData['url'])) {
            throw $this->createNotFoundException();
        }

        return $this->redirect($redirectData['url']);
    }

    /**
     * @Route("/misc/composer", methods={"GET"}, name="composer")
     */
    public function composer(): Response
    {
        $templateName = 'default/composer.html.twig';

        return $this->render($templateName);
    }

    /**
     * @Route("/misc/composer/helper", methods={"GET", "POST"}, name="composer-helper")
     */
    public function composerHelper(): Response
    {
        $formBuilder = $this->createFormBuilder();
        $templateName = 'default/composer-helper.html.twig';
        $form = $this->composerPackagesService->buildForm($formBuilder);

        return $this->render(
            $templateName,
            [
                'form'    => $form->createView(),
                'bundles' => $this->composerPackagesService->getBundles()
            ]
        );
    }

    /**
     * @Route("/ajax/composer/helper/generate", methods={"POST"}, name="ajax-composer-helper-generate")
     */
    public function composerHelperAjax(Request $request): JsonResponse
    {
        $formBuilder = $this->createFormBuilder();

        $form = $this->composerPackagesService->buildForm($formBuilder);
        $formData = '';
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            $keys = preg_replace('#^(typo3)-#', '$1/', \array_keys($formData));
            $formData = array_combine($keys, $formData);
            $formData = $this->composerPackagesService->cleanPackagesForVersions($formData);
        }

        return new JsonResponse(['status' => $formData]);
    }

    /**
     * @Route("/misc/composer/repository", methods={"GET"}, name="composer-repository")
     */
    public function composerRepository(): Response
    {
        $templateName = 'default/composer-repository.html.twig';

        return $this->render($templateName);
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
            'typo3_src'       => 'typo3_src',
            'typo3_src_dummy' => 'typo3_src%2Bdummy',
            'dummy'           => 'dummy',
            'introduction'    => 'introductionpackage',
            'government'      => 'governmentpackage',
            'blank'           => 'blankpackage',
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
            if (!isset($versionParts[2])) {
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
                    'url'     => 'https://typo3.azureedge.net/typo3/' .
                                 $version .
                                 '/' .
                                 $package .
                                 '-' .
                                 $version .
                                 '.' .
                                 $format,
                    'version' => $version,
                    'format'  => $format,
                ];
            }
        }
        return $result;
    }

    protected function createEltsVersionResponse(Request $request, Release $release): Response
    {
        $statusCode = Response::HTTP_PAYMENT_REQUIRED;
        $statusMessage = 'ELTS version requires a valid subscription. For more information visit: https://typo3.com/elts';
        $acceptHeader = $request->headers->get('Accept');
        $response = new Response();
        if (strpos($acceptHeader, 'application/json') !== false) {
            $response->setContent(json_encode([
                'status' => $statusCode,
                'message' => $statusMessage
            ]));
            $response->headers->set('Content-Type', 'application/json');
        } elseif (strpos($acceptHeader, 'text/html') !== false) {
            $response = $this->render(
                'default/elts.html.twig',
                [
                    'release' => $release,
                ]
            );
        } else {
            $response->setContent(chr(10) . $statusMessage . chr(10) . chr(10));
        }
        $response->setStatusCode($statusCode);
        return $response;
    }

    protected function parseLink(string $text): string
    {
        $url = '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i';
        return preg_replace($url, '<a href="$0" target="_blank" rel="noreferrer">$0</a>', $text);
    }
}
