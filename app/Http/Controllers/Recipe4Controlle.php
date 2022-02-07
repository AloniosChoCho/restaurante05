<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Recipe4Controlle extends Controller
{
    public function index()
     {
        return view('frontend.recipe-4');
    }
}

