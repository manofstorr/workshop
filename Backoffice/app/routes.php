<?php

// Home page
$app->get('/', function () use ($app) {
    $logs = $app['dao.log']->findAll();

    ob_start();             // start buffering HTML output
    require '../views/home.html.php';
    $view = ob_get_clean(); // assign HTML output to $view
    return $view;
});

/*
$app->get('/', "Backoffice\Controller\HomeController::indexAction")
    ->bind('home');
*/