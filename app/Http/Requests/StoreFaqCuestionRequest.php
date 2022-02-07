<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFaqCuestionRequest extends FormRequest
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
          'questions' => 'required',
          'answers' => 'required',
        ];
    }
    public function attributes()
    {
        return [
          'questions' => 'Preguintas',
          'answers' => 'Respuesta',
        ];
    }
}
