<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortCodeController extends Controller
{
    public function index()
     {
        return view('frontend.shortcode');
    }
}
