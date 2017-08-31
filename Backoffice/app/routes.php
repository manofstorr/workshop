<?php

// Home page
$app->get('/', function () use ($app) {
    $logs = $app['dao.log']->findAll();
    return $app['twig']->render('index.html.twig', array('logs' => $logs));
});

/*
$app->get('/', "Backoffice\Controller\HomeController::indexAction")
    ->bind('home');
*/