{extends file='customer/page.tpl'}

{block name='page_title'}
  {l s='Pagos' d='Shop.Theme.Customeraccount'}
{/block}


{block name='page_content'}
{if $status}
<div class="page-my-account">
  <div id="content">
    <div class="row">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">{l s='Valor Cuota' d='Modules.ps_kaiowa.myaccount'}</th>
            <th scope="col">{l s='Fecha Apertura' d='Modules.ps_kaiowa.myaccount'}</th>
            <th scope="col">{l s='Fecha Próxima Cuota' d='Modules.ps_kaiowa.myaccount'}</th>
            <th scope="col">{l s='Saldo' d='Modules.ps_kaiowa.myaccount'}</th>
            <th scope="col">{l s='Cuotas pendientes' d='Modules.ps_kaiowa.myaccount'}</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        {foreach from=$status item=credit}
          <tr>
            <th scope="row">{$credit->id_obligacion}</th>
            <td>{Tools::displayPrice($credit->valor_cuota)}</td>
            <td>{$credit->f_apertura}</td>
            <td>{$credit->f_proximacuota}</td>
            <td>{Tools::displayPrice($credit->saldo_obligacion)}</td>
            <td>{$credit->cuotas_pendientes}</td>
            <th scope="col">
<button data-toggle="modal" data-target="#infoModal" id="{$credit->id_obligacion}" type="button" class="btn btn-info view-credit">{l s='Ver detalle' d='Modules.ps_kaiowa.myaccount'}</button>
            <button data-toggle="modal" data-target="#infoPayment" id="{$credit->id_obligacion}" type="button" class="btn btn-info view-credit">{l s='Pagar' d='Modules.ps_kaiowa.myaccount'}</button>
            </th>
          </tr>
        {/foreach}  
        </tbody>
      </table>
    </div>  
      </div>
    </div>
  </div>
</div>
{else}
    <div>{l s='No se encuentran registros' d='Shop.Theme.Customeraccount'}</div>
{/if}
<!-- Modal -->
<div class="modal fade" id="infoPayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pagos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row mx-1">
          <div class="form-group">
            <label for="paymentQuotes">{l s='Seleccione el número de cuotas' d='Modules.ps_kaiowa.myaccount'}</label>
            <select class="form-control" id="paymentQuotes">
            </select>
          </div>
          <div id="consignation" class="mb-2">
            <h3 class="text-center">{l s='O paga por consignación bancaria' d='Modules.ps_kaiowa.myaccount'}</h3>
            {include file='module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl'}
          </div>
          <form class="text-right">
            <button type="button" class="btn btn-success payment-wompi">{l s='Pagar con wompi' d='Modules.ps_kaiowa.myaccount'}</button>
        </form>      	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{l s='Cerrar' d='Shop.Theme.Customeraccount'}</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row mx-1">
          <div class="col-md-6">{l s='Estado' d='Shop.Theme.Customeraccount'}</div>
          <div id="d_estado_cartera" class="col-md-6">&nbsp;</div>
          <div class="col-md-6">{l s='Cuotas pendientes' d='Shop.Theme.Customeraccount'}</div>
          <div id="cuotas_pendientes" class="col-md-6">&nbsp;</div>
          <div class="col-md-6">{l s='Modalidad' d='Shop.Theme.Customeraccount'}</div>
          <div id="d_modalidad" class="col-md-6">&nbsp;</div>
          <div class="col-md-6">{l s='Fecha de apertura' d='Shop.Theme.Customeraccount'}</div>
          <div id="f_apertura" class="col-md-6">&nbsp;</div>
          <div class="col-md-6">{l s='Próxima cuota' d='Shop.Theme.Customeraccount'}</div>
          <div id="f_proximacuota" class="col-md-6">&nbsp;</div>
          <div class="col-md-6">{l s='Valor mora' d='Shop.Theme.Customeraccount'}</div>
          <div id="valor_mora" class="col-md-6">&nbsp;</div>
          <div class="col-md-6">{l s='Total' d='Shop.Theme.Customeraccount'}</div>
          <div id="valorobligacion" class="col-md-6">&nbsp;</div>
          <div class="col-md-6"><b>{l s='Valor cuota' d='Shop.Theme.Customeraccount'}</b></div>
          <div id="valor_cuota" class="col-md-6">&nbsp;</div>         
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{l s='Cerrar' d='Shop.Theme.Customeraccount'}</button>
      </div>
    </div>
  </div>
</div>
{/block}
