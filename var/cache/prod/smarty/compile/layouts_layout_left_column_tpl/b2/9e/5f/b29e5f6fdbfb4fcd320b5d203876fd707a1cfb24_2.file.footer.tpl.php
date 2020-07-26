<?php
/* Smarty version 3.1.33, created on 2020-07-24 17:05:35
  from '/home/c3luf14m0s/public_html/themes/theme_ororus2/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f1b5b2f8ac616_04062086',
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
function content_5f1b5b2f8ac616_04062086 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11115724215f1b5b2f8a7e47_28627246', 'hook_footer');
?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10040735685f1b5b2f8a9fb9_58176359', 'hook_footer_before');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17980455845f1b5b2f8ab6c8_12303895', 'hook_footer_after');
?>

		</div>
		</div>
	</div>
</div>
<?php }
/* {block 'hook_footer'} */
class Block_11115724215f1b5b2f8a7e47_28627246 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_11115724215f1b5b2f8a7e47_28627246',
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
class Block_10040735685f1b5b2f8a9fb9_58176359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_10040735685f1b5b2f8a9fb9_58176359',
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
class Block_17980455845f1b5b2f8ab6c8_12303895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_17980455845f1b5b2f8ab6c8_12303895',
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
