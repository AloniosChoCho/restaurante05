<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryOverlayController extends Controller
{
    public function index()
     {
        return view('frontend.galleryoverlay');
    }
}
