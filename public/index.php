<?php

require_once __DIR__. '/../vendor/autoload.php';

use core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'login');
$app->router->get('/readFile', 'readFile');
$app->router->post('/readFile', []);

$app->run();