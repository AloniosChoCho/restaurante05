<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\AboutHistory;
use Carbon\Carbon;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        $about_histories = AboutHistory::where('is_active',1)->get();
        return view('frontend.about', compact('about','about_histories'));
    }

    public function page(Request $request)
    {
        $data = About::first();
        $quantityHistories = AboutHistory::where('is_active',1)->count();
        return view('backend.about',compact('data','quantityHistories'));
    }

    public function updatePageAbout(Request $request)
    {

      $data = About::find(1);
      $data->section_title_title = $request->section_title_title;
      $data->section_title_description = $request->section_title_description;
      if($request->file('section_title_image')) {
          $nameFile = Carbon::now()->format("dmYHis").".".$request->file('section_title_image')->getClientOriginalExtension();
          $path = $request->file('section_title_image')->storeAs('public/about', $nameFile);
          $data->section_title_image = $nameFile;
      }
      $data->section_history_title = $request->section_history_title;
      $data->section_history_description = $request->section_history_description;
      $data->section_service_title = $request->section_service_title;
      $data->section_service_description = $request->section_service_description;
      $data->section_certificates_title = $request->section_certificates_title;
      $data->section_certificates_description = $request->section_certificates_description;
      $data->section_certificates_link = $request->section_certificates_link;
      $data->save();

      $quantityHistories = AboutHistory::where('is_active',1)->count();

        // if($request->file('section_title_image')) {
        //     $nameFile = Carbon::now()->format("dmYHis").".".$request->file('section_title_image')->getClientOriginalExtension();
        //     $path = $request->file('section_title_image')->storeAs('public/about', $nameFile);
        //     $data->section_title_image = $nameFile;
        // }

        return view('backend.about',compact('data','quantityHistories'));
    }

    public function addHistory()
    {
      $histories = AboutHistory::paginate(10);
      return view('backend.add-history', compact('histories'));
    }

    public function updateState(Request $request)
    {
      $history = AboutHistory::find($request->id);
      $history->is_active = $request->is_active == 1 ? 0 : 1;
      $history->save();

      return $history;
    }

    public function storeAboutHistory(Request $request)
    {
      $history = new AboutHistory;
      $history->title = $request->title;
      $history->description = $request->description;
      $history->link = $request->link;

      if($request->file('section_title_image')) {
        $nameFile = Carbon::now()->format("dmYHis").".".$request->file('section_title_image')->getClientOriginalExtension();
        $request->file('section_title_image')->storeAs('public/about_history', $nameFile);
        $history->image = $nameFile;
      }
      $history->save();

      return $history;
    }

    public function updateAboutHistory(Request $request)
    {
      $history = AboutHistory::find($request->idhistory);
      $history->title = $request->title;
      $history->description = $request->description;
      $history->link = $request->link;

      if($request->file('section_title_image')) {
        $nameFile = Carbon::now()->format("dmYHis").".".$request->file('section_title_image')->getClientOriginalExtension();
        $request->file('section_title_image')->storeAs('public/about_history', $nameFile);
        $history->image = $nameFile;
      }
      $history->save();

      return $history;
    }
}
