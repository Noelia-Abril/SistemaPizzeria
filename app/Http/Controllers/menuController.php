<?php

namespace SPizzeria\Http\Controllers;

use Illuminate\Http\Request;

use SPizzeria\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use SPizzeria\Http\Requests\PizzaFormRequest;
use SPizzeria\Pizza;

class menuController extends Controller
{
   
    function index()
    {
    	$pizzas=Pizza::where('estado','!=','Inactivo')
		//->where('Precio','<=','60.00')
    	->get();
    	return view('pantalla.menu',["pizzas"=>$pizzas]);
    	
    }

}
