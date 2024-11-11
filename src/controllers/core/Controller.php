<?php

use core\Application;

class Controller
{
    public string $layout = 'main';
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }


    public function render($view, $params =[])
    {
        return Application::$app->router->renderView($view, $params);
    }
}