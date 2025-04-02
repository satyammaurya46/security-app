<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Scan_summaryController extends Controller
{
    public function index()
    {
        return view('scan_summary');
    }
}
