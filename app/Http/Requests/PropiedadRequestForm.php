<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropiedadRequestForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('create.propiedades');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => 'required|max:100',
            'estado'            => 'required',
            'clase'             => 'required',
            'descripcion'       => 'required',
            'direccion'         => 'required',
            'tipo_oferta'        => 'required',
            'precio_us'              => 'required',
            'precio_rd'              => 'required',
            'mostrar_precio'              => 'required',
            'estado'              => 'required',
            'estado_comercial'              => 'required',
            'provincia_id'              => 'required',
            'municipio_id'              => 'required',
            'sector_id'              => 'required',
        ];
    }
}

