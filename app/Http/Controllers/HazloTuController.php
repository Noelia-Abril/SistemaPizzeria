<?php

namespace SPizzeria\Http\Controllers;

use Illuminate\Http\Request;

use SPizzeria\Http\Requests;
use SPizzeria\Ingrediente;
class HazloTuController extends Controller
{
    
    function index(){
    	$ingredientes=Ingrediente::all();
    	//->where ('Cantidad','!=','0');
    	return view('pantalla.HazloTu',["ingredientes"=>$ingredientes]);
    }
}
