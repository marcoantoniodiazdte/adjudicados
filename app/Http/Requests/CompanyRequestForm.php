<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequestForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->hasRole('Super-Administrador');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                  => 'required|unique:companies|max:100',
            'RNC'                   => 'required|unique:companies|max:100',
            'razon_social'          => 'unique:companies|max:100',
            'correo_electronico'    => 'unique:companies,correo_electronico|max:100',
            'description'           => 'required',
        ];
    }
}
