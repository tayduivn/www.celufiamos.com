<?php
/* Smarty version 3.1.33, created on 2020-07-16 15:59:30
  from '/home/c3luf14m0s/public_html/modules/ps_kaiowa/views/templates/hook/hookDisplayCustomerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f10bfb2ea18e7_39976466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89c5910eadf92c96f8b1fe812416e77036f4552c' => 
    array (
      0 => '/home/c3luf14m0s/public_html/modules/ps_kaiowa/views/templates/hook/hookDisplayCustomerAccount.tpl',
      1 => 1594263714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f10bfb2ea18e7_39976466 (Smarty_Internal_Template $_smarty_tpl) {
?><a class="col-lg-3 col-md-6 col-sm-6 col-xs-12" id="identity-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
">
  <span class="link-item">
    <i class="material-icons">monetization_on</i>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mis Cuotas','d'=>'Moodules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>

  </span>
</a><?php }
}
