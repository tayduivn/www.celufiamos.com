<div class="row">
	<div class="col-md-12 mb-1">
		<button type="button" id="new-customer" class="btn btn-success">NUEVO CLIENTE</button>

	</div>
	<div class="col-md-10">
		<div class="form-group">
    	<input type="number" class="form-control" id="search_document" placeholder="Ingrese el documento a buscar">
  	</div>
	</div>
	<div class="col-md-2">
		<button type="button" id="search-customer" class="btn btn-primary w-100">BUSCAR</button>
	</div>
</div>
<div id="result"></div>

<!-- MODAL -->
{include file="modules/ps_store/views/templates/front/new-customer-modal.tpl" }
<!-- fin modal -->
{include file="modules/ps_store/views/templates/front/customer-cuota.tpl" ordeForm=$ordeForm}