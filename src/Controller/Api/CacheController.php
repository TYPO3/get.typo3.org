<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Controller\Api;

use App\Entity\MajorVersion;
use Nelmio\ApiDocBundle\Annotation\Security as DocSecurity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Swagger\Annotations as SWG;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * @Route("/v1/api/cache", methods={"DELETE"})
 * @IsGranted("ROLE_ADMIN")
 */
class CacheController extends AbstractController
{
    /**
     * Purge caches related to TYPO3 major version
     * @Route("/majorVersion/{version}")
     * @DocSecurity(name="Basic")
     * @SWG\Response(
     *     response=202,
     *     description="Successfully purged caches."
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Invalid version format."
     * )
     * @SWG\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @SWG\Tag(name="cache")
     *
     * @param string $version Specific TYPO3 Version to delete
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function purgeMajorRelease(string $version): JsonResponse
    {
        $this->checkMajorVersionFormat($version);
        $repo = $this->getDoctrine()->getRepository(MajorVersion::class);
        $major = $repo->findOneBy(['version' => $version]);
        if (null === $major) {
            throw new NotFoundHttpException('Version not found.');
        }
        $purgeUrls = $this->getPurgeUrlsForMajorVersion((float)$version);
        $filesystemCache = new \Symfony\Component\Cache\Adapter\FilesystemAdapter();
        if ($filesystemCache->hasItem('releases.json')) {
            $filesystemCache->delete('releases.json');
        }
        return (new JsonResponse(['locations' => $purgeUrls]))->setStatusCode(Response::HTTP_ACCEPTED);
    }

    /**
     * Purge caches related to single TYPO3 release
     * @Route("/release/{version}")
     * @DocSecurity(name="Basic")
     * @SWG\Response(
     *     response=202,
     *     description="Successfully purged caches."
     * )
     * @SWG\Response(
     *     response=400,
     *     description="Invalid version format"
     * )
     * @SWG\Response(
     *     response=401,
     *     description="Unauthorized."
     * )
     * @SWG\Response(
     *     response=404,
     *     description="Version not found."
     * )
     * @SWG\Tag(name="cache")
     *
     * @param string $version Specific TYPO3 Version to delete
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function purgeRelease(string $version): JsonResponse
    {
        $this->checkVersionFormat($version);
        $major = $this->getMajorVersionByReleaseVersion($version);
        $purgeUrls = $this->getPurgeUrlsForMajorVersion($major->getVersion());
        $releaseUrls = [
            $this->generateUrl('app_api_release_getrelease', [], UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl('release_show', ['version' => $version], UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl(
                'app_api_release_getcontentforversion',
                ['version' => $version],
                UrlGeneratorInterface::ABSOLUTE_URL
            ),
            $this->generateUrl(
                'release-notes-for-version',
                ['version' => $version],
                UrlGeneratorInterface::ABSOLUTE_URL
            ),
            $this->generateUrl('release-notes', ['version' => $version], UrlGeneratorInterface::ABSOLUTE_URL),
        ];
        $filesystemCache = new \Symfony\Component\Cache\Adapter\FilesystemAdapter();
        $filesystemCache->delete('releases.json');
        return (new JsonResponse(['locations' => array_merge($purgeUrls, $releaseUrls)]))->setStatusCode(Response::HTTP_ACCEPTED);
    }

    /**
     * @param float $version
     * @return array
     */
    private function getPurgeUrlsForMajorVersion(float $version): array
    {
        $args = ['version' => $version];
        $purgeUrls = [
            $this->generateUrl('root', [], UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl('release-notes', [], UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl('app_default_releasenotes', [], UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl('majorVersion_show', $args, UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl('app_api_majorversion_getmajorreleases', [], UrlGeneratorInterface::ABSOLUTE_URL),
            $this->generateUrl(
                'app_api_majorversion_releases_getreleasesbymajorversion',
                $args,
                UrlGeneratorInterface::ABSOLUTE_URL
            ),
            $this->generateUrl(
                'app_api_majorversion_releases_getlatestreleasebymajorversion',
                $args,
                UrlGeneratorInterface::ABSOLUTE_URL
            ),
            $this->generateUrl(
                'app_api_majorversion_releases_getlatestreleasecontentbymajorversion',
                $args,
                UrlGeneratorInterface::ABSOLUTE_URL
            ),
            $this->generateUrl('root', [], UrlGeneratorInterface::ABSOLUTE_URL),
        ];
        return $purgeUrls;
    }
}
