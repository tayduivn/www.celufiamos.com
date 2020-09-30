<div class="order-payment">
	<div class="row" style="margin-bottom: 50px">
		<h2 class="col-md-12">REGISTRAR PAGO</h2>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h3><b>PEDIDO: {$reference}</b></h3> <br>
			<h3><b>FECHA: {date('Y-m-d H:i:s')}</b></h3> 
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table" style="margin-top:30px">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Referencia</th>
			      <th scope="col">Producto</th>
			      <th scope="col">Precio</th>
			      <th scope="col">Cantidad</th>
			      <th scope="col">Total</th>
			    </tr>
			  </thead>
			  <tbody>
			  	{foreach from=$products item=product}
			    <tr>
			      <th scope="row">{$product.reference}</th>
			      <td>{$product.product_name}</td>
			      <td>{Tools::displayPrice($product.product_price)}</td>
			      <td>{$product.product_quantity}</td>
			      <td>{Tools::displayPrice($product.price)}</td>
			    </tr>
			    {/foreach}
			  </tbody>
			</table>
			<table id="payment-approved" class="table hidden" style="margin-top:30px; width: 50%; border: 1px solid #CCC; float: right">
			  <tr>
			    <th coldspan="2"></th>
			  </tr>
			  <tr>
			    <th><b>Pago Aceptado</b></th>
			    <th><b id="date-payment"></b></th>
			  </tr>
			  <tr>
			    <td>Número de Cuotas Pagadas</td>
			    <td><b><span id="payment-cuotas"></span></b> de {Configuration::get('BANK_KAIOWA_CUOTAS')}</td>
			  </tr>
			  <tr>
			    <td>Total</td>
			    <td><h3 id="total-payment"><h3></td>
			  </tr>
			</table>			
		</div>
	</div>
	<div class="row" style="margin-top: 30px; text-align: right">
		<div class="col-md-12">
			<button type="button" id="print" data-reference="{$id}" onclick="window.print()" class="btn btn-primary hidden">IMPRIMIR</button>
			<button type="button" data-reference="{$id}" id="cancel-payment" class="btn btn-primary">CANCELAR ORDEN</button>
			<button type="button" data-reference="{$id}" id="open-payment" class="btn btn-success" data-toggle="modal" data-target="#paymentSave">REGISTRAR PAGO</button>
		</div>
	</div>
</div>
{include file="modules/ps_store/views/templates/front/modal-payment.tpl"}