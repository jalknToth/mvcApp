<?php

require_once __DIR__. '/../vendor/autoload.php';

use controllers\AuthController;
use controllers\siteController;
use core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [siteController::class, 'home']);
$app->router->get('/contact', [siteController::class, 'contact']);
$app->router->post('/contact', [siteController::class,'handleContact']);

$app->router->get('/login', [AuthController::class,'login']);
$app->router->post('/login', [AuthController::class,'login']);
$app->router->get('register', [AuthController::class,'register']);
$app->router->post('/login', [AuthController::class,'register']);

$app->run();