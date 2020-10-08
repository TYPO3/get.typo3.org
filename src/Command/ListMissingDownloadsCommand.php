<?php
declare(strict_types=1);

/*
 * This file is part of the package t3o/gettypo3org.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpClient\Exception\ClientException;
use Symfony\Component\HttpClient\Exception\RedirectionException;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Yaml\Yaml;

/**
 *
 */
class ListMissingDownloadsCommand extends Command
{
    private const FORMAT_TAR = 0;
    private const FORMAT_ZIP = 1;

    protected static $defaultName = 'app:download:missing:list';

    protected function configure()
    {
        $this
            // the short description shown while running "php bin/console list"
            ->setDescription('Creates a list of missing downloads with URLs to Sourceforge.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to create a list of missing downloads with URLs to Sourceforge if available there.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://get.typo3.org/json');

        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'

        if ($statusCode === 200 && $contentType === 'application/json') {
            //$content = $response->getContent();
            // $content = '{"id":521583, "name":"symfony-docs", ...}'
            $content = $response->toArray();
            // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]

            unset($content['latest_stable']);
            unset($content['latest_old_stable']);
            unset($content['latest_lts']);
            unset($content['latest_old_lts']);

            $output->writeln('Checking download URLs...');

            foreach ($content as $versionKey => $version) {
                foreach ($version['releases'] as $releaseKey => $release) {
                    $output->writeln($releaseKey . ':');

                    $output->write('- TAR: ');
                    $url = $this->getFixedUrl($release['url']['tar'], $releaseKey, self::FORMAT_TAR);
                    $output->writeln($url === true ? 'OK' : $url);

                    if ($url !== true) {
                        $result[$versionKey][$releaseKey]['tar'] = $url;
                    }

                    $output->write('- ZIP: ');
                    $url = $this->getFixedUrl($release['url']['zip'], $releaseKey, self::FORMAT_ZIP);
                    $output->writeln($url === true ? 'OK' : $url);

                    if ($url !== true) {
                        $result[$versionKey][$releaseKey]['zip'] = $url;
                    }
                }
            }

            $yaml = Yaml::dump($result, 4);
            file_put_contents('missing-downloads.yaml', $yaml);
        } else {
            throw new \Exception('Invalid response with status code ' . $statusCode . ' and content type ' . $contentType);
        }

        return 0;
    }

    private function getFixedUrl(string $url, string $release, int $format)
    {
        try {
            if ($this->checkRedirect($url)) {
                if ($this->checkUrl($url)) {
                    return true;
                } else {
                    $result = "https://downloads.sourceforge.net/project/typo3/TYPO3%20Source%20and%20Dummy/TYPO3%20$release/typo3_src-$release.";
                    $result .= $format === self::FORMAT_ZIP ? 'zip' : 'tar.gz';

                    if (!$this->checkUrl($result)) {
                        $result = 'failed (' . $result . ')';
                    }

                    return $result;
                }
            }

            return 'redirect failed for ' . $url;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    private function checkRedirect(string $url): bool
    {
        $client = HttpClient::create();

        try {
            $client->request('GET', $url, ['max_redirects' => 0]);

            throw new \Exception('something went wrong while calling ' . $url);
        } catch (RedirectionException $e) {
            return true;
        } catch (ClientException $e) {
            return false;
        }
    }

    private function checkUrl(string $url): bool
    {
        $client = HttpClient::create();
        $response = $client->request('HEAD', $url);
        $statusCode = $response->getStatusCode();

        return $statusCode === 200;
    }
}
