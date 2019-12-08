<?php

namespace SPizzeria;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table='detalle';
    protected $primaryKey='IdDetalle';
    public $timestamps=false;
    protected $fillable =[
    	'Descuento',
    	'SubTotal',
    	'Pedido_NumPedido',
    	'Cliente_IdCliente',
    	'Pizza_Cod_Pz',
    	'Ingrediente_idIngrediente'
    ];
    protected $guarded =[
    ];
}
