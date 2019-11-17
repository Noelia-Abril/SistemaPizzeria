@extends ('layouts.admin2')
@section ('contenido2')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Ingrediente</h3>
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
			{!!Form::open(array('url'=>'almacen/ingrediente','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
            <div class="row"> 
           		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label for="idIngrediente">IdIngrediente</label>
                              <input type="text" name="idIngrediente" required value="{{old('idIngrediente')}}" class="form-control" placeholder="ID del Ingrediente...">
                        </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
            			<label for="Nombre">Nombre</label>
            			<input type="text" name="Nombre" required value="{{old('Nombre')}}" class="form-control" placeholder="Nombre Ingrediente...">
            		</div>
            	</div>
            
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
            			<label for="Cantidad">Cantidad</label>
            			<input type="text" name="Cantidad" required value="{{old('Cantidad')}}" class="form-control" placeholder="Cantidad Ingrediente...">
            		</div>
            	</div>
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
            			<label for="Precio">Precio</label>
            			<input type="text" name="Precio" required value="{{old('Precio')}}" class="form-control" placeholder="Precio del Ingrediente...">
            		</div>
            	</div>
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label>Pizza_Cod_Pz</label>
                              <select name="Pizza_Cod_Pz" class="form-control">
                                    @foreach($pizzas as $pz)
                                          <option value="{{$pz->Cod_Pz}}">{{$pz->PNombre}}</option>
                                    @endforeach
                              </select>
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