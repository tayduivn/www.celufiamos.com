{extends file='customer/page.tpl'}
{block name='page_content'}
  {if !$paymentForm}
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <a class="nav-link active" id="sell-tab" data-toggle="tab" href="#sell" role="tab" aria-controls="sell" aria-selected="true">VENDER</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="pay-tab" data-toggle="tab" href="#pay" role="tab" aria-controls="pay" aria-selected="false">PAGOS</a>
    </li>
    <li class="nav-item" role="presentation">
      <a class="nav-link" id="paymentlist-tab" data-toggle="tab" href="#paymentlist" role="tab" aria-controls="paymentlist" aria-selected="false">MIS VENTAS</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane show active" id="sell" role="tabpanel" aria-labelledby="sell-tab">
      {include file="modules/ps_store/views/templates/front/sell.tpl" states=$states genders=$genders}
    </div>
    <div class="tab-pane fade" id="pay" role="tabpanel" aria-labelledby="pay-tab">
      {include file="modules/ps_store/views/templates/front/pay.tpl" }
    </div>
    <div class="tab-pane fade" id="paymentlist" role="tabpanel" aria-labelledby="paymentlist-tab">
      {include file="modules/ps_store/views/templates/front/list.tpl" paymentList=$paymentList}
    </div>
  </div>
  {else}
    {include file="modules/ps_store/views/templates/front/payment.tpl"}
  {/if}
{/block}
