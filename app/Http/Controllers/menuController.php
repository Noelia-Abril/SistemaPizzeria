<?php

namespace SPizzeria\Http\Controllers;

use Illuminate\Http\Request;

use SPizzeria\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use SPizzeria\Http\Requests\PizzaFormRequest;
use SPizzeria\Pizza;
use DB;

class menuController extends Controller
{
   
    function index()
    {
    	$pizzas=Pizza::all();
    	//->where('estado','!=','Inactivo');
    	return view('pantalla.menu',["pizzas"=>$pizzas]);
    }
}
