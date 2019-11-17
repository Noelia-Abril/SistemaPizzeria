<?php

namespace SPizzeria\Http\Requests;

use SPizzeria\Http\Requests\Request;

class IngredienteFormRequest extends Request
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
            'Nombre'=>'required|max:100',
            'Imagen'=>'mimes:jpeg,png,jpg',
            'Cantidad'=>'required',
            'Precio'=>'required',
            'Pizza_Cod_Pz'=>'required'
        ];
    }
}
