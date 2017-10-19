<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioCreateRequest extends FormRequest
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
            'nombre' => 'required|min:3|max:15',
            'apellido' => 'required|min:3|max:15',
            'email' => 'required|email|min:7|unique:users',
            'username' => 'required|min:6|unique:users',
            'password' => 'required|min:8|confirmed',
            'imagen' => 'required|image',
            'tipo' => 'required|in:1,2',

        ];
    }
}
