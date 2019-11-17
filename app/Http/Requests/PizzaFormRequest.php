<?php

namespace SPizzeria\Http\Requests;

use SPizzeria\Http\Requests\Request;

class PizzaFormRequest extends Request
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
            'Cod_Pz'=>'required|max:15',
            'PNombre'=>'required|max:50',
            'Precio'=>'required',
            'Descripcion'=>'required|max:250',
            'Existencias'=>'required',
            'Imagen'=>'mimes:jpeg,png,jpg',
        ];
    }
}
