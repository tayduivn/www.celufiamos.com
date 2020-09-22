<div class="accordion" id="accordionExample">
  {foreach from=$paymentList item=list}
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <div class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#{$list.order->reference}" aria-expanded="true" aria-controls="collapseOne">
          <div class="row">
          	<div class="col-md-9" style="text-align:left">
          		{$list.order->invoice_date} {$list.order->reference} - {$list.customer->firstname} {$list.customer->firstname2} {$list.customer->lastname} {$list.customer->lastname2}
          	</div>
          	<div class="col-md-3" style="text-align:right; color: #000; font-weight: bold">{Tools::displayPrice($list.order->total_paid)}</div>
          </div>
        </div>
      </h2>
    </div>
    <div id="{$list.order->reference}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body p-3">
      	<ul class="list-group">
			    <li class="list-group-item">
			    	<div class="row">
			    		<div class="col-xs-12 col-md-6"><b>Producto</b></div>
			    		<div class="col-xs-12 col-md-6" style="text-align: right">{$list.details->product_name}</div>
			    		<div class="col-xs-12 col-md-6"><b>Cantidad</b></div>
			    		<div class="col-xs-12 col-md-6" style="text-align: right">{$list.details->product_quantity}</div>
			    		<div class="col-xs-12 col-md-6"><b>Referencia</b></div>
			    		<div class="col-xs-12 col-md-6" style="text-align: right">{$list.details->product_reference}</div>
			    	</div>
			    </li>
			  </ul>
      </div>
    </div>
  </div>
  {/foreach}
</div>