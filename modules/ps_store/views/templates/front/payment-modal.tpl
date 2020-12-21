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
            <h3 class="text-center">{l s='También puedes pagar una cuota en los corresponsales bancarios de Bancolombia.' d='Modules.ps_kaiowa.myaccount'}</h3>
            <p style="margin-top: 20px">
              Indica el número de tu cédula, el número de convenio 86553 a nombre de Celufiamos.
              El sistema te dejará hacer el valor exacto de una cuota, al segundo día hábil después de haber completado el proceso en Celufiamos.
            </p>
            {if false}
            {include file='module:ps_kaiowa/views/templates/hook/_partials/payment_infos.tpl'}
            {/if}
          </div>
          <form class="text-right">

          <div class="alert alert-info text-center" style="margin-top: 20px" role="alert">
Debes indicar el número de tu cédula y el número de convenio 86553 a nombre de CELUFIAMOS, esta forma de pago solo te permite hacer el abono exacto al valor de tu cuota adeudada.          </div>
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