@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Listado de Empleados<a href="empleado/create"><button class="btn btn-success">Nuevo</button></a></h3>
		<br>
		@include('almacen.empleado.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>CI</th>
					<th>Nombre</th>
					<th>Cargo</th>
					<th>Id_Usuario</th>
					<th>Opciones</th>
				</thead>
				@foreach($empleados as $em)
				<tr>
					<td>{{ $em->cod_empleado}}</td>
					<td>{{ $em->CI}}</td>
					<td>{{ $em->Nombre}}</td>
					<td>{{ $em->Cargo}}</td>
					<td>{{ $em->id}}</td>
					<td>
						<a href="{{URL::action('EmpleadoController@edit',$em->cod_empleado)}}"><button class="btn btn-info">Editar</button></a>
						<a href="" data-target="#modal-delete-{{$em->cod_empleado}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('almacen.empleado.modal')
				@endforeach			
			</table>
		</div>
		{{$empleados->render()}}
	</div>
</div>
@endsection