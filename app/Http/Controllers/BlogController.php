<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
      $blog = Blog::first();
      return view('backend.blog.index', compact('blog'));
    }

    public function edit ($id){
      $blog = Blog::whereId($id)->first();
      return view('backend.blog.edit', compact('blog'));
    }

    public function update (Request $request, $id){
      $blog = Blog::find($id);
      $blog->title_blog = $request->title_blog;
      $blog->description_blog = $request->description_blog;
      $blog->link = $request->link;
      $blog->save();

      return redirect()->route('blog-list.index')->with('updated' , 'Registro actualizado exitosamente.');
    }

}
