
<div class="tab-category-container-slider"  
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
		
		<div class="tab-category">	
			<div class="container">
			<div class="row pos_content1">	
				{$rows= $slider_options.rows}	
				<div class="tab1_container"> 
				{foreach from=$productCates item=productCate name=postabcateslider}				
					<div id="tab_{$productCate.id}" class="tab_categorys col-lg-3">
						<div class ="pos_title">
							{if $title}				
							<h2>
								<span>{$productCate.name}</span>
							</h2>
							{/if}							
						</div> 	
						<div class="productTabCategorySlider">
						{foreach from=$products item=product name=myLoop}
						{if $smarty.foreach.myLoop.index % $rows == 0 || $smarty.foreach.myLoop.first }
						<div class="item-product">
							{/if}			
									<article class="js-product-miniature item_in" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
										<div class="img_block">
											{block name='product_thumbnail'}
											  <a href="{$product.url}" class="thumbnail product-thumbnail">
												<img
												  src = "{$product.cover.bySize.small_default.url}"
												  alt = "{$product.cover.legend}"
												  data-full-size-image-url = "{$product.cover.large.url}"
												>
											  </a>
											{/block}				
										</div>
										<div class="product_desc">
										   {if isset($product.id_manufacturer)}
											<div class="manufacturer"><a href="{$link->getManufacturerLink($product.id_manufacturer)}">{$product.manufacturer_name|strip_tags:'UTF-8'|escape:'html':'UTF-8'}</a></div>
											{/if}
										  {block name='product_name'}
										   <h4><a href="{$product.url}" title="{$product.name}" itemprop="name" class="product_name">{$product.name}</a></h4>
										  {/block}
											<div class="hook-reviews">
												{hook h='displayProductListReviews' product=$product}
											</div>	

										  {block name='product_price_and_shipping'}
											{if $product.show_price}
											  <div class="product-price-and-shipping">
												{if $product.has_discount}
												  {hook h='displayProductPriceBlock' product=$product type="old_price"}

												  <span class="regular-price">{$product.regular_price}</span>
												<!--   {if $product.discount_type === 'percentage'}
													<span class="discount-percentage">{$product.discount_percentage}</span>
												  {/if} -->
												{/if}

												{hook h='displayProductPriceBlock' product=$product type="before_price"}

												<span itemprop="price" class="price">{$product.price}</span>

												{hook h='displayProductPriceBlock' product=$product type='unit_price'}

												{hook h='displayProductPriceBlock' product=$product type='weight'}
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
				{/foreach}	
				 </div> <!-- .tab_container -->
			</div>
			</div>
		</div>		
	
</div>
