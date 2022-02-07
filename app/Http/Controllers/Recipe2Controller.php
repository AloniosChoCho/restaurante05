<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Recipe2Controller extends Controller
{
    public function index()
     {
        return view('frontend.recipe-2');
    }
}

