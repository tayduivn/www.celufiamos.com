<?php
/* Smarty version 3.1.33, created on 2020-07-02 08:40:43
  from 'module:posnewproductsviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efde3db16d8d6_52066151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5030f4eb6c69d56a7ceef0659955424f03190ae' => 
    array (
      0 => 'module:posnewproductsviewstempla',
      1 => 1560994343,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5efde3db16d8d6_52066151 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14477129885efde3db15ec82_52921073';
?>
<div class="container">
	<div class="pos_new_product  product_block_container" 
		data-items="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['number_item'], ENT_QUOTES, 'UTF-8');?>
" 
		data-speed="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['speed_slide'], ENT_QUOTES, 'UTF-8');?>
"
		data-autoplay="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['auto_play'], ENT_QUOTES, 'UTF-8');?>
"
		data-time="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['auto_time'], ENT_QUOTES, 'UTF-8');?>
"
		data-arrow="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['show_arrow'], ENT_QUOTES, 'UTF-8');?>
"
		data-pagination="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['show_pagination'], ENT_QUOTES, 'UTF-8');?>
"
		data-move="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['move'], ENT_QUOTES, 'UTF-8');?>
"
		data-pausehover="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['pausehover'], ENT_QUOTES, 'UTF-8');?>
"
		data-md="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_md'], ENT_QUOTES, 'UTF-8');?>
"
		data-sm="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_sm'], ENT_QUOTES, 'UTF-8');?>
"
		data-xs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_xs'], ENT_QUOTES, 'UTF-8');?>
"
		data-xxs="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider_options']->value['items_xxs'], ENT_QUOTES, 'UTF-8');?>
">
			<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
				<div class="pos_title">
					 <h2>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

					</h2>	

				</div>
			<?php }?>
			<?php $_smarty_tpl->_assignInScope('rows', $_smarty_tpl->tpl_vars['slider_options']->value['rows']);?>
			<div class="block-content">
				<div class=" pos_content row">
					<div class="newSlide owl-carousel">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'myLoop', array (
  'index' => true,
  'first' => true,
  'iteration' => true,
  'last' => true,
  'total' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['total'];
?>
						<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['index'] : null)%$_smarty_tpl->tpl_vars['rows']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['first'] : null)) {?>
						<div class="item-product">
						<?php }?>
							<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
						<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['rows']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_myLoop']->value['last'] : null)) {?>
						</div>
						<?php }?>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			</div>
	</div>
</div>

<?php }
}
