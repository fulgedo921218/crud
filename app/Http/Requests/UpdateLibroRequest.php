<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLibroRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'sometimes|required|string|max:255',
            'descripcion' => 'sometimes|required|string',
        ];
    }
}
