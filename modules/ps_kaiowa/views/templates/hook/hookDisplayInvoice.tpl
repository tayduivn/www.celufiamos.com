<table id="summary-tab" width="100%" class="product" border="0" cellpadding="1" cellspacing="1">
	<thead>
		<tr>
			<th colspan="3" class="product header small"> HISTORIAL DE PAGO (CUOTAS) </th>
		</tr>		
		<tr>
			<th class="product header small">Fecha de pago</th>
			<th class="product header small">Cuota Nro. </th>
			<th class="product header small">Valor </th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$cuotes item=cuota}
		<tr>
			<td align="center" class="product header small">{$cuota['date_add']}</td>
			<td align="center" class="product header small">{$cuota['ostate_name']}</td>
			<td align="center" class="product header small">{if $cuota['id_order_state'] != 27 }{Tools::displayPrice($vlrcuota)} {else} - {/if}</td>
		</tr>
		{/foreach}
	</tbody>

</table>