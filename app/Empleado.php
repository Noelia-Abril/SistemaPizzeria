<?php

namespace SPizzeria;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table='empleado';
    protected $primaryKey='cod_empleado';
    public $timestamps=false;
    protected $fillable =[
    	'CI',
    	'Nombre',
    	'Cargo',
    	'id'
    ];
    protected $guarded =[
    ];
}
