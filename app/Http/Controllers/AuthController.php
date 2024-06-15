<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register_form()
    {
        return view('auth.register');
    }

    public function register()
    {
        return view('auth.register');
    }
}
