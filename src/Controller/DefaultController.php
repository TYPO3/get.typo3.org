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
use App\Utility\VersionUtility;
use InvalidArgumentException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Regular content and download pages
 */
class DefaultController extends AbstractController
{
    public function __construct(
        private readonly string $appDomain,
        private \App\Service\LegacyDataService $legacyDataService,
        private \App\Service\ComposerPackagesService $composerPackagesService,
        private \App\Repository\MajorVersionRepository $majorVersions,
        private \App\Repository\ReleaseRepository $releases,
    ) {
    }

    #[Route(path: '/', host: 'composer.%app.domain%', name: 'composer-root')]
    public function composerRoot(): RedirectResponse
    {
        return $this->redirect(sprintf('https://get.%s/misc/composer/repository', $this->appDomain));
    }

    #[Route(path: '/', methods: ['GET'], name: 'root')]
    public function show(Request $request): Response
    {
        $communityVersions = $this->majorVersions->findAllActiveCommunity();
        $eltsVersions = $this->majorVersions->findAllActiveElts();
        $response = $this->render(
            'default/root.html.twig',
            [
                'communityVersions' => $communityVersions,
                'eltsVersions' => $eltsVersions,
            ]
        );
        $response->setEtag(md5(serialize($communityVersions) . serialize($eltsVersions)));
        $response->isNotModified($request);
        return $response;
    }

    #[Route(path: ['/api', '/v1/api/doc'])]
    public function apiDoc(): RedirectResponse
    {
        return $this->redirectToRoute('app.swagger_ui');
    }

    /**
     * Display release notes for a version
     */
    #[Route(path: '/release-notes', methods: ['GET'], name: 'release-notes')]
    #[Route(path: '/release-notes/', methods: ['GET'])]
    #[Route(path: '/release-notes/{version}', methods: ['GET'], name: 'release-notes-for-version')]
    #[Route(path: '/release-notes/{folder}/{version}', methods: ['GET'], name: 'legacy-release-notes-for-version')]
    public function releaseNotes(Request $request, string $version = ''): Response
    {
        $data = [];
        $response = $this->getVersionData('release-notes-for-version', $version, $data);
        if ($response !== null) {
            return $response;
        }

        $data['groupedVersions'] = $this->majorVersions->findAllGroupedByMajor();
        $response = $this->render('default/release-notes.html.twig', $data);
        $response->setEtag(md5(serialize($data)));
        $response->isNotModified($request);
        return $response;
    }

    #[Route(path: '/download', methods: ['GET'], name: 'download')]
    #[Route(path: '/download/', methods: ['GET'])]
    #[Route(path: '/version', methods: ['GET'])]
    #[Route(path: '/version/', methods: ['GET'])]
    #[Route(path: '/version/{version}', methods: ['GET'], name: 'version')]
    public function showVersion(Request $request, string $version = ''): Response
    {
        $data = [];
        $response = $this->getVersionData('version', $version, $data);
        if ($response !== null) {
            return $response;
        }

        $data['activeVersions'] = $this->majorVersions->findAllActive();
        $response = $this->render('default/version.html.twig', $data);
        $response->setEtag(md5(serialize($data)));
        $response->isNotModified($request);
        return $response;
    }

    #[Route(path: '/list/version/{version}', methods: ['GET'], name: 'list')]
    public function showVersionListByMajorVersion(string $version, Request $request): Response
    {
        $templateName = 'default/list.html.twig';
        $data = [];
        $data['activeVersions'] = $this->majorVersions->findAllActive();
        $data['currentVersion'] = $this->majorVersions->findVersion($version);
        if ($data['currentVersion'] instanceof MajorVersion) {
            $data['currentVersion'] = $data['currentVersion']->toArray();
        }

        if (!is_array($data['currentVersion'])) {
            throw new NotFoundHttpException('No data for version ' . $version . ' found.');
        }

        $response = $this->render($templateName, $data);
        $response->setEtag(md5(serialize($data)));
        $response->isNotModified($request);
        return $response;
    }

    #[Route(path: '/{requestedVersion}', methods: ['GET'], name: 'specificversion')]
    #[Route(
        path: '/{requestedVersion}/{requestedFormat}',
        methods: ['GET'],
        name: 'versionandformat',
        condition: "context.getPathInfo() matches '#^\\\\/?((?:stable|current)|(?:\\\\d+)|(typo3_src|typo3_src_dummy|dummy|introduction|government|blank)?-?(\\\\d+\\\\.\\\\d+[\\\\.\\\\d+]?)(?:-?([0-9A-Za-z-]+(?:\\\\.[0-9A-Za-z-]+)*))?(?:\\\\+([0-9A-Za-z-]+(?:\\\\.[0-9A-Za-z-]+)*))?)\\\\/?(?:tar\\\\.gz|zip|tar\\\\.gz\\\\.sig|zip\\\\.sig)?\$#'"
    )]
    public function download(
        Request $request,
        string $requestedVersion = 'stable',
        string $requestedFormat = 'tar.gz'
    ): Response {
        if ($requestedVersion === 'current') {
            $requestedVersion = 'stable';
        }

        if (VersionUtility::isValidSemverVersion($requestedVersion)) {
            $release = $this->releases->findVersion($requestedVersion);
            if ($release instanceof Release && $release->isElts()) {
                return $this->createEltsVersionResponse($request, $release);
            }
        }

        // Get information about version to download
        try {
            $redirectData = $this->getSourceForgeRedirect($requestedVersion, $requestedFormat);
        } catch (\Throwable) {
            throw $this->createNotFoundException();
        }

        if (!isset($redirectData['url']) || !is_string($redirectData['url'])) {
            throw $this->createNotFoundException();
        }

        return $this->redirect($redirectData['url']);
    }

    #[Route(path: '/misc/composer', methods: ['GET'], name: 'composer')]
    public function composer(): Response
    {
        $templateName = 'default/composer.html.twig';
        return $this->render($templateName);
    }

    #[Route(path: '/misc/composer/helper', methods: ['GET', 'POST'], name: 'composer-helper')]
    public function composerHelper(): Response
    {
        $formBuilder = $this->createFormBuilder();
        $templateName = 'default/composer-helper.html.twig';
        $form = $this->composerPackagesService->buildForm($formBuilder);
        return $this->render(
            $templateName,
            [
                'form'    => $form->createView(),
                'bundles' => $this->composerPackagesService->getBundles(),
            ]
        );
    }

    #[Route(path: '/ajax/composer/helper/generate', methods: ['POST'], name: 'ajax-composer-helper-generate')]
    public function composerHelperAjax(Request $request): JsonResponse
    {
        $formBuilder = $this->createFormBuilder();
        $form = $this->composerPackagesService->buildForm($formBuilder);
        $formData = '';
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $formData = $form->getData();
            if (!is_array($formData)) {
                throw new BadRequestHttpException('Missing or invalid request body.');
            }

            $keys = preg_replace('#^(typo3)-#', '$1/', \array_keys($formData));
            if (!is_array($keys)) {
                throw new BadRequestHttpException('Missing or invalid request body.');
            }

            $formData = array_combine($keys, $formData);
            $formData = $this->composerPackagesService->cleanPackagesForVersions($formData);
        }

        return new JsonResponse(['status' => $formData]);
    }

    #[Route(path: '/misc/composer/repository', methods: ['GET'], name: 'composer-repository')]
    public function composerRepository(): Response
    {
        $templateName = 'default/composer-repository.html.twig';
        return $this->render($templateName);
    }

    protected function createEltsVersionResponse(Request $request, Release $release): Response
    {
        $statusCode = Response::HTTP_PAYMENT_REQUIRED;
        $statusMessage =
            'ELTS version requires a valid subscription. For more information visit: https://typo3.com/elts';
        $acceptHeader = $request->headers->get('Accept') ?? '';
        $response = new Response();

        $json = json_encode([
            'status' => $statusCode,
            'message' => $statusMessage,
        ]);

        if (str_contains($acceptHeader, 'application/json') && $json !== false) {
            $response->setContent($json);
            $response->headers->set('Content-Type', 'application/json');
        } elseif (str_contains($acceptHeader, 'text/html')) {
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

    protected function parseLink(string $text): ?string
    {
        $url = '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i';
        return preg_replace($url, '<a href="$0" target="_blank" rel="noreferrer">$0</a>', $text);
    }

    /**
     * @param array<string, mixed> $data
     */
    private function getVersionData(string $redirectRoute, string $version, array &$data): ?Response
    {
        $version = str_replace('TYPO3_CMS_', '', $version);

        if ($version === '') {
            $majorVersion = $this->majorVersions->findLatestWithReleases();

            if (!$majorVersion instanceof MajorVersion) {
                throw new NotFoundHttpException('No release found.');
            }

            return $this->redirectToRoute($redirectRoute, ['version' => $majorVersion->getVersion()]);
        }

        $data['currentVersion'] = $this->majorVersions
            ->findVersion(VersionUtility::extractMajorVersionNumber($version));

        if (!$data['currentVersion'] instanceof MajorVersion) {
            throw new NotFoundHttpException('No data for version ' . $version . ' found.');
        }

        if (VersionUtility::isValidSemverVersion($version)) {
            $release = $this->releases->findVersion($version);
        } else {
            $release = $data['currentVersion']->getLatestRelease();
        }

        if (!$release instanceof Release) {
            throw new NotFoundHttpException('No data for version ' . $version . ' found.');
        }

        $data['currentVersion'] = $data['currentVersion']->toArray();
        $data['currentVersion']['current'] = $release;

        return null;
    }

    /**
     * @return array<string, mixed>
     * @throws InvalidArgumentException
     * @todo rewrite to not to longer use the legacy data service
     * @todo return valid link or throw
     */
    private function getSourceForgeRedirect(string $versionName, string $format): array
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
        $releases = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
        if (!is_array($releases)) {
            throw new InvalidArgumentException('Error while decoding the release json.', 1_638_038_670);
        }

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
            if (!isset($releases['latest_stable'])) {
                throw new InvalidArgumentException('Invalid release json.', 1_638_038_671);
            }

            $versionName = $releases['latest_stable'];
        } elseif ($versionName === 'dev') {
            die('"dev" version cannot be used anymore. Please stick to "stable"');
        }

        $versionParts = explode('.', (string)$versionName);

        $isValidVersion = ((int)$versionParts[0] >= 7 || count($versionParts) > 1);

        // Make sure we can retrieve a product release
        if ($isValidVersion && in_array($format, ['tar.gz', 'zip', 'tar.gz.sig', 'zip.sig'], true)) {
            $branchName = (int)$versionParts[0] >= 7 ? $versionParts[0] : $versionParts[0] . '.' . $versionParts[1];
            if (!isset($releases[$branchName])) {
                throw new InvalidArgumentException('Invalid release json.', 1_638_038_672);
            }

            $branch = $releases[$branchName];

            // $versionParts[2] can be the number '0' as a valid content. e.g. 6.0.0.
            if (!isset($versionParts[2])) {
                $versionName = $branch['latest'];
            }

            $version = $branch['releases'][$versionName]['version'] ?? null;

            if ($version !== null) {
                // TYPO3 6.2 does not have some packages anymore
                $legacyPackages = ['introductionpackage', 'governmentpackage', 'blankpackage', 'dummy'];
                if (version_compare($version, '6.2.0', '>=') && in_array($package, $legacyPackages, true)) {
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
}
