
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

			<div class="row pos_content1">	
				{$rows= $slider_options.rows}	
				<div class="tab1_container"> 
				{foreach from=$productCates item=productCate name=postabcateslider}				
					<div id="tab_{$productCate.id}" class="tab_categorys col-lg-6">
						<div class ="pos_title">
							{if $title}				
							<h2>
								<span>{$productCate.name}</span>
							</h2>
							{/if}							
						</div> 	
						<div class="productTabCategorySlider owl-carousel">
						{foreach from=$productCate.products item=product name=myLoop}
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
	  	{block name='product_flags'}
        <ul class="product-flag">
			{if $product.show_price}
			   {if $product.has_discount}
				   {if $product.discount_type === 'percentage'}
					  <li class="discount-percentage">{$product.discount_percentage}</li>
					{/if}
				{/if}
			{/if}
			{foreach from=$product.flags item=flag}
				<li class=" {$flag.type}">{$flag.label}</li>
			{/foreach}
        </ul>
      {/block}
		
			<ul class="add-to-links">
				<li class="cart">
					{include file='catalog/_partials/customize/button-cart.tpl' product=$product}
				</li>
				<li>
					<a href="#" class="quick-view" data-link-action="quickview" title="{l s='Quick view' d='Shop.Theme.Actions'}">{l s='Quick view' d='Shop.Theme.Actions'}</a>
				</li>
				<li>
					<a href="{$product.url}" class="links-details" title="{l s='Details' d='Shop.Theme.Actions'}">{l s='Details' d='Shop.Theme.Actions'}</a>
				</li>
			</ul>
		
	</div>
    <div class="product_desc">
		{block name='product_reviews'}
			<div class="hook-reviews">
			{hook h='displayProductListReviews' product=$product}
			</div>
        {/block}
        {block name='product_name'}
          <h1 itemprop="name"><a href="{$product.url}" class="product_name">{$product.name|truncate:40:'...'}</a></h1>
        {/block}
		
        {block name='product_price_and_shipping'}
          {if $product.show_price}
            <div class="product-price-and-shipping">
              {if $product.has_discount}
                {hook h='displayProductPriceBlock' product=$product type="old_price"}

                <span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
                <span class="regular-price">{$product.regular_price}</span>
              {/if}

              {hook h='displayProductPriceBlock' product=$product type="before_price"}

              <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
              <span itemprop="price" class="price">{$product.price}</span>
			  <!-- {if $product.has_discount}
                {if $product.discount_type === 'percentage'}
                  <span class="discount-percentage discount-product">{$product.discount_percentage}</span>
                {elseif $product.discount_type === 'amount'}
                  <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
                {/if}
              {/if} -->
              {hook h='displayProductPriceBlock' product=$product type='unit_price'}

              {hook h='displayProductPriceBlock' product=$product type='weight'}
            </div>
          {/if}
        {/block}
		{block name='product_description_short'}
			<div class="product-desc" itemprop="description">{$product.description_short nofilter}</div>
		{/block}
		
		{block name='product_variants'}
		{if $product.main_variants}
		{include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
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

