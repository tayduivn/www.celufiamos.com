{if $smarty.get.controller == 'AdminOrders'}
<div class="panel">
  <div class="panel-heading">
    <i class="icon-shopping-cart"></i>
      IMEI <span class="badge">1</span>
  </div>
  <div class="panel-body">
    <div class="row">
      <div class="col-md-9">
        <input value="{$imei}" type="text" id="order-imei">
      </div>
      <div class="col-md-3">
        <button id="save-order-imei" class="btn btn-success">GUARDAR</button>
      </div>
    </div>
  </div>
</div>
<script>
  $('#save-order-imei').on('click', function(e){
    if(!$('#order-imei').val()) {
      alert('Ingrese el IMEI');
    } else {
      $.ajax({
        type: "POST",
        url: window.location.origin + '/responses?type=saveimei',
        data: {
          imei: $('#order-imei').val(),
          order: '{$smarty.get.id_order}'
        },
        success: function(data) {
          alert('IMEI actualizado')
        },
        fail: function(data) {
          window.location.replace('Error al actualizar el IMEI');
        },
      });
    }
  })
</script>
{/if}


<div class="panel">
  <div class="panel-heading">
    <i class="icon-shopping-cart"></i>
      Pagos Registrados <span class="badge">1</span>
  </div>
  <div class="panel-body">
<div class="box">
  <h3>{l s='Información de cuotas' d='Shop.Theme.Customeraccount'}</h3>
  <table class="table" border="0">
    <tr>
      <td><b>Modalidad</b></td>
      <td>{$kaiowa->d_modalidad}</td>
    </tr>
    <tr>
      <td><b>Valor Obligación</b></td>
      <td>{Tools::displayPrice($kaiowa->valorobligacion)}</td>
    </tr>
    <tr>
      <td><b>Saldo Obligación</b></td>
      <td>{Tools::displayPrice($kaiowa->saldo_obligacion)}</td>
    </tr>       
    <tr>
      <td><b>Cuota</b></td>
      <td>{Tools::displayPrice($kaiowa->valor_cuota)}</td>
    </tr>
    <tr>
      <td><b>Proxima Cuota</b></td>
      <td>{$kaiowa->f_proximacuota}</td>
    </tr>
    <tr>
      <td><b>Fecha Apertura</b></td>
      <td>{$kaiowa->f_apertura}</td>
    </tr>
    <tr>
      <td><b>Cuotas Pactadas</b></td>
      <td>{$kaiowa->cuotas_pactadas}</td>
    </tr>   
    <tr>
      <td><b>Cuotas Pendientes</b></td>
      <td>{$kaiowa->cuotas_pendientes}</td>
    </tr>
  </table>
  <h3 style="margin-top: 20px">Historial de cuotas</h3>
  {if $pagos}
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Valor pagado</th>
          <th>Cuotas pagadas</th>
          <th>Metodo de pago</th>
          <th>Fecha</th>
        </tr>
      </thead>
      <tbody>
        {foreach from=$pagos item=pago}
          <tr>
            <td>{Tools::displayPrice($pago.value)}</td>
            <td>{$pago.quotas}</td>
            <td>{$pago.payment_method}</td>
            <td>{$pago.date}</td>
          </tr>
        {/foreach}
      </tbody>
    </table>
  {else}
    <div class="alert alert-info" role="alert">
      No se han registrado pago de cuotas para esta orden
    </div>
  {/if}
</div>
  </div>
</div>
