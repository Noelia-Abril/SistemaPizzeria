<?php

namespace SPizzeria\Http\Controllers;

use Illuminate\Http\Request;

use SPizzeria\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use SPizzeria\Http\Requests\IngredienteFormRequest;
use SPizzeria\Ingrediente;
use DB;
class IngredienteController extends Controller
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
            $ingredientes=DB::table('ingrediente as i')
            ->join('pizza as p','i.Pizza_Cod_Pz','=','p.Cod_Pz')
            ->select('i.idIngrediente','i.Nombre','i.Imagen','i.Cantidad','i.Precio','p.PNombre as NombrePizza')
            ->where('i.Nombre','LIKE','%'.$query.'%')
            ->where ('i.cantidad','!=','0')
            ->orderBy('i.Nombre','asc')
            ->paginate(7);
            return view('almacen.ingrediente.index',["ingredientes"=>$ingredientes,"searchText"=>$query]);
        }
    }
    public function create()
    {
        $pizzas=DB::table('pizza')->where('estado','=','Activo')->get();
        return view("almacen.ingrediente.create",["pizzas"=>$pizzas]);
    }
    public function store (IngredienteFormRequest $request)
    {
        $ingrediente=new Ingrediente;
        //$pizza->IdCliente=$request->get('IdCliente')   
        $ingrediente->idIngrediente=$request->get('idIngrediente');
        $ingrediente->Nombre=$request->get('Nombre');
        if(Input::hasFile('Imagen'))
        {
        	$file=Input::file('Imagen');
        	$file->move(public_path().'/imagenes/ingredientes/',$file->getClientOriginalName());
        	$ingrediente->Imagen=$file->getClientOriginalName();
        }
        $ingrediente->Cantidad=$request->get('Cantidad');
        $ingrediente->Precio=$request->get('Precio');
        $ingrediente->Pizza_Cod_Pz=$request->get('Pizza_Cod_Pz');
        $ingrediente->save();
        return Redirect::to('almacen/ingrediente');
    }
    public function show($id)
    {
        return view("almacen.ingrediente.show",["ingrediente"=>Ingrediente::findOrFail($id)]);
    }
    public function edit($id)
    {
    	$ingrediente=Ingrediente::findOrFail($id);
    	$pizzas=DB::table('pizza')->where('estado','=','Activo')->get();
        return view("almacen.ingrediente.edit",["ingrediente"=>$ingrediente,"pizzas"=>$pizzas]);
    }
    public function update(IngredienteFormRequest $request,$id)
    {
        $ingrediente=Ingrediente::findOrFail($id); 
        
        $ingrediente->idIngrediente=$request->get('idIngrediente');
        $ingrediente->Nombre=$request->get('Nombre');
        if(Input::hasFile('Imagen'))
        {
            $file=Input::file('Imagen');
            $file->move(public_path().'/imagenes/ingredientes/',$file->getClientOriginalName());
            $ingrediente->Imagen=$file->getClientOriginalName();
        }
        $ingrediente->Cantidad=$request->get('Cantidad');
        $ingrediente->Precio=$request->get('Precio');
        $ingrediente->Pizza_Cod_Pz=$request->get('Pizza_Cod_Pz');
        
        $ingrediente->update();
        return Redirect::to('almacen/ingrediente');
    }
    public function destroy($id)
    {
        $ingrediente=Ingrediente::findOrFail($id);
        $ingrediente->cantidad='0';
        $ingrediente->update();
        return Redirect::to('almacen/ingrediente');
    }
}
