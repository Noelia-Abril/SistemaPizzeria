@extends('layouts.admin3')
@section('contenido3')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Listado de Clientes <a href="inicio/create"><button class="btn btn-success">Nuevo</button></a></h3>
		<br>
		@include('almacen.inicio.search')
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
					<th>Opciones</th>
				</thead>
				@foreach($clientes as $cl)
				<tr>
					<td>{{ $cl->IdCliente}}</td>
					<td>{{ $cl->CI}}</td>
					<td>{{ $cl->Nombre}}</td>
					<td>
						<a href="{{URL::action('InicioController@edit',$cl->IdCliente)}}"><button class="btn btn-info">Editar</button></a>
						<a href="" data-target="#modal-delete-{{$cl->IdCliente}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('almacen.inicio.modal')
				@endforeach			
			</table>
		</div>
		{{$clientes->render()}}
	</div>
</div>
@endsection