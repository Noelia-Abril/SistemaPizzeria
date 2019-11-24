<?php

namespace SPizzeria\Http\Controllers;

use Illuminate\Http\Request;

use SPizzeria\Http\Requests;
use SPizzeria\Cliente;
use Illuminate\Support\Facades\Redirect;
use SPizzeria\Http\Requests\ClienteFormRequest;
use DB;
class ClienteController extends Controller
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
            $clientes=DB::table('cliente')->where('Nombre','LIKE','%'.$query.'%')
            ->where ('CI','!=','0')
            ->orderBy('IdCliente','asc')
            ->paginate(5);
            return view('almacen.cliente.index',["clientes"=>$clientes,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("almacen.cliente.create");
    }
    public function store (ClienteFormRequest $request)
    {
        $cliente=new Cliente;
        //todos los atributos de la tabla
        $cliente->CI=$request->get('CI');
        $cliente->Nombre=$request->get('Nombre');
        //$categoria->descripcion=$request->get('descripcion');
        //$categoria->condicion='1';
        $cliente->save();
        return Redirect::to('almacen/cliente');
    }
    public function show($id)
    {
        return view("almacen.cliente.show",["cliente"=>CLiente::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view("almacen.cliente.edit",["cliente"=>CLiente::findOrFail($id)]);
    }
    public function update(ClienteFormRequest $request,$id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente->CI=$request->get('CI');
        $cliente->Nombre=$request->get('Nombre');
        //$categoria->descripcion=$request->get('descripcion');
        $cliente->update();
        return Redirect::to('almacen/cliente');
    }
    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente->CI='0';
        $cliente->update();
        return Redirect::to('almacen/cliente');
    }
}
