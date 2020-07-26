<?php
/* Smarty version 3.1.33, created on 2020-07-25 18:34:35
  from '/home/c3luf14m0s/public_html/modules/ps_kaiowa/views/templates/hook/hookDisplayProductPriceBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1cc18bc1f975_12787677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9ce01fd0a0a83df8a7d704d588d58e65aba8fa1' => 
    array (
      0 => '/home/c3luf14m0s/public_html/modules/ps_kaiowa/views/templates/hook/hookDisplayProductPriceBlock.tpl',
      1 => 1594263714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1cc18bc1f975_12787677 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="quotes-price">
	<?php if ($_smarty_tpl->tpl_vars['type']->value == 'weight') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Valor total a pagar','d'=>'Modules.Kaiowa.Front'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_price']->value, ENT_QUOTES, 'UTF-8');?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['type']->value == 'weight_cart') {?>
		<div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Valor total a pagar','d'=>'Modules.Kaiowa.Front'),$_smarty_tpl ) );?>
</div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_price']->value, ENT_QUOTES, 'UTF-8');?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['type']->value == 'before_price') {?>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cuotas']->value, ENT_QUOTES, 'UTF-8');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' cuotas mensuales de:','d'=>'Modules.Kaiowa.Front'),$_smarty_tpl ) );?>

	<?php }?>
</div><?php }
}
