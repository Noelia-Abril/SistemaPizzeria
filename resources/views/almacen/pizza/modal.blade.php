<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$pz->Cod_Pz}}">
	{{Form::Open(array('action'=>array('PizzaController@destroy',$pz->Cod_Pz),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Eliminar Pizza</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
				
			</div>
			<div class="modal-body">
				<p>Confirme si desea Eliminar la Pizza Seleccionada</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>
		</div> 
	</div>
	{{Form::Close()}}	
</div>