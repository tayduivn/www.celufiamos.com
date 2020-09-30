{extends file='customer/page.tpl'}

{block name='page_content'}
<div class="page-my-account balance">
	<div id="content">
		<div class="row text-center">
			{if !$has_error}
				<small class="col-lg-12">{l s='Dispones de una cuota de:' d='Shop.Theme.Customeraccount'}</small>
				<h1 class="col-lg-12 balance-title">
					{$cuota}
				</h1>
				<small class="col-lg-12">{l s='Puedes acceder a equipos menores o iguales a este valor:' d='Shop.Theme.Customeraccount'}</small>
				{if $cuota == 0}
				<h5 class="col-lg-12"> {l s='Lo siento, no dispones de una cuota para acceder a nuestro equipos' d='Shop.Theme.Customeraccount'} </h5>
				{else}
				<h5 class="col-lg-12"> {l s='Conoce los equipos a los que puedes acceder' d='Shop.Theme.Customeraccount'} </h5>
				{/if}
				<ul class="allow-category col-lg-12">
					{foreach from=$categories item=category}
	    				<li><a href="{$category.link}">{$category.name}</a></li>
					{/foreach}				
				</ul>
			{else}
				<p class="col-lg-12"> {l s='Lo sentimos, en este momento no podemos consultar la cuota disponible' d='Shop.Theme.Customeraccount'} </p>
	  		{/if}
	  	</div>
  </div>
</div>
{/block}
