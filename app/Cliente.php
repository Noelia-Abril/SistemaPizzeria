<?php

namespace SPizzeria;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='cliente';
    protected $primaryKey='IdCliente';
    public $timestamps=false;
    protected $fillable =[
    	'CI',
    	'Nombre'
    ];
    protected $guarded =[
    ];
}
