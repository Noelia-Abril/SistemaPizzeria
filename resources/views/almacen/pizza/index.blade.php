@extends('layouts.admin2')
@section('contenido2')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Listado de Pizzas <a href="pizza/create"><button class="btn btn-success">Nuevo</button></a>   <a href="../ReportePizza.php"><button class="btn btn-info">Reporte de Pizzas</button></a></h3>
		<br>
		@include('almacen.pizza.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Descripcion</th>
					<th>Existencia</th>
					<th>Imagen</th>
					<th>Estado</th>
					<th>Opciones</th>
				</thead>
				@foreach($pizzas as $pz)
				<tr>
					<td>{{ $pz->Cod_Pz}}</td>
					<td>{{ $pz->PNombre}}</td>
					<td>{{ $pz->Precio}}</td>
					<td>{{ $pz->Descripcion}}</td>
					<td>{{ $pz->Existencias}}</td>
					
					<td>
						<img src="{{asset('imagenes/pizzas/'.$pz->Imagen)}}" alt=" " height="200px" width="200px" class="img-thumbnail">
					</td>

					<td>{{ $pz->estado}}</td>
					
					<td>

						<a href="{{URL::action('PizzaController@edit',$pz->Cod_Pz)}}"><button class="btn btn-info">Editar</button></a>
						<a href="" data-target="#modal-delete-{{$pz->Cod_Pz}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('almacen.pizza.modal')
				@endforeach			
			</table>
		</div>
		{{$pizzas->render()}}
	</div>
</div>
@endsection