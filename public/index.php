<?php

require '../vendor/autoload.php';
require_once '../config/config.php';

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
    require_once '../controller/IndexController.php';
    $app->render('base.html.twig');
})->name('home');

/* 
 * BLOG
 */

$app->get('/blog', function() use ($app) {
    require_once '../controller/BlogController.php';
    
    $blogControler = new BlogControler();
    $blogs = $blogControler->indexAction();
    var_dump($blogs);
    
    $app->render('base.html.twig', array(
        'blogs' => $blogs
    ));
})->name('blog');

$app->run();