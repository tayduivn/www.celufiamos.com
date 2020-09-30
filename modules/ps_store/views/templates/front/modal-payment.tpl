<div class="modal fade" id="paymentSave" tabindex="-1" role="dialog" aria-labelledby="paymentSave" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SELECCIONE EL NUMERO DE CUOTAS A REGISTRAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="input-group col-md-12">
            <select id="quotes" class="form-control">
              {for $foo=1 to Configuration::get('BANK_KAIOWA_CUOTAS')}
                <option value="{$foo}">{$foo} Cuota(s)</option>
              {/for}
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" id="save-payment" class="btn btn-success">Registrar</button>
      </div>
    </div>
  </div>
</div>