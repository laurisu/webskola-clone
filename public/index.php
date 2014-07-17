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
    require_once '../controller/HomeController.php';

    $homePageController = new HomeControler();
    $homePage = $homePageController->landingPageAction();

    $app->render('pages/index.html.twig', array(
        'blogs' => $homePage,
        'active' => 'home'
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

    $active = 'textpage_';

    if ($textPage) {
        $active .= $textPage->getId();
    }

    $app->render('pages/textpage.html.twig', array(
        'text_page' => $textPage,
        'active' => $active
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


    $app->render('pages/slug.html.twig', array(
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

/*
 * ADMIN PANEL
 */
$app->get('/admin', function () use ($app) {    
    $app->render('admin/adminPanel.html.twig');
})->name('admin-panel');

$app->get('/admin/blog', function () use ($app) {  
    require_once '../controller/BlogController.php';
    
    $blogController = new BlogControler();
    $blogs = $blogController->adminListAction();
    
    $app->render('admin/blog/list.html.twig', array(
        'blogs' => $blogs
    ));
})->name('admin-blog-list');

$app->get('/admin/blog/add', function () use ($app) {  
    $app->render('admin/blog/add.html.twig', array(

        ));
})->name('admin-blog-add');

$app->post('/admin/blog/add', function () use ($app){
    require_once '../controller/BlogController.php';
    
    $allPostData = $app->request->post();
    
    $blogController = new BlogControler();
    $succes = $blogController->adminAddAction($allPostData);
    
    if ($succes) {
        $app->redirect($app->urlFor('admin-blog-list'));
    } else {
        $app->redirect($app->urlFor('admin-blog-add'));
    }
    
//    $app->redirect($app->urlFor('product_list'));
});

$app->get('/admin/blog/edit/:id', function ($id) use ($app) {  
    require_once '../controller/BlogController.php';
    
    $blogController = new BlogControler();
    $blog = $blogController->adminEditAction($id);
    
    $app->render('admin/blog/edit.html.twig', array(
        'blog' => $blog
        ));
})->name('admin-blog-edit');

$app->post('/admin/blog/edit/:id', function ($id) use ($app){
    require_once '../controller/BlogController.php';
    
    $allPostData = $app->request->post();
    
    $blogController = new BlogControler();
    $succes = $blogController->adminUpdateAction($id, $allPostData);
    
    if ($succes) {
        $app->redirect($app->urlFor('admin-blog-edit', array('id' => $id)));
    } else {
        $app->redirect($app->urlFor('admin-blog-update', array('id' => $id)));
    }
})->name('admin-blog-update');

$app->run();
