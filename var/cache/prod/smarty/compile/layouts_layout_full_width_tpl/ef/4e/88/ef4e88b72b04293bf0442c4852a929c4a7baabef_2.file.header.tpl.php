<?php
/* Smarty version 3.1.33, created on 2020-07-01 09:13:38
  from '/home/c3luf14m0s/public_html/themes/theme_ororus2/templates/checkout/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efc9a12b38520_13128558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef4e88b72b04293bf0442c4852a929c4a7baabef' => 
    array (
      0 => '/home/c3luf14m0s/public_html/themes/theme_ororus2/templates/checkout/_partials/header.tpl',
      1 => 1589737476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efc9a12b38520_13128558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11692899075efc9a12b33f34_84990803', 'header_top');
?>

<?php }
/* {block 'header_top'} */
class Block_11692899075efc9a12b33f34_84990803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_11692899075efc9a12b33f34_84990803',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row">
		<div class="header_logo col-left col col-lg-2 col-md-12 col-xs-12">
		  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
			<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
		  </a>
		</div>
		<div class="col-right col col-xs-12 col-lg-10 col-md-12 display_group">
			<nav class="header-nav">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav'),$_smarty_tpl ) );?>

				<?php if (false) {?>
				<div class="setting_top dropdown js-dropdown">
					<span class="icon ion-android-settings" data-toggle="dropdown">My Account</span>
					 <div class="content-setting dropdown-menu">
					  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

					</div>
				</div>
				<?php }?>
			</nav>
			<div class="seach-cart">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

			</div>
		</div>
      </div>
    </div>
  </div>
	<div class="header-bottom">
		<div class="container">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaymegamenu'),$_smarty_tpl ) );?>

		</div>
	</div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
