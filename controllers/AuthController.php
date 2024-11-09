<?php

namespace controllers;

use Controller;
use core\Request;

class AuthController extends Controller
{
    public function login()
    {   
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        if($request->isPost()){
            return 'Handle submitted data';
        }
        return $this->render('register');
    }
}