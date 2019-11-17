<?php

namespace SPizzeria\Http\Controllers;

use Illuminate\Http\Request;

use SPizzeria\Http\Requests;
use SPizzeria\Cliente;
use Illuminate\Support\Facades\Redirect;
use SPizzeria\Http\Requests\ClienteFormRequest;
use DB;
class InicioController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $clientes=DB::table('cliente')->where('Nombre','LIKE','%'.$query.'%')
            ->where ('CI','!=','0')
            ->orderBy('IdCliente','asc')
            ->paginate(7);
            return view('almacen.inicio.create',["clientes"=>$clientes,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("almacen.inicio.create");
    }
    public function store (ClienteFormRequest $request)
    {
        $cliente=new Cliente;
        
        $cliente->CI=$request->get('CI');
        $cliente->Nombre=$request->get('Nombre');
        $cliente->save();
        return Redirect::to('almacen/inicio');
    }
    public function show($id)
    {
        return view("almacen.inicio.show",["cliente"=>CLiente::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("almacen.inicio.edit",["cliente"=>CLiente::findOrFail($id)]);
    }
    public function update(ClienteFormRequest $request,$id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente->CI=$request->get('CI');
        $cliente->Nombre=$request->get('Nombre');
        
        $cliente->update();
        return Redirect::to('almacen/inicio');
    }
    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente->CI='0';
        $cliente->update();
        return Redirect::to('almacen/inicio');
    }
}
