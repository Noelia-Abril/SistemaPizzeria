@extends('layouts.admin2')
@section('contenido2')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3>Editar Informacion del Cliente: {{ $cliente->Nombre}}</h3>
			<br>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
			{!!Form::model($cliente,['method'=>'PATCH','route'=>['almacen.cliente.update',$cliente->IdCliente]])!!}
			{{Form::token()}}
			<div class="form-group">
				<label for="CI">CI</label>
            	<input type="text" name="CI" class="form-control" value="{{$cliente->CI}}" placeholder="CI...">
            </div>
            <div class="form-group">
            	<label for="Nombre">Nombre</label>
            	<input type="text" name="Nombre" class="form-control" value="{{$cliente->Nombre}}" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
			</div>
			{!!Form::close()!!}
	</div>
@endsection