<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactMessageRequest extends FormRequest
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
            'message' => 'required',
        ];
    }

    public function attributes()
    {
      return[
          'name' => 'Nombre Completo',
          'phone' => 'Su número de teléfono',
          'email' => 'Su Correo electronico',
          'message' => 'Mensaje',
      ];
    }
}
