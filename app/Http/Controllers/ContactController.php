<?php

namespace App\Http\Controllers;

use App\ContactMessage;
use App\ContactDirect;
use App\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
     {
       $contact = ContactUs::first();
       $subContact = ContactDirect::first();
       $message = ContactMessage::orderByDesc('id')->get();
        return view('frontend.contact',compact('contact' , 'subContact' , 'message'));
    }

}

