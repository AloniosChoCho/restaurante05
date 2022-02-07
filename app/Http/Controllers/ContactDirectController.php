<?php

namespace App\Http\Controllers;

use App\ContactDirect;
use App\ContactUs;
use Illuminate\Http\Request;

class ContactDirectController extends Controller
{
  public function index(){
    $subContact = ContactDirect::first();
    return view('backend.contact.contact-direction.index' , compact('subContact'));
  }

  public function edit($id){
    $subContact = ContactDirect::whereId($id)->first();
    return view('backend.contact.contact-direction.edit' , compact('subContact'));
  }

  public function update(Request $request, $id){
    $subContact = ContactDirect::find($id);
    $subContact->sub_title_direction=$request->sub_title_direction;
    $subContact->direction=$request->direction;
    $subContact->sub_title_phone=$request->sub_title_phone;
    $subContact->personal_phone=$request->personal_phone;
    $subContact->general_phone=$request->general_phone;
    $subContact->email=$request->email;
    $subContact->sub_title_social=$request->sub_title_social;
    $subContact->facebook=$request->facebook;
    $subContact->twitter=$request->twitter;
    $subContact->google=$request->google;
    $subContact->pinterst=$request->pinterst;
    $subContact->tiktok=$request->tiktok;
    $subContact->save();

    return redirect()->route('contact-direct.index')->with('update' , 'Registro actualizado exitosamente');
  }


}
