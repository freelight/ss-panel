<?php

namespace App\Controllers;

/**
 *  AuthController
 */

class AuthController extends BaseController
{

    public function login()
    {
        return $this->view()->display('auth/login.tpl');
    }

    public function register(){

    }

}