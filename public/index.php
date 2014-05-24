<?php

require '../vendor/autoload.php';
require_once '../vendor/j4mie/idiorm/idiorm.php';
require_once '../vendor/j4mie/idiorm/paris.php';

// SLIM Framework
$app = new \Slim\Slim(array(
    'debug' => true,
    'view' => new \Slim\Views\Twig(),
    'templates.path' => '../templates',
));

// TWIG
$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
);
$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

// ROUTES
$app->get('/', function () use ($app) {
    $app->render('base.html.twig');
})->name('home');

$app->run();