<?php

namespace SPizzeria\Http\Controllers;

use Illuminate\Http\Request;

use SPizzeria\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use SPizzeria\Http\Requests\VentaFormRequest;
use SPizzeria\Venta;
use DB;

class VentaController extends Controller
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
            $ventas=DB::table('detalle as d')
            ->join('pizza as p','d.Pizza_Cod_Pz','=','p.Cod_Pz')
            ->join('cliente as c','d.Cliente_IdCliente','=','c.IdCliente')
            ->join('pedido as pd','d.Pedido_NumPedido','=','pd.NumPedido')
            ->join('ingrediente as i','d.Ingrediente_idIngrediente','=','i.idIngrediente')
            ->select('d.IdDetalle','d.Pedido_NumPedido','c.Nombre as NombreCliente' ,'p.PNombre as NombrePizza','i.Nombre as NombreIngrediente','i.Cantidad as Cant','d.Descuento','d.Subtotal','pd.Fecha as Fecha','pd.Total as Total')
            ->where('c.Nombre','LIKE','%'.$query.'%')
            ->orderBy('d.IdDetalle','asc')
            ->paginate(5);
            return view('almacen.venta.index',["ventas"=>$ventas,"searchText"=>$query]);
        }
    }
    public function create()
    {
        /*$pizzas=DB::table('pizza')->where('estado','=','Activo')->get();
        return view("almacen.ingrediente.create",["pizzas"=>$pizzas]);*/
    }
    public function store (VentaFormRequest $request)
    {
        /*$venta=new Venta;
        //$pizza->IdCliente=$request->get('IdCliente')   
        $venta->idIngrediente=$request->get('idIngrediente');
        $venta->Nombre=$request->get('Nombre');
        $venta->Cantidad=$request->get('Cantidad');
        $venta->Precio=$request->get('Precio');
        $venta->Pizza_Cod_Pz=$request->get('Pizza_Cod_Pz');
        $venta->save();
        return Redirect::to('almacen/venta');*/
    }
    public function show($id)
    {
        return view("almacen.venta.show",["venta"=>Venta::findOrFail($id)]);
    }
    public function edit($id)
    {
    	/*$ingrediente=Ingrediente::findOrFail($id);
    	$pizzas=DB::table('pizza')->where('estado','=','Activo')->get();
        return view("almacen.ingrediente.edit",["ingrediente"=>$ingrediente,"pizzas"=>$pizzas]);*/
    }
    public function update(VentaFormRequest $request,$id)
    {
        /*$ingrediente=Ingrediente::findOrFail($id); 
        
        $ingrediente->idIngrediente=$request->get('idIngrediente');
        $ingrediente->Nombre=$request->get('Nombre');
        
        $ingrediente->Cantidad=$request->get('Cantidad');
        $ingrediente->Precio=$request->get('Precio');
        $ingrediente->Pizza_Cod_Pz=$request->get('Pizza_Cod_Pz');
        
        $ingrediente->update();
        return Redirect::to('almacen/venta');*/
    }
    public function destroy($id)
    {
        /*$ingrediente=Ingrediente::findOrFail($id);
        $ingrediente->cantidad='0';
        $ingrediente->update();
        return Redirect::to('almacen/venta');*/
    }
}
