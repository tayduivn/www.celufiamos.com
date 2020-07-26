<?php
/* Smarty version 3.1.33, created on 2020-07-02 08:37:52
  from '/home/c3luf14m0s/public_html/modules/posstaticblocks/block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efde330aafb93_63263624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15422472595ebb1995d64b8f9a12085f1bdc6f70' => 
    array (
      0 => '/home/c3luf14m0s/public_html/modules/posstaticblocks/block.tpl',
      1 => 1560994343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efde330aafb93_63263624 (Smarty_Internal_Template $_smarty_tpl) {
?>
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['staticblocks']->value, 'block', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['block']->value) {
?>
	  <?php if ($_smarty_tpl->tpl_vars['block']->value['active'] == 1) {?>
		  <p class ="title_block"> <?php ob_start();
echo $_smarty_tpl->tpl_vars['block']->value['title'];
$_prefixVariable3 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_prefixVariable3),$_smarty_tpl ) );?>
 </p>
		
	  <?php }?>
	  <?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

	  <?php if ($_smarty_tpl->tpl_vars['block']->value['insert_module'] == 1) {?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value['block_module'];?>

	   <?php }?>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
