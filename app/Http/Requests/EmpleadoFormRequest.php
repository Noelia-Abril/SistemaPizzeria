<?php

namespace SPizzeria\Http\Requests;

use SPizzeria\Http\Requests\Request;

class EmpleadoFormRequest extends Request
{
    /**
     * Determine if the user ijs authorized to make this request.
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
            'CI'=>'required',
            'Nombre'=>'required|max:100',
            'Cargo'=>'required|max:100',
            'id'=>'required'
        ];
    }
}
