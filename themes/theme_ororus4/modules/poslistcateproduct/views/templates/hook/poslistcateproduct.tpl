{$count=0}
{foreach from=$productCates item=productCate name=poslistcateproduct}
	<div class="poslistcateproduct poslistcateproduct_{$count} product_container"
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
		<div class="container">
			<div class="ps_title">
				<div class="pos_title">	
				<h2>
					<span>{$productCate.category_name}</span>
				
				</h2>
				</div>
				{if $productCate.list_subcategories}
				<ul class="subcategories-list">
					{foreach from=$productCate.list_subcategories item=subcategories}
					<li><a href="{$link->getCategoryLink($subcategories['id_category'])}" target="_blank">{$subcategories.name}</a></li>
					{/foreach}
				</ul>
				
				{/if}
			</div>
			<div class="listcateproduct-products">
				<div class="pos_content">		
					<div class="listcateSlide">		
						<div class="cate_right owl-carousel">
							{$j=0}
							{foreach from=$productCate.product item=product name=myLoop}
							{if $j > 0}							
								{if ($smarty.foreach.myLoop.index + 1) % 2 == 0 }
									<div class="item-product">
								{/if}
									{include file="catalog/_partials/miniatures/product.tpl" product=$product}
								{if ($smarty.foreach.myLoop.iteration + 1) %  2 == 0 || $smarty.foreach.myLoop.last}
									</div>
								{/if}							
							{/if}
							{$j = $j+1}  
							{if $j == 20}{break}{/if}
							{/foreach}					
						</div>	
					</div>
				</div>
			</div>	
		</div>	
	</div>
	{$count= $count+1}
{/foreach}
