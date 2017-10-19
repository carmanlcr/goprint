<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class detalleUsuarioRequest extends FormRequest
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
            'ciudad' => 'required|min:3|max:15',
            'direccion' => 'required|max:500',
            'telefono' => 'required'
        ];
    }
}
