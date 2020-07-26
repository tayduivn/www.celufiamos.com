<div class="quotes-price">
	{if $type == 'weight'}
		{l s='Valor total a pagar' d='Modules.Kaiowa.Front'} {$total_price}
	{/if}
	{if $type == 'weight_cart'}
		<div>{l s='Valor total a pagar' d='Modules.Kaiowa.Front'}</div>{$total_price}
	{/if}
	{if $type == 'before_price'}
		{$cuotas}{l s=' cuotas mensuales de:' d='Modules.Kaiowa.Front'}
	{/if}
</div>