<?php

namespace SPizzeria\Http\Controllers;

use Illuminate\Http\Request;

use SPizzeria\Http\Requests;
use SPizzeria\Pizza;
class HazloTuController extends Controller
{
    
    function index(){
    	$pizzas=Pizza::all();
    	return view('pantalla.HazloTu',["pizzas"=>$pizzas]);
    }
}
