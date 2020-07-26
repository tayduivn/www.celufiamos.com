<?php
/* Smarty version 3.1.33, created on 2020-06-25 10:09:43
  from '/home/c3luf14m0s/public_html/admin269ovijtg/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef4be377dffd8_05441843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fd8f9d4d6e8953597f1b2efd2e56aea75e67149' => 
    array (
      0 => '/home/c3luf14m0s/public_html/admin269ovijtg/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1556635595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef4be377dffd8_05441843 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
