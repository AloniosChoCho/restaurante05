<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menu1Controller extends Controller
{
    public function index()
     {
        return view('frontend.menu1');
    }
}