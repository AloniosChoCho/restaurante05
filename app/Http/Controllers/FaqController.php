<?php

namespace App\Http\Controllers;

use App\Cuestions;
use App\FaqCuestions;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
      $cuestions = Cuestions::first();
      $faqs = FaqCuestions::where('is_active',1)->get();
      return view('frontend.faq', compact('cuestions','faqs'));
    }
}
