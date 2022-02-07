<?php

namespace App\Http\Controllers;

use App\ContactMessage;
use App\Http\Requests\StoreContactMessageRequest;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function index(){
      $message = ContactMessage::get();
      return view('backend.contact.contact-message.index', compact('message'));
    }

    public function store(StoreContactMessageRequest $request){
      ContactMessage::create($request->except(['_token']));
      return redirect()->route('Contact')->with('created' , 'Su mensaje a sido enviado correctamente');
    }

    public function destroy($id){
      // dd($id);
      ContactMessage::whereId($id)->delete();
      return redirect()->route('contact-message.index');
    }

    public function updateIsActive(Request $request, $id){
      $newState = $request->state== '1' ? 0 : 1 ;

      ContactMessage::whereId($id)->update([
        'is_active' => $newState
      ]);
      return redirect()->route('contact-message.index');
    }
}
