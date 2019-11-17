@extends ('layouts.admin3')
@section ('contenido3')
	<div class="row">
		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
			<h3>REGISTRO CLIENTE</h3>
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

			{!!Form::open(array('url'=>'almacen/inicio','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="CI">CI</label>
            	<input type="text" name="CI" class="form-control" placeholder="CI...">
            </div>
            <div class="form-group">
            	<label for="Nombre">Nombre</label>
            	<input type="text" name="Nombre" class="form-control" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection