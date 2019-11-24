@extends('layouts.admin2')
@section('contenido2')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Informacion del Empleado: {{ $empleado->Nombre}}</h3>
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
			{!!Form::model($empleado,['method'=>'PATCH','route'=>['almacen.empleado.update',$empleado->cod_empleado],'files'=>'true'])!!}
			{{Form::token()}}
	<div class="row"> 
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label for="CI">CI</label>
                              <input type="text" name="CI" required value="{{$empleado->CI}}" class="form-control">
                        </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label for="Nombre">Nombre</label>
                              <input type="text" name="Nombre" required value="{{$empleado->Nombre}}" class="form-control">
                        </div>
                  </div>
            
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label for="Cargo">Cargo</label>
                              <input type="text" name="Cargo" required value="{{$empleado->Cargo}}" class="form-control">
                        </div>
                  </div>
               
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label>id</label>
                              <select name="id" class="form-control">
                                    @foreach($userss as $us)
                                          @if($us->id==$empleado->id)
                                                <option value="{{$us->id}}" selected>{{$us->name}}</option>
                                          @else
                                               <option value="{{$us->id}}">{{$us->name}}</option> 
                                          @endif
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