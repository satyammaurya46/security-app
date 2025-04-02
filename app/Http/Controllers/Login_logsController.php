<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login_logsController extends Controller
{
    public function index()
    {
        return view('login_logs');
    }
}
