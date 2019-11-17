<?php

namespace SPizzeria;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table='ingrediente';
    protected $primaryKey='idIngrediente';
    public $timestamps=false;
    protected $fillable =[
    	'Nombre',
    	'Imagen',
    	'Cantidad',
    	'Precio',
    	'Pizza_Cod_Pz'
    ];
    protected $guarded =[
    ];
}
