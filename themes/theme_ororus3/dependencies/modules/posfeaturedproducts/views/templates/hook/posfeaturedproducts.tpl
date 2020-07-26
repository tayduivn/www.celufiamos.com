<div class="col-xs-12 col-md-12 col-lg-4">
	<div class="pos-featured-products  product_block_container" 
		data-items="{$slider_options.number_item}" 
		data-speed="{$slider_options.speed_slide}"
		data-autoplay="{$slider_options.auto_play}"
		data-time="{$slider_options.auto_time}"
		data-arrow="{$slider_options.show_arrow}"
		data-pagination="{$slider_options.show_pagination}"
		data-move="{$slider_options.move}"
		data-pausehover="{$slider_options.pausehover}"
		data-md="{$slider_options.items_md}"
		data-sm="{$slider_options.items_sm}"
		data-xs="{$slider_options.items_xs}"
		data-xxs="{$slider_options.items_xxs}">
			{if $title}
			<div class="pos_title">
				 <h2>
					{$title}
				</h2>	
			</div>
			{/if}
			{$rows= $slider_options.rows}
		
			<div class=" pos_content row">
				<div class="feature-item owl-carousel">
				{foreach from=$products item=product name=myLoop}
					{if $smarty.foreach.myLoop.index % $rows == 0 || $smarty.foreach.myLoop.first }
					<div class="item-product">
					{/if}
						<article class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
							<div class="img_block">
							  {block name='product_thumbnail'}
								<a href="{$product.url}" class="thumbnail product-thumbnail">
								  <img
									src = "{$product.cover.bySize.home_default.url}"
									alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
									data-full-size-image-url = "{$product.cover.large.url}"
								  >
								</a>
							  {/block}
								
								<div class="quick-view">
									{block name='quick_view'}
									<a class="quick_view" href="#" data-link-action="quickview">
									<i class="fa fa-search"></i> {l s='Quick view' d='Shop.Theme.Actions'}
									</a>
									{/block}
								</div>
							</div>
							<div class="product_desc">
								{block name='product_name'}
								  <h1 itemprop="name"><a href="{$product.url}" class="product_name">{$product.name|truncate:40:'...'}</a></h1>
								{/block}
								{block name='product_flags'}
								<ul class="product-flag-feature">
								{foreach from=$product.flags item=flag}
									<li class="{$flag.type}"><span>{$flag.label}</span></li>
								{/foreach}
								</ul>
								{/block}
								 {block name='product_price_and_shipping'}
								  {if $product.show_price}
									<div class="product-price-and-shipping-feature">
									  {if $product.has_discount}
										{if $product.discount_type === 'percentage'}
										  <span class="discount-percentage discount-product">{l s='up to' mod='posfeaturedproducts'} <span>{$product.discount_percentage}</span> {l s='off' mod='posfeaturedproducts'}</span>
										{elseif $product.discount_type === 'amount'}
										  <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
										{/if}
									  {/if}
									 
									</div>
								  {/if}
								{/block}
							</div>
						  </article>
					{if $smarty.foreach.myLoop.iteration % $rows == 0 || $smarty.foreach.myLoop.last  }
					</div>
					{/if}
				{/foreach}
				</div>
			</div>
	</div>
</div>