<?php
declare(strict_types=1);

namespace T3O\GetTypo3Org\Service;

use Symfony\Component\Finder\Finder;

class ReleaseNotes
{
    protected $releaseNotesDir = __DIR__ . '/../../Data/ReleaseNotes/';


    /**
     * @return array
     */
    public function getAllReleaseNoteNames(): array
    {
        /** @var \Symfony\Component\HttpFoundation\File\File[] $directories */
        $directories = Finder::create()->directories()->in($this->releaseNotesDir)->sortByName();
        $result = [];
        foreach ($directories as $directory) {
            $dir = $directory->getRealPath() . DIRECTORY_SEPARATOR;
            /** @var \Symfony\Component\HttpFoundation\File\File[] $files */
            $files = Finder::create()->files()->in($dir)->name('*.html')->sortByName();
            $fileNames = [];
            foreach ($files as $file) {
                $fileNames[] = $file->getBasename('.html');
            }
            natsort($fileNames);
            $result[$directory->getBasename()] = array_reverse($fileNames);
        }
        $result = array_reverse($result);
        return $result;
    }
}