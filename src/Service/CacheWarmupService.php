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

use App\Entity\MajorVersion;
use App\Entity\Release;
use App\Repository\MajorVersionRepository;
use Doctrine\ORM\EntityManagerInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface;
use Symfony\Component\Routing\RouterInterface;

class CacheWarmupService implements CacheWarmerInterface
{
    private RouterInterface $router;

    private EntityManagerInterface $entityManager;

    private Client $client;

    private string $baseUrl;

    private LoggerInterface $logger;

    public function __construct(RouterInterface $router, EntityManagerInterface $entityManager, LoggerInterface $logger, string $baseUrl)
    {
        $this->router = $router;
        $this->entityManager = $entityManager;
        $this->client = new Client();
        $this->logger = $logger;
        $this->baseUrl = $baseUrl;
    }

    /**
     * Checks whether this warmer is optional or not.
     * Optional warmers can be ignored on certain conditions.
     * A warmer should return true if the cache can be
     * generated incrementally and on-demand.
     *
     * @return bool true if the warmer is optional, false otherwise
     */
    public function isOptional()
    {
        return true;
    }

    /**
     * @return string[] A list of classes or files to preload on PHP 7.4+
     */
    public function warmUp(string $cacheDir): array
    {
        $routesWithoutArguments = [
            'root',
            'app_api_majorversion_getmajorreleases',
            'app_api_release_getrelease',
        ];
        foreach ($routesWithoutArguments as $route) {
            $promise = $this->makeRequest($this->router->generate($route));
        }
        if ($promise !== null) {
            $promise->wait();
        }
        $this->warmUpActiveMajorVersions();

        $this->warmUpMajorVersions();

        $repository = $this->entityManager->getRepository(Release::class);
        $versions = $repository->findAll();
        $routes = [
            'release_show',
            'app_api_release_getcontentforversion',
            'release-notes-for-version',
        ];
        $this->warmUpLoopWithVersions($routes, $versions);

        return [];
    }

    private function makeRequest(string $url): ?PromiseInterface
    {
        try {
            $promise = $this->client->requestAsync('GET', $this->baseUrl . $url);
            $promise->then(
                function ($response) use ($url): void {
                    $this->logger->info('Warmed up ' . $url . ' with status ' . $response->getStatusCode());
                }
            );
        } catch (ServerException $e) {
            $this->logger->warning($e->getMessage(), $e->getTrace());
        }
        return $promise ?? null;
    }

    private function warmUpActiveMajorVersions(): void
    {
        /** @var MajorVersionRepository $majorVersionRepository */
        $majorVersionRepository = $this->entityManager->getRepository(MajorVersion::class);
        $versions = $majorVersionRepository->findAllActive();
        $routes = [
            'majorVersion_show',
        ];
        $this->warmUpLoopWithVersions($routes, $versions);
    }

    private function warmUpMajorVersions(): void
    {
        $majorVersionRepository = $this->entityManager->getRepository(MajorVersion::class);
        $versions = $majorVersionRepository->findAll();
        $routes = [
            'app_api_majorversion_releases_getreleasesbymajorversion',
            'app_api_majorversion_releases_getlatestreleasebymajorversion',
            'app_api_majorversion_releases_getlatestreleasecontentbymajorversion',
        ];
        $this->warmUpLoopWithVersions($routes, $versions);
    }

    /**
     * @param string[] $routes
     * @param MajorVersion[] $versions
     */
    private function warmUpLoopWithVersions(array $routes, array $versions): void
    {
        $requestCounter = 0;
        foreach ($routes as $route) {
            foreach ($versions as $version) {
                $args = ['version' => $version->getVersion()];
                $url = $this->router->generate($route, $args);
                $promise = $this->makeRequest($url);
                ++$requestCounter;
                // pause every five requests and wait for completion
                if ($requestCounter % 5 !== 0) {
                    continue;
                }
                if (!$promise instanceof PromiseInterface) {
                    continue;
                }
                try {
                    $promise->wait();
                } catch (\Exception $e) {
                    $this->logger->warning($e->getMessage(), $e->getTrace());
                }
            }
        }
    }
}
