<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Incidence_listController extends Controller
{
    public function index()
    {
        return view('incidence_list');
    }
}
