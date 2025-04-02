<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Set_timezoneController extends Controller
{
    public function index()
    {
        return view('set_timezone');
    }
}
