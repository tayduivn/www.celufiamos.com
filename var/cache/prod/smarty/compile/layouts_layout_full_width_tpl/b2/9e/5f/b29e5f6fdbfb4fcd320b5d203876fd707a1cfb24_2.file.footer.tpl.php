<?php
/* Smarty version 3.1.33, created on 2020-07-08 22:16:02
  from '/home/c3luf14m0s/public_html/themes/theme_ororus2/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f068bf2706907_25054443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b29e5f6fdbfb4fcd320b5d203876fd707a1cfb24' => 
    array (
      0 => '/home/c3luf14m0s/public_html/themes/theme_ororus2/templates/_partials/footer.tpl',
      1 => 1594263714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f068bf2706907_25054443 (Smarty_Internal_Template $_smarty_tpl) {
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
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4107924995f068bf2700121_55006451', 'hook_footer');
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12374976395f068bf27028f4_57135489', 'hook_footer_before');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10832737435f068bf2704f80_58007245', 'hook_footer_after');
?>

		</div>
		</div>
	</div>
</div>
<?php }
/* {block 'hook_footer'} */
class Block_4107924995f068bf2700121_55006451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_4107924995f068bf2700121_55006451',
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
class Block_12374976395f068bf27028f4_57135489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_12374976395f068bf27028f4_57135489',
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
class Block_10832737435f068bf2704f80_58007245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_10832737435f068bf2704f80_58007245',
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
