<?php
/* Smarty version 3.1.33, created on 2020-06-23 12:07:40
  from '/home/c3luf14m0s/public_html/admin269ovijtg/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef236dc670fb8_01887968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d09f36e84cc26a8d0ab72cb108115aa235e311b' => 
    array (
      0 => '/home/c3luf14m0s/public_html/admin269ovijtg/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1556635595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef236dc670fb8_01887968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9123772345ef236dc6703f4_75276675', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_9123772345ef236dc6703f4_75276675 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_9123772345ef236dc6703f4_75276675',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
