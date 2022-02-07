<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogLeftController extends Controller
{
    public function index()
     {
        return view('frontend.blog_left_sidebar');
    }
}
