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

use App\Entity\Release;
use App\Utility\VersionUtility;
use InvalidArgumentException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use function sprintf;

final class DownloadController extends AbstractController
{
    public function __construct(
        private \App\Service\LegacyDataService $legacyDataService,
        private \App\Repository\ReleaseRepository $releases,
    ) {
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
            $redirectData = $this->getDownloadRedirect($requestedVersion, $requestedFormat);
        } catch (\Throwable) {
            throw $this->createNotFoundException();
        }

        return $this->redirect($redirectData['url']);
    }

    private function createEltsVersionResponse(Request $request, Release $release): Response
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

    /**
     * @throws InvalidArgumentException
     *
     * @return array{
     *   url: string,
     *   version: string,
     *   format: string
     * }
     *
     * @todo rewrite to not to longer use the legacy data service
     */
    private function getDownloadRedirect(string $versionName, string $format): array
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
                    return $this->getDownloadRedirect($fallbackPackage, $format);
                }

                return [
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

        throw new InvalidArgumentException(
            sprintf('No download found for version %s with format %s.', $versionName, $format),
            1_660_745_735
        );
    }
}
