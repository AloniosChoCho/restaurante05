<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMenuList extends FormRequest
{

  public function authorize()
  {
    return true; // AUTORIZAR EL USO DE StoreMenuList
  }

  public function rules() // CAMPOS QUE VOY A VALIDAR
  {
    return [
      'ltitle' => 'required',
      'ldescription' => 'required'
    ];
  }
  public function attributes()
  {
    return [
      'ltitle' => 'Título',
      'ldescription' => 'Descripción'
    ];
  }
}
