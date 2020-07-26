<?php
/* Smarty version 3.1.33, created on 2020-07-01 09:13:38
  from '/home/c3luf14m0s/public_html/themes/theme_ororus2/templates/checkout/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efc9a12cb87b6_01871894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ea5daa55a123e3e6c9198392ff23f326efbee82' => 
    array (
      0 => '/home/c3luf14m0s/public_html/themes/theme_ororus2/templates/checkout/_partials/footer.tpl',
      1 => 1589737660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efc9a12cb87b6_01871894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="footer-container">
	<div class="newsletter-before">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlockFooter1'),$_smarty_tpl ) );?>

	</div>
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col col-lg-9 col-md-12 col-xs-12 box-footer">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20747844875efc9a12cb6050_42827697', 'hook_footer');
?>

				</div>
				<div class="col col-lg-12 col-md-12 col-xs-12 footer_block ">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1016197395efc9a12cb6d27_96052458', 'hook_footer_before');
?>

				</div>
			</div>
		</div>
	</div>
	<div class="footer-middle">	
		<div class="container">
	
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBlockFooter2'),$_smarty_tpl ) );?>

	
		</div>
	</div>
	<div class="footer-bottom">	
		<div class="container">
		<div class="row">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18220544125efc9a12cb7c62_99094670', 'hook_footer_after');
?>

		</div>
		</div>
	</div>
</div>
<?php }
/* {block 'hook_footer'} */
class Block_20747844875efc9a12cb6050_42827697 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_20747844875efc9a12cb6050_42827697',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_before'} */
class Block_1016197395efc9a12cb6d27_96052458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_1016197395efc9a12cb6d27_96052458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer_after'} */
class Block_18220544125efc9a12cb7c62_99094670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_18220544125efc9a12cb7c62_99094670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

			<?php
}
}
/* {/block 'hook_footer_after'} */
}
