<?php

/** User: */

require_once

$app = new Application();



$app->$router->get('/', function(){
    return 'Hello World';
});

$app->run();