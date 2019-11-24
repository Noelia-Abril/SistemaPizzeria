@extends ('layouts.admin2')
@section ('contenido2')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Empleado</h3>
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
			{!!Form::open(array('url'=>'almacen/empleado','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
            <div class="row"> 
           		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label for="CI">CI</label>
                              <input type="text" name="CI" required value="{{old('CI')}}" class="form-control" placeholder="CI del Empleado...">
                        </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
            			<label for="Nombre">Nombre</label>
            			<input type="text" name="Nombre" required value="{{old('Nombre')}}" class="form-control" placeholder="Nombre del Empleado...">
            		</div>
            	</div>
            
            	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            		<div class="form-group">
            			<label for="Cargo">Cargo</label>
            			<input type="text" name="Cargo" required value="{{old('Cargo')}}" class="form-control" placeholder="Cargo del Empleado...">
            		</div>
            	</div>
            	
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label>id</label>
                              <select name="id" class="form-control">
                                    @foreach($userss as $us)
                                          <option value="{{$us->id}}">{{$us->name}}</option>
                                    @endforeach
                              </select>
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