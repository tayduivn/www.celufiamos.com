<div id="product-list">
	<div class="row">
		{if $products}
			{foreach from=$products item=product}
				<div class="col-md-4 producto mb-3">
					<img src="{$product.product_image}" class="img-responsive">
					<h3 class="col-12" style="text-align:center">{$product.name}</h3>
					<p style="text-align:center">{Tools::displayPrice($product.price)}</p>
					{if ($product.combinations)}
						<button data-id="{$product.id_product}" data-product="{$product.name}" data-toggle="modal" data-target="#modal-combination" data-combination="{json_encode($product.combinations)}" data-product="{$product.name}" class="choose-combination btn btn-light w-100">SELECCIONAR COMBINACION</button>
						{else}
						<button data-id="{$product.id_product}" data-product="{$product.name}" class="choose-product btn btn-light w-100">SELECCIONAR</button>
					{/if}
				</div>
			{/foreach}
		{else}

		{/if}
	</div>
</div>