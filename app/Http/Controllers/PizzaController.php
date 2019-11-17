<?php

namespace SPizzeria\Http\Controllers;

use Illuminate\Http\Request;

use SPizzeria\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use SPizzeria\Http\Requests\PizzaFormRequest;
use SPizzeria\Pizza;
use DB;

class PizzaController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $pizzas=DB::table('pizza')->where('PNombre','LIKE','%'.$query.'%')
            ->where ('estado','=','Activo')
            ->orderBy('PNombre','asc')
            ->paginate(7);
            return view('almacen.pizza.index',["pizzas"=>$pizzas,"searchText"=>$query]);
        }
    }
    public function create()
    {
        //llamar lista de clientes
    	/*clientes=DB::table('cliente')->select('SELECT * FROM cliente')->get();
        return view("almacen.pizza.create",["clientes"=$clientes]);*/
        return view("almacen.pizza.create");
    }
    public function store (PizzaFormRequest $request)
    {
        $pizza=new Pizza;
        //$pizza->IdCliente=$request->get('IdCliente')   
        $pizza->Cod_Pz=$request->get('Cod_Pz');
        $pizza->PNombre=$request->get('PNombre');
        $pizza->Precio=$request->get('Precio');
        $pizza->Descripcion=$request->get('Descripcion');
        $pizza->Existencias=$request->get('Existencias');
        /*$categoria->descripcion=$request->get('descripcion');
        /$categoria->condicion='1';
        */
        if(Input::hasFile('Imagen'))
        {
        	$file=Input::file('Imagen');
        	$file->move(public_path().'/imagenes/pizzas/',$file->getClientOriginalName());
        	$pizza->Imagen=$file->getClientOriginalName();
        }
        $pizza->estado='Activo';
        $pizza->save();
        return Redirect::to('almacen/pizza');
    }
    public function show($id)
    {
        return view("almacen.pizza.show",["pizza"=>Pizza::findOrFail($id)]);
    }
    public function edit($id)
    {
    	$pizza=Pizza::findOrFail($id);
    	//para lo qu este unido
    	/*$cliente=DB::table('cliente')->select('SELECT * FROM cliente')->get();
        return view("almacen.pizza.edit",["pizza"=>Pizza,"clientes"=>$clientes]);*/
        return view("almacen.pizza.edit",compact('pizza'));
    }
    public function update(PizzaFormRequest $request,$id)
    {
        $pizza=Pizza::findOrFail($id); 
        $pizza->Cod_Pz=$request->get('Cod_Pz');
        $pizza->PNombre=$request->get('PNombre');
        $pizza->Precio=$request->get('Precio');
        $pizza->Descripcion=$request->get('Descripcion');
        $pizza->Existencias=$request->get('Existencias');
        if(Input::hasFile('Imagen'))
        {
            $file=Input::file('Imagen');
            $file->move(public_path().'/imagenes/pizzas/',$file->getClientOriginalName());
            $pizza->Imagen=$file->getClientOriginalName();
        }
        $pizza->update();
        return Redirect::to('almacen/pizza');
    }
    public function destroy($id)
    {
        $pizza=Pizza::findOrFail($id);
        $pizza->estado='Inactivo';
        $pizza->update();
        return Redirect::to('almacen/pizza');
    }
}