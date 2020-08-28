<script>
  $(document).ready(function($) {
      $('.add').remove();
  })
</script>

{if !$logged}
<div id="Noallow" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{l s='Para comprar con Celufiamos' d='Modules.ps_kaiowa.myaccount'}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>
        {l s='Para comprar este equipo primero debes registrarte y el sistema te asignará una cuota. Recuerda que puedes comprar equipos con cuotas iguales o inferiores a las que te asigna Celufiamos.' d='Modules.ps_kaiowa.myaccount'}
        </p>
        <p>
        <a href="{$url_login}?create_account=1">{l s='Registrate aquí.' d='Modules.ps_kaiowa.myaccount'}</a>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{l s='Cerrar' d='Modules.ps_kaiowa.myaccount'}</button>
      </div>
    </div>
  </div>
</div>
{else}
<div id="Noallow" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{l s='Para comprar con Celufiamos' d='Modules.ps_kaiowa.myaccount'}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>
        {l s='Debes consultar los equipos que se ajusten a tu cuota asignada.' d='Modules.ps_kaiowa.myaccount'}
        </p>
        <p>{l s='Tu cuota asignada es:' d='Modules.ps_kaiowa.myaccount'}</p>
        <p><h2>{Tools::displayPrice($cuota)}</h2></p>
        <p>{l s='Recuerda que puedes comprar equipos con cuotas iguales o inferiores a la que tienes asignada.' d='Modules.ps_kaiowa.myaccount'}</p>
        <p>{l s='<b>Nota:</b> Si tienes algún comentario sobre tu cuota asignada puedes escribirnos' d='Modules.ps_kaiowa.myaccount'}
        <a href="{$url_contact}">{l s='aquí' d='Modules.ps_kaiowa.myaccount'}</a>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">{l s='Cerrar' d='Modules.ps_kaiowa.myaccount'}</button>
      </div>
    </div>
  </div>
</div>
{/if}
