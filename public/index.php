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
    
    $app->render('base.html.twig', array(
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
    $blogs = $blogControler->listAction();
    
    
    $app->render('pages/blogList.html.twig', array(
        'blogs' => $blogs,
        'active' => 'blog'
    ));
})->name('blog');

$app->get('/blog/:slug', function($slug) use ($app) {
    require_once '../controller/BlogController.php';
    
    $blogControler = new BlogControler();
    $blogs = $blogControler->indexAction($slug);
    
    
    $app->render('pages/blogList.html.twig', array(
        'blogs' => $blogs,
        'active' => 'blog'
    ));
})->name('blog-post');

/* 
 * PROGRAMMAS
 */
$app->get('/study/:slug', function ($slug) use ($app) {
    require_once '../controller/ProgrammasController.php';
    $programmasController = new ProgrammasController();
    $programma = $programmasController->indexAction($slug);
    
    $app->render('pages/programma.html.twig', array(
        'programma' => $programma,
        'active' => 'study'
    ));
})->name('study');


$app->get('/study/', function () use ($app) {
    require_once '../controller/ProgrammasController.php';
    $programmasController = new ProgrammasController();
    $programmas = $programmasController->listAction();
    
    $app->render('pages/programmas.html.twig', array(
        'programmas' => $programmas,
        'active' => 'study-list'
    ));
})->name('study-list');

$app->run();