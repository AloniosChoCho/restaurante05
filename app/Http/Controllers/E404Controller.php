<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class E404Controller extends Controller
{
    public function index()
     {
        return view('frontend.404');
    }
}
