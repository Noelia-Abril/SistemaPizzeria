<?php

namespace SPizzeria\Http\Controllers;

use Illuminate\Http\Request;

use SPizzeria\Http\Requests;
use SPizzeria\Pizza;
class menuController extends Controller
{
    //
    function index(){
    	$pizzas=Pizza::all();
    	return view('menu',["pizzas"=>$pizzas]);
    }
}
