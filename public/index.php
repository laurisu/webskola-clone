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
    
    $app->render('pages/index.html.twig', array(
        'active'=>'home'
    ));
})->name('home');

/*
 * Text Page
 */
$app->get('/info/:slug', function ($slug) use ($app) {
    require_once '../controller/TextPageController.php';
    
    $textPageController = new TextPageController();
    $textPage = $textPageController->indexAction($slug);
//    var_dump($textPage);
    
        $app->render('pages/textpage.html.twig', array(
            'text_page' => $textPage,
            'active' => 'textpage'
    ));
})->name('textpage');

/* 
 * BLOG
 */
$app->get('/blog', function() use ($app) {
    require_once '../controller/BlogController.php';
    
    $blogControler = new BlogControler();
    $blogs = $blogControler->indexAction();
    
    
    $app->render('pages/blog.html.twig', array(
        'blogs' => $blogs,
        'active' => 'blog'
    ));
})->name('blog');

/* 
 * PROGRAMMAS
 */
$app->get('/study', function () use ($app) {
    require_once '../controller/ProgrammasController.php';
     
    $programmasController = new ProgrammasController();
    $programmas = $programmasController->indexAction();
    /* var_dump($programmas); */
    
    $app->render('pages/programmas.html.twig', array(
        'programmas' => $programmas,
        'active' => 'study'
    ));
})->name('study');

$app->run();