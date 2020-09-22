{if ($ordeForm)}
	<hr class="col-md-12">

	<div class="row">
		<div class="col-md-8"><h3>{$ordeForm.name}</h3></div>
		<div class="col-md-4" style="text-align:center"><h3>{Tools::displayPrice($ordeForm.cuota)}</h3></div>
	</div>

	<hr class="col-md-12">
	<div class="row">
		<div class="col-md-10">
			<div class="form-group">
	    	<input type="email" class="form-control" id="search_document" placeholder="Producto">
	  	</div>
		</div>
		<div class="col-md-2">
			<button type="button" id="search-customer" class="btn btn-success w-100">BUSCAR</button>
		</div>
	</div>
	<hr class="col-md-12">
	{include file="modules/ps_store/views/templates/front/product-list.tpl" products=$ordeForm.products}
{/if}