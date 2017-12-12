<?php

require_once __DIR__ . '/vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$tempDir = str_replace('\\', '/', __DIR__ . '/../../tmp/');
$pandoc = new \Pandoc\Pandoc(
    $tempDir,
    getenv('PANDOC_EXECUTABLE')
);

$finder = new \Symfony\Component\Finder\Finder();
$files = $finder->files()->in(__DIR__ . '/../../Data/ReleaseNotes/*/')->name('*.md');

foreach ($files as $file) {
    $content = $file->getContents();
    $html = $pandoc->convert($content, 'markdown', 'html');
    file_put_contents(dirname($file->getRealPath()) . '/' . $file->getBasename('.md') . '.html', $html);
}