<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubBlog;
use Carbon\Carbon;

class SubBlogController extends Controller
{
  public function index(){
    $subBlog = SubBlog::first();
    return view('backend.blog.sub-blog.index', compact('subBlog'));
  }

  public function edit ($id){
    $subBlog = SubBlog::whereId($id)->first();
    return view('backend.blog.sub-blog.edit', compact('subBlog'));
  }

  public function store(Request $request){
    $subBlog = new SubBlog();

    if($request->file('imagen')){
      $namefile = Carbon::now()->format("dmYHis").".".$request->file('imagen')->getClientOriginalExtension();
      $request->file('imagen')->storeAs('public/sub_blog', $namefile);
      $subBlog->imagen = $namefile;
    }
    $subBlog->save();
    return $subBlog;
  }

  public function update(Request $request, $id){
    $subBlog = SubBlog::find($id);
    $subBlog->date = $request->date;
    $subBlog->title = $request->title;
    $subBlog->name = $request->name;

    if($request->file('imagen')) {
      $namefile = Carbon::now()->format("dmYHis").".".$request->file('imagen')->getClientOriginalExtension();
      $request->file('imagen')->storeAs('public/sub_blog', $namefile);
      $subBlog->imagen = $namefile;
    }

    $subBlog->description = $request->description;
    $subBlog->save();

    return redirect()->route('sub-blog-list.index')->with('updated' , 'Registro actulizado correctamente.');
  }
}
