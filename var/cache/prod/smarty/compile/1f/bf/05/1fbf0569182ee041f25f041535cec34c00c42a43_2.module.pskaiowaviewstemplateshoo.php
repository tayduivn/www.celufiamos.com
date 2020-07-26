<?php
/* Smarty version 3.1.33, created on 2020-07-01 09:13:38
  from 'module:pskaiowaviewstemplateshoo' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efc9a12c61026_89103171',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fbf0569182ee041f25f041535cec34c00c42a43' => 
    array (
      0 => 'module:pskaiowaviewstemplateshoo',
      1 => 1591305671,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efc9a12c61026_89103171 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="paymentResult" tabindex="-1" role="dialog" aria-labelledby="paymentResult" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paymentResult">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Estamos procesndo la transacción:','d'=>'Modules.Kaiowa.Shop'),$_smarty_tpl ) );?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div><?php }
}
