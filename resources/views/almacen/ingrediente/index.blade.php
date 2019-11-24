@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Listado de Ingredientes <a href="ingrediente/create"><button class="btn btn-success">Nuevo</button></a>   <a href="../ReporteIngrediente.php"><button class="btn btn-info">Reporte Ingredientes</button></a></h3>
		<br>
		@include('almacen.ingrediente.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Imagen</th>
					<th>Cantidad</th>
					<th>Precio</th>
					<th>Pizza</th>
					<th>Opciones</th>
				</thead>
				@foreach($ingredientes as $in)
				<tr>
					<td>{{ $in->idIngrediente}}</td>
					<td>{{ $in->Nombre}}</td>
					<td>
						<img src="{{asset('imagenes/ingredientes/'.$in->Imagen)}}" alt=" " height="100px" width="100px" class="img-thumbnail">
					</td>
					<td>{{ $in->Cantidad}}</td>
					<td>{{ $in->Precio}}</td>
					<td>{{ $in->NombrePizza}}</td>
					<td>
						<a href="{{URL::action('IngredienteController@edit',$in->idIngrediente)}}"><button class="btn btn-info">Editar</button></a>
						<a href="" data-target="#modal-delete-{{$in->idIngrediente}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('almacen.ingrediente.modal')
				@endforeach			
			</table>
		</div>
		{{$ingredientes->render()}}
	</div>
</div>
@endsection