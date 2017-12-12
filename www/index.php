<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;
$app['locale'] = 'en';

$app->register(
    new Silex\Provider\TwigServiceProvider(),
    [
        'twig.path' => __DIR__ . '/../Resources/view/',
        ''
    ]
);

$app['finder'] = function () {
    return new Symfony\Component\Finder\Finder();
};

// Routing
$app->match('/', '\\T3O\\GetTypo3Org\\Controller\\DefaultController::showAction')->bind('root');
$app->match('/json', '\\T3O\\GetTypo3Org\\Controller\\DefaultController::jsonAction');
$app->match('/{requestedVersion}', '\\T3O\\GetTypo3Org\\Controller\\DefaultController::downloadAction');
$app->match('/{requestedVersion}/{requestedFormat}', '\\T3O\\GetTypo3Org\\Controller\\DefaultController::downloadAction');
$app->match('/release-notes/', '\\T3O\\GetTypo3Org\\Controller\\ReleaseNotes::showAction');
$app->match('/release-notes/{folder}/{version}', '\\T3O\\GetTypo3Org\\Controller\\ReleaseNotes::showAction');
$app->error(function (\Exception $e, \Symfony\Component\HttpFoundation\Request $request, $code) {
    return new \Symfony\Component\HttpFoundation\Response('Sorry, the requested package was not found.');
});
$app->run();