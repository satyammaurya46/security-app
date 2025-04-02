<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view ('auth.login');
    }

    public function recoverpw()
    {
        return view ('auth.recoverpw');
    }

    public function register()
    {
        return view ('auth.register');
    }

    public function storelogin(Request $request)
    {
         
    }

    public function logout()
    {
        
    }

   
}
