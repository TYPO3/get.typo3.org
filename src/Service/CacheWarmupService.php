<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Service;

use App\Entity\MajorVersion;
use App\Entity\Release;
use Doctrine\ORM\EntityManagerInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ServerException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerInterface;
use Symfony\Component\Routing\RouterInterface;

class CacheWarmupService implements CacheWarmerInterface
{
    /**
     * @var \Symfony\Component\Routing\Router
     */
    private $router;

    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    private $baseUrl;

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

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
     * Warms up the cache.
     *
     * @param string $cacheDir The cache directory
     */
    public function warmUp($cacheDir): void
    {
        $routesWithoutArguments = [
            'root',
            'app_api_majorversion_getmajorreleases',
            'app_api_release_getrelease',
        ];
        foreach ($routesWithoutArguments as $route) {
            $url = $this->router->generate($route);
            $promise = $this->makeRequest($url);
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
    }

    /**
     * @param $url
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    private function makeRequest($url): ?\GuzzleHttp\Promise\PromiseInterface
    {
        try {
            $authUser = getenv('PREVIEW_AUTH_USER');
            $authPassword = getenv('PREVIEW_AUTH_PASSWORD');

            $authUser = 'preview';
            $authPassword = '77_KHB18sr7@';

            if ($authUser && $authPassword) {
                $options = ['auth' => [$authUser, $authPassword]];
            } else {
                $options = [];
            }
            $this->logger->info(\var_export($authUser, true));
            $this->logger->info(\var_export($authPassword, true));
            $this->logger->info(\var_export($options, true));

            $promise = $this->client->requestAsync('GET', $this->baseUrl . $url, $options);
            $promise->then(
                function ($response) use ($url) {
                    $this->logger->info('Warmed up ' . $url . ' with status ' . $response->getStatusCode());
                }
            );
        } catch (ServerException $exception) {
            $this->logger->warning($exception->getMessage(), $exception->getTrace());
        }
        return $promise ?? null;
    }

    private function warmUpActiveMajorVersions(): void
    {
        $majorVersionRepository = $this->entityManager->getRepository(MajorVersion::class);
        $versions = $majorVersionRepository->findAllActive();
        $routes = [
            'majorVersion_show',
        ];
        $this->warmUpLoopWithVersions($routes, $versions);
    }

    /**
     * @param $routes
     * @param $versions
     */
    private function warmUpLoopWithVersions($routes, $versions): void
    {
        $requestCounter = 0;
        foreach ($routes as $item) {
            foreach ($versions as $active) {
                $args = ['version' => $active->getVersion()];
                $url = $this->router->generate($item, $args);
                $promise = $this->makeRequest($url);
                $requestCounter++;
                if ($requestCounter % 5 === 0) {
                    // pause every five requests and wait for completion
                    if ($promise !== null) {
                        try {
                            $promise->wait();
                        } catch (\Exception $exception) {
                            $this->logger->warning($exception->getMessage(), $exception->getTrace());
                        }
                    }
                }
            }
        }
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
}
