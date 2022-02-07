<?php

namespace App\Http\Controllers;

use App\BlogComment;
use App\Http\Requests\StoreBlogCommentRequest;
use Illuminate\Http\Request;

class BlogCommentController extends Controller
{
  public  function index(){
    $listComments = BlogComment::get();
    return view('backend.blog.sub-blog.coments', compact('listComments'));
  }
  public function store(StoreBlogCommentRequest $request) {
    BlogComment::create($request->except(['_token']));
    return redirect()->route('Blog Single')->with('created', 'Su comentario a sido publicado exitósamente');
  }

  public function destroy($id){
    BlogComment::whereId($id)->delete();
    return redirect()->route('blog-comments.index');
  }

  public function updateIsActive(Request $request, $id){
    $newState = $request->state == '1' ? 0 : 1;

    BlogComment::whereId($id)->update([
      'is_active' => $newState
    ]);
    return redirect()->route('blog-comments.index');
  }
}
