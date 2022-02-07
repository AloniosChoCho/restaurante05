<?php

namespace App\Http\Controllers;

use App\FaqCuestions;
use App\Http\Requests\StoreFaqCuestionRequest;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Stub\ReturnSelf;

class FaqCuestionsController extends Controller
{
    public function index(){
      $faq = FaqCuestions::get();
      return view('backend.faq.cuestions.index', compact('faq'));
    }

    public function create(){
      return view('backend.faq.cuestions.create');
    }

    public function store(StoreFaqCuestionRequest $request){
      $faq = new FaqCuestions;
      $faq->questions = $request->questions;
      $faq->answers = $request->answers;
      $faq->save();

      return redirect()->route('faq-cuestions.index')->with('created' , 'Registro creado exitosamente.');
    }

    public function edit(Request $request, $id){
      $faq = FaqCuestions::whereId($id)->first();

      return view('backend.faq.cuestions.edit', compact('faq'));
    }

    public function update(Request $request, $id){
      $faq = FaqCuestions::find($id);
      $faq->questions = $request->questions;
      $faq->answers = $request->answers;
      $faq->save();

      return redirect()->route('faq-cuestions.index', ['idFaq' => $request->idFaq])->with('updated' , 'Pregunta Actualizada');
    }

    public function destroy($id){
      FaqCuestions::whereId($id)->delete();

      return redirect()->route('faq-cuestions.index');
    }

    public function updateIsActive(Request $request, $id){
      $newState = $request->state== '1' ? 0 : 1 ;

      FaqCuestions::whereId($id)->update([
        'is_active' => $newState
      ]);
      return redirect()->route('faq-cuestions.index');
    }
}
