@extends('layouts.admin2')
@section('contenido2')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Informacion del Ingrediente: {{ $ingrediente->Nombre}}</h3>
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
			{!!Form::model($ingrediente,['method'=>'PATCH','route'=>['almacen.ingrediente.update',$ingrediente->idIngrediente],'files'=>'true'])!!}
			{{Form::token()}}
	<div class="row"> 
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label for="idIngrediente">IdIngrediente</label>
                              <input type="text" name="idIngrediente" required value="{{$ingrediente->idIngrediente}}" class="form-control">
                        </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label for="Nombre">Nombre</label>
                              <input type="text" name="Nombre" required value="{{$ingrediente->Nombre}}" class="form-control">
                        </div>
                  </div>
            
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label for="Cantidad">Cantidad</label>
                              <input type="text" name="Cantidad" required value="{{$ingrediente->Cantidad}}" class="form-control">
                        </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label for="Precio">Precio</label>
                              <input type="text" name="Precio" required value="{{$ingrediente->Precio}}" class="form-control">
                        </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label>Pizza_Cod_Pz</label>
                              <select name="Pizza_Cod_Pz" class="form-control">
                                    @foreach($pizzas as $pz)
                                          @if($pz->Cod_Pz==$ingrediente->Pizza_Cod_Pz)
                                                <option value="{{$pz->Cod_Pz}}" selected>{{$pz->PNombre}}</option>
                                          @else
                                               <option value="{{$pz->Cod_Pz}}">{{$pz->PNombre}}</option> 
                                          @endif
                                    @endforeach
                              </select>
                        </div>
                  </div>
                  
                  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="form-group">
                              <label for="Imagen">Imagen</label>
                              <input type="file" name="Imagen" class="form-control">
                              @if(($ingrediente->Imagen)!="")
                                    <img src="{{asset('imagenes/ingredientes/'.$ingrediente->Imagen)}}" height="200px" width="200px">
                              @endif
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