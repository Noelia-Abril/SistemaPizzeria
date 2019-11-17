@extends('layouts.admin2')
@section('contenido2')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Informacion de la Pizza: {{ $pizza->PNombre}}</h3>
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
		</div>
	</div>
			{!!Form::model($pizza,['method'=>'PATCH','route'=>['almacen.pizza.update',$pizza->Cod_Pz],'files'=>'true'])!!}
			{{Form::token()}}
	<div class="row"> 
           		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            		<div class="form-group">
            			<label for="PNombre">PNombre</label>
            			<input type="text" name="PNombre" required value="{{$pizza->PNombre}}" class="form-control">
            		</div>
            	</div>
            
            	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            		<div class="form-group">
            			<label for="Precio">Precio</label>
            			<input type="text" name="Precio" required value="{{$pizza->Precio}}" class="form-control">
            		</div>
            	</div>
            	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            		<div class="form-group ">
            			<label for="Cod_Pz">Cod_Pz</label>
            			<input type="text" name="Cod_Pz" required value="{{$pizza->Cod_Pz}}" class="form-control">
            		</div>
            	</div>
            	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            		<div class="form-group">
            			<label for="Existencias">Existencias</label>
            			<input type="text" name="Existencias" required value="{{$pizza->Existencias}}" class="form-control">
            		</div>
            	</div>
         		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            		<div class="form-group">
            			<label for="Descripcion">Descripcion</label>
            			<input type="text" name="Descripcion" required value="{{$pizza->Descripcion}}" class="form-control" placeholder="Descripcion de la Pizza...">
            		</div>
            	</div>
            	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            		<div class="form-group">
            			<label for="Imagen">Imagen</label>
            			<input type="file" name="Imagen" class="form-control">
            			@if(($pizza->Imagen)!="")
            				<img src="{{asset('imagenes/pizzas/'.$pizza->Imagen)}}" height="300px" width="300px">
            			@endif
            		</div>
            	</div>
            	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            		<div class="form-group">
            			<button class="btn btn-primary" type="submit">Guardar</button>
            			<button class="btn btn-danger" type="reset">Cancelar</button>
            		</div>	
            	</div>
    </div>
			{!!Form::close()!!}

@endsection