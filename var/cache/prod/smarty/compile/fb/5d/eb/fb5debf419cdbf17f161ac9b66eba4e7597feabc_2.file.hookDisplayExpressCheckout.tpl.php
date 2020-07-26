<?php
/* Smarty version 3.1.33, created on 2020-07-01 13:52:48
  from '/home/c3luf14m0s/public_html/modules/ps_kaiowa/views/templates/hook/hookDisplayExpressCheckout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efcdb80120404_70922926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb5debf419cdbf17f161ac9b66eba4e7597feabc' => 
    array (
      0 => '/home/c3luf14m0s/public_html/modules/ps_kaiowa/views/templates/hook/hookDisplayExpressCheckout.tpl',
      1 => 1591328162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efcdb80120404_70922926 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a><?php }
}
