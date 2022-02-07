<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogRightController extends Controller
{
    public function index()
     {
        return view('frontend.blog_right_sidebar');
    }
}

