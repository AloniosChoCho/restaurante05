<?php

namespace App\Http\Controllers;

use App\BlogComment;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function index() {
    $commets = BlogComment::where('is_active',1)->get();
    return view('frontend.index',compact('commets'));
  }
}
