<?php

namespace SPizzeria\Http\Controllers;

use Illuminate\Http\Request;

use SPizzeria\Http\Requests;
use SPizzeria\Empleado;
use Illuminate\Support\Facades\Redirect;
use SPizzeria\Http\Requests\EmpleadoFormRequest;
use DB;
class EmpleadoController extends Controller
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
            $empleados=DB::table('empleado as e')
            ->join('users as u','e.id','=','u.id')
            ->select('e.cod_empleado','e.CI','e.Nombre','e.Cargo','u.name as NombreUsuario')
            ->where('e.Nombre','LIKE','%'.$query.'%')
            ->where ('e.CI','!=','0')
            ->orderBy('e.cod_empleado','asc')
            ->paginate(5);
            return view('almacen.empleado.index',["empleados"=>$empleados,"searchText"=>$query]);
        }
    }
    public function create()
    {
        $userss=DB::table('users')->get();
        return view("almacen.empleado.create",["userss"=>$userss]);
    }
    public function store (EmpleadoFormRequest $request)
    {
        $empleado=new empleado;
        //$pizza->IdCliente=$request->get('IdCliente')   
        $empleado->CI=$request->get('CI');
        $empleado->Nombre=$request->get('Nombre');
        $empleado->Carrgo=$request->get('Cargo');
        $empleado->id=$request->get('id');
        $empleado->save();
        return Redirect::to('almacen/empleado');
    }
    public function show($id)
    {
        return view("almacen.empleado.show",["empleado"=>Empleado::findOrFail($id)]);
    }
    public function edit($id)
    {
    	$empleado=Empleado::findOrFail($id);
    	$userss=DB::table('users')->get();
        return view("almacen.empleado.edit",["empleado"=>$empleado,"userss"=>$userss]);
    }
    public function update(EmpleadoFormRequest $request,$id)
    {
        $empleado=Empleado::findOrFail($id); 
        $empleado->CI=$request->get('CI');
        $empleado->Nombre=$request->get('Nombre');
        $empleado->Cargo=$request->get('Cargo');
        $empleado->id=$request->get('id');
        
        $empleado->update();
        return Redirect::to('almacen/empleado');
    }
    public function destroy($id)
    {
        $empleado=Empleado::findOrFail($id);
        $empleado->CI='0';
        $empleado->update();
        return Redirect::to('almacen/empleado');
    }
}