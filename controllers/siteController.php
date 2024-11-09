<?php

namespace controllers;

use core\Application;

class siteController
{
    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    public function handleContact()
    {
        return 'Handling submitted data';
    }
}
