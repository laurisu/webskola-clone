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
    
    $app->render('base.html.twig');
})->name('home');

/*
 * Text Page
 */
$app->get('/info', function () use ($app) {
    require_once '../controller/TextPageController.php';
    $app->render('base.html.twig');
})->name('textpage');

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

/* 
 * PROGRAMMAS
 */
$app->get('/study', function () use ($app) {
    require_once '../controller/ProgrammasController.php';
    $app->render('base.html.twig');
     
    $programmasControler = new ProgrammasControler();
    $programmas = $programmasControler->indexAction();
    var_dump($programmas);
    
    $app->render('base.html.twig', array(
        'programmas' => $programmas
    ));
})->name('study');

$app->run();
