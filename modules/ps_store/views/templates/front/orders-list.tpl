{if $orders}
<div class="accordion" id="accordionExample">
  {foreach from=$orders item=order}
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <div class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#{$order['reference']}" aria-expanded="true" aria-controls="collapseOne">
          <div class="row">
          	<div class="col-md-9" style="text-align:left">
          		{$order['invoice_date']} {$order['reference']}
          		<br/><small>{$order['customer']->firstname} {$order['customer']->firstname2} {$order['customer']->lastname}{$order['customer']->lastname2}</small>
          		<br/><small>({$order.details['product_quantity']}) {$order.details['product_reference']} -{$order.details['product_name']}</small><br>
          	</div>
          	<div class="col-md-3" style="text-align:center; color: #000; font-weight: bold">
          		{Tools::displayPrice($order['total_paid'])}
              <br>{$order['current_cuote']}
          	</div>
          </div>
        </div>
      </h2>
    </div>
    <div id="{$order['reference']}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-md-12 pb-3">
            <a href="#" data-toggle="modal" data-order="{$order['id_order']}" data-reference="{$order['id_order']}" data-target="#paymentSave" class="btn btn-success">Registrar Pago</a>
          </div>
        </div>
			  {$order['payment'] nofilter}
      </div>
    </div>	
  </div>
  {/foreach}
</div>
{include file="modules/ps_store/views/templates/front/modal-payment.tpl" }
{else}
<div class="alert alert-info" role="alert">
	No se encontraron ordenes
</div>
{/if}

