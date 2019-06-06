<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AdminFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->hasRole('Super-Administrador');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'telefono_principal' => 'required|max:14',
            'correo_electronico' => 'required|unique:admins,correo_electronico|max:100',
            'password' => 'required|unique:bancos|max:100',
        ];
    }
}
