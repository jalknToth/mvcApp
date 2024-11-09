<?php

require_once __DIR__. '/../vendor/autoload.php';

use controllers\siteController;
use core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');
$app->router->get('/contact', [siteController::class, 'contact']);
$app->router->post('/contact', [siteController::class,'handleContact']);

$app->run();