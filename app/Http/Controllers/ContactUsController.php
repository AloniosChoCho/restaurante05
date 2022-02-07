<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
  public function index(){
    $contact = ContactUs::first();
    return view('backend.contact.index', compact('contact'));
  }

  public function edit($id){
    $contact = ContactUs::whereId($id)->first();
    return view('backend.contact.edit', compact('contact'));
  }

  public function update(Request $request ,$id){
    $contact = ContactUs::find($id);
    $contact->title=$request->title;
    $contact->description=$request->description;
    $contact->save();

    return redirect()->route('contact.index')->with('updated' , 'Registro Actualizado.');
  }
}
