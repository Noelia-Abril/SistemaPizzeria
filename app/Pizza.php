<?php

namespace SPizzeria;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table='pizza';
    protected $primaryKey='Cod_Pz';
    public $timestamps=false;
    protected $fillable =[
    	'PNombre',
    	'Precio',
    	'Descripcion',
    	'Existencias',
        'Imagen',
        'estado'
    ];
    protected $guarded =[
    ];
}
