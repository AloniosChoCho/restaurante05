<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
  public function index()
  {
    $reservation = Reservation::first();

    return view('frontend.reservation',compact('reservation'));

    $reservation = Reservation::first();
    return view('frontend.reservation',compact('reservation'));
  }

  public function pageReservation()
  {
    $reservation = Reservation::first();
    return view('backend.reservation.index',compact('reservation'));
  }

  public function pageReservationEdit(Request $request)
  {
    $reservation = Reservation::whereId($request->id)->first();
    return view('backend.reservation.edit',compact('reservation'));
  }
  public function pageReservationUpdate(Request $request)
  {
    $reservation = Reservation::find($request->id);
    $reservation->header_title = $request->title;
    $reservation->header_description = $request->description;
    $reservation->save();

    return redirect()->route('page-reservation')->withSuccess('Actualizado correctamente','Actualizado correctamente.');
  }

  public function pagequote()
  {
    $reservation = Reservation::first();
    return view('backend.reservation.quoteindex',compact('reservation'));
  }

  public function pagequoteedit(Request $request)
  {
    $reservation = Reservation::whereId($request->id)->first();
    return view('backend.reservation.quoteedit',compact('reservation'));
  }
  public function pagequoteUpdate(Request $request)
  {
    $reservation = Reservation::find($request->id);
    $reservation->form_title = $request->title;
    $reservation->form_description = $request->description;
    $reservation->contact_phone = $request->phone;

    $reservation->show_form_input_name = $request->iname;
    $reservation->show_form_input_phone = $request->iphone;
    $reservation->show_form_input_email = $request->iemail;
    $reservation->show_form_input_guest = $request->iguest;
    $reservation->show_form_input_date = $request->idata;
    $reservation->show_form_input_time = $request->itime;
    $reservation->save();

    return redirect()->route('page-quote')->withSuccess('Actualizado correctamente','Actualizado correctamente.');
  }
}

