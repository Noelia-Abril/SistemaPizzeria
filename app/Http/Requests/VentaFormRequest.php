<?php

namespace SPizzeria\Http\Requests;

use SPizzeria\Http\Requests\Request;

class VentaFormRequest extends Request
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
            'Descuento'=>'required',
            'SubTotal'=>'required',
            'Pedido_NumPedido'=>'required',
            'Cliente_IdCliente'=>'required',
            'Pizza_Cod_Pz'=>'required',
            'Ingrediente_idIngrediente'=>'required'
        ];
    }
}
