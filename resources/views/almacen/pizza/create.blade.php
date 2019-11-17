@extends ('layouts.admin2')
@section ('contenido2')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Pizza</h3>
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
			{!!Form::open(array('url'=>'almacen/pizza','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
            <div class="row"> 
           		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
            			<label for="PNombre">PNombre</label>
            			<input type="text" name="PNombre" required value="{{old('PNombre')}}" class="form-control" placeholder="Nombre Pizza...">
            		</div>
            	</div>
            
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
            			<label for="Precio">Precio</label>
            			<input type="text" name="Precio" required value="{{old('Precio')}}" class="form-control" placeholder="Precio Pizza...">
            		</div>
            	</div>
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
            			<label for="Cod_Pz">Cod_Pz</label>
            			<input type="text" name="Cod_Pz" required value="{{old('Cod_Pz')}}" class="form-control" placeholder="Codigo Pizza...">
            		</div>
            	</div>
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
            			<label for="Existencias">Existencias</label>
            			<input type="text" name="Existencias" required value="{{old('Existencias')}}" class="form-control" placeholder="Existencias de la Pizza...">
            		</div>
            	</div>
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
            			<label for="Descripcion">Descripcion</label>
            			<input type="text" name="Descripcion" required value="{{old('Descripcion')}}" class="form-control" placeholder="Descripcion de la Pizza...">
            		</div>
            	</div>
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
            			<label for="Imagen">Imagen</label>
            			<input type="file" name="Imagen" class="form-control">
            		</div>
            	</div>
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
            			<button class="btn btn-primary" type="submit">Guardar</button>
            			<button class="btn btn-danger" type="reset">Cancelar</button>
            		</div>	
            	</div>
            </div>
			{!!Form::close()!!}		

@endsection