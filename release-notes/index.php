<?php


require_once __DIR__ . '/vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;
$app['locale'] = 'en';

$app->register(
    new Silex\Provider\TwigServiceProvider(),
    [
        'twig.path' => __DIR__ . '/Resources/Templates/',
        ''
    ]
);

$app['finder'] = function () {
    return new Symfony\Component\Finder\Finder();
};

// Routing
$app->match('/', '\\Psychomieze\\Gettypo3\\Controller\\ReleaseNotes::showAction')->bind('root');
$app->match('/{folder}/{version}', '\\Psychomieze\\Gettypo3\\Controller\\ReleaseNotes::showAction');

$app->run();