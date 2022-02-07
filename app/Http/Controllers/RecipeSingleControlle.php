<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeSingleControlle extends Controller
{
    public function index()
     {
        return view('frontend.recipe-single');
    }
}

