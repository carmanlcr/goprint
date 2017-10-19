<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioEditRequest extends FormRequest
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
            'nombre' => 'required|max:20|min:3',
            'apellido' => 'required|max:20|min:5',
            'email' => 'required|email|min:5|max:100',
            'username' => 'required|min:5|max:40',
            'tipo' => 'required|in:1,2',
        ];
    }
}
