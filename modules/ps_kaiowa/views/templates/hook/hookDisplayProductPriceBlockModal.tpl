<script>
  $(document).ready(function($) {
      $('.add').remove();
  })
</script>

{if !$logged}
<div class="alert alert-info my-5" role="alert" style="margin-top: 3rem; margin-bottom: 3rem;">
<p >
{l s='Para comprar este equipo primero debes registrarte y el sistema te asignará una cuota. Recuerda que puedes comprar equipos con cuotas iguales o inferiores a las que te asigna Celufiamos.' d='Modules.ps_kaiowa.myaccount'}
</p>
<p style="text-align: center">
<!-- <a class="btn btn-success" href="{$url_login}?create_account=1">{l s='Registrate aquí.' d='Modules.ps_kaiowa.myaccount'}</a>-->
</p>
</div>
{else}
  <div class="alert alert-info my-5" role="alert" style="margin-top: 3rem; margin-bottom: 3rem; text-align: center">
  <p>
  {l s='Este equipo no se encuentra en el rango de la cuota que a la que puedes acceder' d='Modules.ps_kaiowa.myaccount'}
  </p>
  <p>{l s='Tu cuota asignada es:' d='Modules.ps_kaiowa.myaccount'}</p>
  <p>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Ver cuota disponible
  </button>
  </p>
  <p>{l s='Recuerda que puedes comprar equipos con cuotas iguales o inferiores a la que tienes asignada.' d='Modules.ps_kaiowa.myaccount'}</p>
  <p style="text-align: center">{l s='<b>Nota:</b> Si tienes algún comentario sobre tu cuota asignada puedes escribirnos' d='Modules.ps_kaiowa.myaccount'}
  <a href="{$url_contact}">{l s='aquí' d='Modules.ps_kaiowa.myaccount'}</a>
  </p>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cuota Disponible</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="text-align: center">
          <p><h2>{Tools::displayPrice($cuota)}</h2></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <a type="button" href="/cuota-disponible" class="btn btn-success" style="color: white">VER EQUPOS</a>
      </div>
    </div>
  </div>
</div>

{/if}
