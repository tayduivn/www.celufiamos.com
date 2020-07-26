<?php
/* Smarty version 3.1.33, created on 2020-07-16 15:59:41
  from 'module:pskaiowaviewstemplatesfro' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f10bfbd28e191_43828588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ea3c8f126a0b70f32c936ae5ba99c3070a3db57' => 
    array (
      0 => 'module:pskaiowaviewstemplatesfro',
      1 => 1594263714,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f10bfbd28e191_43828588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6301193265f10bfbd27d8a6_20488616', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7473593515f10bfbd2811d3_83470538', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_6301193265f10bfbd27d8a6_20488616 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_6301193265f10bfbd27d8a6_20488616',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mis Cuotas','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_7473593515f10bfbd2811d3_83470538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_7473593515f10bfbd2811d3_83470538',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-my-account">
	<div id="content">
		<div class="row">
	    <div id="" class="links">
	      <a class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="identity-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_payment']->value, ENT_QUOTES, 'UTF-8');?>
">
	        <span class="link-item">
	          <i class="material-icons">payment</i>
	          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pagos','d'=>'Moodules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>

	        </span>
	      </a>
	      <?php if (false) {?>
	      <a class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="identity-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_status']->value, ENT_QUOTES, 'UTF-8');?>
">
	        <span class="link-item">
	          <i class="material-icons">line_weight</i>
	          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Estado de cuenta','d'=>'Moodules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>

	        </span>
	      </a>
	      <?php }?>
	      <a class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="identity-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_saldo']->value, ENT_QUOTES, 'UTF-8');?>
">
	        <span class="link-item">
	          <i class="material-icons">money_off</i>
	          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Saldo disponible','d'=>'Moodules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>

	        </span>
	      </a>
			<a class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="identity-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_contact']->value, ENT_QUOTES, 'UTF-8');?>
">
	        <span class="link-item">
	          <i class="material-icons">question_answer</i>
	          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PQRs','d'=>'Moodules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>

	        </span>
	      </a>
	    </div>
	  </div>
  </div>
</div>
<?php
}
}
/* {/block 'page_content'} */
}
