<?php

namespace SPizzeria\Http\Controllers;

use Illuminate\Http\Request;

use SPizzeria\Http\Requests;
use SPizzeria\Ingrediente;

class HazloTuController extends Controller
{
    
    function index()
    {
    	$ingredientes=Ingrediente::where('Cantidad','!=','0')->get();
    	return view('pantalla.HazloTu',["ingredientes"=>$ingredientes]);
    }
}
