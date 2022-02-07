<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogCommentRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'name' => 'required',
      'phone' => 'required|digits:9',
      'email' => 'required',
      'comment' => 'required',
    ];
  }

  public function attributes()
  {
    return [
      'name' => 'Nombre compleo',
      'phone' => 'Su número de teléfono',
      'email' => 'Su correo electrónico',
      'comment' => 'Comentario',
    ];
  }
}
