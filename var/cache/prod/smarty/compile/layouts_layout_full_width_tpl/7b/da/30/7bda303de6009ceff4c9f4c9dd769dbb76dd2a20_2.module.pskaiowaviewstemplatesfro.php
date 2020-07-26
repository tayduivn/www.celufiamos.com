<?php
/* Smarty version 3.1.33, created on 2020-07-01 13:52:03
  from 'module:pskaiowaviewstemplatesfro' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efcdb538c1ca7_43942245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bda303de6009ceff4c9f4c9dd769dbb76dd2a20' => 
    array (
      0 => 'module:pskaiowaviewstemplatesfro',
      1 => 1590503359,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efcdb538c1ca7_43942245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7469412285efcdb538b5f69_79223597', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_content'} */
class Block_7469412285efcdb538b5f69_79223597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_7469412285efcdb538b5f69_79223597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="page-my-account balance">
	<div id="content">
		<div class="row text-center">
			<?php if (!$_smarty_tpl->tpl_vars['has_error']->value) {?>
				<small class="col-lg-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Dispones de una cuota de:','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</small>
				<h1 class="col-lg-12 balance-title">
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cuota']->value, ENT_QUOTES, 'UTF-8');?>

				</h1>
				<small class="col-lg-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Puedes acceder a equipos menores o iguales a este valor:','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</small>
				<h5 class="col-lg-12"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Conoce los equipos a los que puedes acceder','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
 </h5>
				<ul class="allow-category col-lg-12">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
	    				<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>				
				</ul>
			<?php } else { ?>
				<p class="col-lg-12"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lo sentimos, en este momento no podemos consultar la cuota disponible','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
 </p>
	  		<?php }?>
	  	</div>
  </div>
</div>
<?php
}
}
/* {/block 'page_content'} */
}
