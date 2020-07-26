<?php
/* Smarty version 3.1.33, created on 2020-07-08 22:16:02
  from '/home/c3luf14m0s/public_html/modules/ps_kaiowa/views/templates/hook/hookDisplayFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f068bf271df32_19490827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02318b4e7ef4bd6235e8c42de42700b6791a8e0a' => 
    array (
      0 => '/home/c3luf14m0s/public_html/modules/ps_kaiowa/views/templates/hook/hookDisplayFooter.tpl',
      1 => 1594263714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f068bf271df32_19490827 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="PlataformDisabled" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Información','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</h5>
      </div>
      <div class="modal-body text-center">
        <p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'En este momento nuestros servicios no estan disponibles','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>

        </p>
      </div>
    </div>
  </div>
</div>

<div id="userDeactivate" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tu cuenta no ha sido aprobada','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</h5>
      </div>
      <div class="modal-body text-center">
        <p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lo siento, esta vez no has pasado nuestras validaciones para la creacion de tu cuenta','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>

        </p>
      </div>
    </div>
  </div>
</div><?php }
}
