@extends('layouts.admin2')
@section('contenido2')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<h3>Listado de Ventas <a href="../ReporteVenta.php"><button class="btn btn-info">Reporte de Ventas</button></a></h3>
		<br>
		@include('almacen.venta.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nº Pedido</th>
					<th>Cliente</th>
					<th>Pizza</th>
					<th>Ingrediente</th>
					<th>Cantidad</th>
					<th>Descuento</th>
					<th>SubTotal</th>
					<th>Fecha</th>
					<th>Total</th>
				</thead>
				@foreach($ventas as $v)
				<tr>
					<td>{{ $v->IdDetalle}}</td>
					<td>{{ $v->Pedido_NumPedido}}</td>
					<td>{{ $v->NombreCliente}}</td>
					<td>{{ $v->NombrePizza}}</td>
					<td>{{ $v->NombreIngrediente}}</td>
					<td>{{ $v->Cant}}</td>
					<td>{{ $v->Descuento}}</td>
					<td>{{ $v->SubTotal}}</td>
					<td>{{ $v->Fecha}}</td>
					<td>{{ $v->Total}}</td>
				</tr>
				@include('almacen.venta.modal')
				@endforeach			
			</table>
		</div>
		{{$ventas->render()}}
	</div>
</div>
@endsection