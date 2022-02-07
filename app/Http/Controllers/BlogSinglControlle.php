<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\SubBlog;
use App\BlogComment;
use App\ContactDirect;

class BlogSinglControlle extends Controller
{
  public function index(Request $request)
  {
    $blog = Blog::first();
    $subBlog = SubBlog::first();
    $comments = BlogComment::where('is_active',1)->orderByDesc('id')->get();
    return view('frontend.blogsingle', compact('blog', 'subBlog' ,'comments'));
  }
}
