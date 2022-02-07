<?php

namespace App\Http\Controllers;

use App\Cuestions;
use Illuminate\Http\Request;

class CuestionsController extends Controller
{
    public function index(){
      $cuestions = Cuestions::first();
      return view('backend.faq.index', compact('cuestions'));
    }

    public function edit($id){
      $cuestions = Cuestions::whereId($id)->first();
      return view('backend.faq.edit', compact('cuestions'));
    }

    public function update(Request $request, $id){
      $cuestions = Cuestions::find($id);
      $cuestions->title = $request->title;
      $cuestions->description = $request->description;
      $cuestions->save();

      return redirect()->route('cuestions.index')->with('update' , 'Registro actualizado correctamente');
    }


}
