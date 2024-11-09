<?php

namespace controllers;

use Controller;
use core\Application;
use core\Request;

class siteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "RPA"
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    public function handleContact(Request $request)
    {
        Application::$app->request->getBody();
        return 'Handling submitted data';
    }
}
