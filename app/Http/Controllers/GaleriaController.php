<?php

namespace SPizzeria\Http\Controllers;

use Illuminate\Http\Request;

use SPizzeria\Http\Requests;
use SPizzeria\Pizza;
class GaleriaController extends Controller
{
    
    function index(){
    	$pizzas=Pizza::where('estado','!=','Inactivo')->get();
    	return view('pantalla.galeria',["pizzas"=>$pizzas]);
    }
}
