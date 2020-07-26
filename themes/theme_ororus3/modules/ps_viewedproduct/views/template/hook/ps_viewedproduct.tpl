{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<section class="view-products">
	<div class="pos_title">
		<h2>{l s='Viewed products' d='Shop.Theme.Catalog'}</h2>
    </div>
 	<div class=" pos_content">
		<div class="view-productslide owl-carousel">
		{foreach from=$products item=product name=myLoop}
		{if $smarty.foreach.myLoop.index % 4 == 0 || $smarty.foreach.myLoop.first }
		<div class="item-product">
		{/if}
		  <article class="js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
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
				</div>
				<div class="product_desc">
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
						  {if $product.has_discount}
							{if $product.discount_type === 'percentage'}
							  <span class="discount-percentage discount-product">{$product.discount_percentage}</span>
							{elseif $product.discount_type === 'amount'}
							  <span class="discount-amount discount-product">{$product.discount_amount_to_display}</span>
							{/if}
						  {/if}
						  {hook h='displayProductPriceBlock' product=$product type='unit_price'}

						  {hook h='displayProductPriceBlock' product=$product type='weight'}
						</div>
					  {/if}
					{/block}
				</div>
			</article>
			{if $smarty.foreach.myLoop.iteration % 4 == 0 || $smarty.foreach.myLoop.last  }
			</div>
			{/if}
		{/foreach}
		</div>
    </div>
</section>
<script>
$(document).ready(function() {
var owl = $(".view-productslide");
		owl.owlCarousel({
		autoPlay : false ,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		nav: false,
		dots : true,	
		responsive:{
			0:{
				items:1,
			},
			480:{
				items:1,
			},
			768:{
				items:1,
				nav:false,
			},
			992:{
				items:1,
			},
			1200:{
				items:1,
			}
		}
		
	});
});
</script>