<?php
/* Smarty version 3.1.33, created on 2020-06-23 22:09:56
  from '/home/c3luf14m0s/public_html/modules/ps_kaiowa/views/templates/hook/hookDisplayProductPriceBlockModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef2c40402ad88_53231283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38fc3f25227353fcbb25cf244706646877e2a882' => 
    array (
      0 => '/home/c3luf14m0s/public_html/modules/ps_kaiowa/views/templates/hook/hookDisplayProductPriceBlockModal.tpl',
      1 => 1592332878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef2c40402ad88_53231283 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  $(document).ready(function($) {
      $('.add').remove();
  })
<?php echo '</script'; ?>
>
<div id="Noallow" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Para comprar con Celufiamos','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Debes consultar los equipos que se ajusten a tu cuota asignada.','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>

        </p>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tu cuota asignada es:','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</p>
        <p><h2><?php echo htmlspecialchars(Tools::displayPrice($_smarty_tpl->tpl_vars['cuota']->value), ENT_QUOTES, 'UTF-8');?>
</h2></p>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recuerda que puedes comprar equipos con cuotas iguales o inferiores a la que tienes asignada.','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</p>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'<b>Nota:</b> Si tienes algún comentario sobre tu cuota asignada puedes escribirnos','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>

        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_contact']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'aquí','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</a>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cerrar','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</button>
      </div>
    </div>
  </div>
</div><?php }
}
