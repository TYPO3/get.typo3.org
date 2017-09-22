<?php
declare(strict_types=1);
namespace Psychomieze\Gettypo3\Controller;


use Silex\Application;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Response;

class ReleaseNotes
{

    protected $releaseNotesDir = __DIR__ . '/../../ReleaseNotes/';

    public function showAction(Application $app, string $folder = '', string $version = '')
    {
        $result = $this->getAllReleaseNoteNames();
        if ($folder === '' && $version === '') {
            $folder = key($result);
            $version = $result[$folder][0];
        }
        $html = $app['twig']->render('ReleaseNotes/List.html.twig', ['result' => $result]);
        $html .= @file_get_contents($this->releaseNotesDir . $folder . '/' . $version . '.html');
        $template = $this->getTemplate();
        $result = str_replace('###CONTENT###', $html, $template);
        $result = $this->fixHtml($result);
        return new Response($result);
    }

    /**
     * @param $result
     *
     * @return string
     */
    private function fixHtml($result): string
    {
        $result = str_replace('../', '../../LandingPage/', $result);
        $result = str_replace('release-notes/typo3-62-release-notes/index.html', '/release-notes/', $result);
        return $result;
    }

    /**
     * @return array
     */
    private function getAllReleaseNoteNames(): array
    {
        $directories = Finder::create()->directories()->in($this->releaseNotesDir)->sortByName();
        $result = [];
        foreach ($directories as $directory) {
            $dir = $directory->getRealPath() . DIRECTORY_SEPARATOR;
            $files = Finder::create()->files()->in($dir)->name('*.html')->sortByName();
            $fileNames = [];
            foreach ($files as $file) {
                $fileNames[] = $file->getBasename('.html');
            }
            natsort($fileNames);
            $result[$directory->getBaseName()] = array_reverse($fileNames);
        }
        $result = array_reverse($result);
        return $result;
    }

    private function getTemplate()
    {
        $template = __DIR__ . '/../../../LandingPage/template.html';
        return file_get_contents($template);
    }
}