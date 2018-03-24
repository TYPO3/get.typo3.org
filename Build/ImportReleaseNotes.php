<?php
require_once (__DIR__ . '/../vendor/autoload.php');
/** @var \Symfony\Component\HttpFoundation\File\File[] $directories */

use Symfony\Component\Finder\Finder;

$db = new SQLite3(__DIR__ . '/../var/gettr.db');

$directories = Finder::create()->directories()->in(__DIR__ . '/Data/ReleaseNotes')->sortByName();
$result = [];
foreach ($directories as $directory) {
    $dir = $directory->getRealPath() . DIRECTORY_SEPARATOR;
    /** @var \Symfony\Component\HttpFoundation\File\File[] $files */
    $files = Finder::create()->files()->in($dir)->name('*.md')->sortByName();
    $fileNames = [];
    foreach ($files as $file) {
        $content = file_get_contents($file->getPath() . $file->getFilename());
        $fullVersion = str_replace(['TYPO3_CMS_', 'TYPO3_'], '', $file->getBasename('.md'));
        $stmt = $db->prepare('UPDATE "release" SET release_notes_legacy_content = :content WHERE version = :version');
        $stmt->bindValue(':content', $content);
        $stmt->bindValue(':version', $fullVersion);
        $stmt->execute();
    }

}
