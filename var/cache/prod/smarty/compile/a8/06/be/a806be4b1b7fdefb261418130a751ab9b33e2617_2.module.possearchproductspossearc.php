<?php
/* Smarty version 3.1.33, created on 2020-07-08 22:16:02
  from 'module:possearchproductspossearc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f068bf2681bf4_80219287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a806be4b1b7fdefb261418130a751ab9b33e2617' => 
    array (
      0 => 'module:possearchproductspossearc',
      1 => 1594263714,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:modules/possearchproducts/category-tree-branch.tpl' => 1,
  ),
),false)) {
function content_5f068bf2681bf4_80219287 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- pos search module TOP -->
<div id="pos_search_top" class="col-md-11">
	<div class="row header-options">
		<div class="col-xs-12 col-md-6">
			<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
" id="searchbox" class="form-inline form_search"  data-search-controller-url="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_search']->value,'html' )), ENT_QUOTES, 'UTF-8');?>
">
				<label for="pos_query_top"><!-- image on background --></label>
		        <input type="hidden" name="controller" value="search">
				<div class="pos_search form-group">
		             <?php if ($_smarty_tpl->tpl_vars['cate_on']->value == 1 && false == true) {?>
		                <select class="bootstrap-select" name="poscats">
							<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categorías','mod'=>'blocksearch_mod'),$_smarty_tpl ) );?>
</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_option']->value['children'], 'child', false, NULL, 'categories_option', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
?>
									<?php $_smarty_tpl->_subTemplateRender("file:modules/possearchproducts/category-tree-branch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'main'=>true), 0, true);
?>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
		            <?php }?> 
		        </div>
				<input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Buscar','mod'=>'possearchcategories'),$_smarty_tpl ) );?>
" id="pos_query_top" class="search_query form-control ac_input" >
				<button type="submit" class="btn btn-default search_submit">
					<span class="et-magnifying-glass">seach</span>
				</button>
		    </form>
	    </div>
	    <div class="col-xs-4 col-md-2">
	    	<a href="/mi-cuenta" class="my-account"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mi Cuenta'),$_smarty_tpl ) );?>
</span></a>
	    </div>
	    <div class="col-xs-4 col-md-2 help">
	    	<a href="/content/10-AYUDA" class="help"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ayuda'),$_smarty_tpl ) );?>
</span></a>
	    </div>

<!-- /pos search module TOP -->
<?php }
}