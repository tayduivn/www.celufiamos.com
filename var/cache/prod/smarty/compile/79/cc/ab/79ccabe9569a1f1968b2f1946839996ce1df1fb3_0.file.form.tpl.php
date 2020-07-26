<?php
/* Smarty version 3.1.33, created on 2020-07-01 08:41:49
  from '/home/c3luf14m0s/public_html/admin269ovijtg/themes/default/template/controllers/modules_positions/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efc929d876498_35687087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79ccabe9569a1f1968b2f1946839996ce1df1fb3' => 
    array (
      0 => '/home/c3luf14m0s/public_html/admin269ovijtg/themes/default/template/controllers/modules_positions/form.tpl',
      1 => 1556635595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efc929d876498_35687087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="leadin"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10976514865efc929d858e08_65043541', "leadin");
?>
</div>

<form action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_submit']->value,'html','UTF-8' ));?>
" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form" method="post" class="form-horizontal">
	<?php if ($_smarty_tpl->tpl_vars['display_key']->value) {?>
		<input type="hidden" name="show_modules" value="<?php echo $_smarty_tpl->tpl_vars['display_key']->value;?>
" />
	<?php }?>
	<div class="panel">
		<h3>
			<i class="icon-paste"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transplant a module','d'=>'Admin.Design.Feature'),$_smarty_tpl ) );?>

		</h3>
		<div class="form-group">
			<label class="control-label col-lg-3 required"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<select class="chosen" name="id_module" <?php if ($_smarty_tpl->tpl_vars['edit_graft']->value) {?> disabled="disabled"<?php }?>>
					<?php if (!$_smarty_tpl->tpl_vars['hooks']->value) {?>
						<option value="0" selected disabled><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select a module','d'=>'Admin.Design.Help'),$_smarty_tpl ) );?>
</option>
					<?php }?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
						<option value="<?php echo intval($_smarty_tpl->tpl_vars['module']->value->id);?>
"<?php if ($_smarty_tpl->tpl_vars['id_module']->value == $_smarty_tpl->tpl_vars['module']->value->id || (!$_smarty_tpl->tpl_vars['id_module']->value && $_smarty_tpl->tpl_vars['show_modules']->value == $_smarty_tpl->tpl_vars['module']->value->id)) {?> selected="selected"<?php }?>><?php echo stripslashes($_smarty_tpl->tpl_vars['module']->value->displayName);?>
</option>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-lg-3 required"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transplant to','d'=>'Admin.Design.Feature'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<select name="id_hook"<?php if (!count($_smarty_tpl->tpl_vars['hooks']->value)) {?> disabled="disabled"<?php }?>>
					<?php if (!$_smarty_tpl->tpl_vars['hooks']->value) {?>
						<option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select a module above before choosing from available hooks','d'=>'Admin.Design.Help'),$_smarty_tpl ) );?>
</option>
					<?php } else { ?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hooks']->value, 'hook');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value) {
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['hook']->value['id_hook'];?>
" <?php if ($_smarty_tpl->tpl_vars['id_hook']->value == $_smarty_tpl->tpl_vars['hook']->value['id_hook']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['hook']->value['name'];
if ($_smarty_tpl->tpl_vars['hook']->value['name'] != $_smarty_tpl->tpl_vars['hook']->value['title']) {?> (<?php echo $_smarty_tpl->tpl_vars['hook']->value['title'];?>
)<?php }
if (isset($_smarty_tpl->tpl_vars['hook']->value['description'])) {?> (<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['hook']->value['description'],'htmlall','UTF-8' ));?>
)<?php }?></option>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Exceptions','d'=>'Admin.Design.Feature'),$_smarty_tpl ) );?>
</label>
			<div class="col-lg-9">
				<div class="well">
					<div>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please specify the files for which you do not want the module to be displayed.','d'=>'Admin.Design.Help'),$_smarty_tpl ) );?>
<br />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please input each filename, separated by a comma (",").','d'=>'Admin.Design.Help'),$_smarty_tpl ) );?>
<br />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also click the filename in the list below, and even make a multiple selection by keeping the Ctrl key pressed while clicking, or choose a whole range of filename by keeping the Shift key pressed while clicking.','d'=>'Admin.Design.Help'),$_smarty_tpl ) );?>
<br />
						<?php if (!$_smarty_tpl->tpl_vars['except_diff']->value) {?>
							<?php echo $_smarty_tpl->tpl_vars['exception_list']->value;?>

						<?php } else { ?>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exception_list_diff']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
								<?php echo $_smarty_tpl->tpl_vars['value']->value;?>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-footer">
			<?php if ($_smarty_tpl->tpl_vars['edit_graft']->value) {?>
				<input type="hidden" name="id_module" value="<?php echo $_smarty_tpl->tpl_vars['id_module']->value;?>
" />
				<input type="hidden" name="id_hook" value="<?php echo $_smarty_tpl->tpl_vars['id_hook']->value;?>
" />
				<input type="hidden" name="new_hook" id="new_hook" value="<?php echo $_smarty_tpl->tpl_vars['id_hook']->value;?>
" />
			<?php }?>
			<button type="submit" name="<?php if ($_smarty_tpl->tpl_vars['edit_graft']->value) {?>submitEditGraft<?php } else { ?>submitAddToHook<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</button>
		</div>
	</div>
</form>
<?php echo '<script'; ?>
 type="text/javascript">
	//<![CDATA
	function position_exception_textchange() {
		// TODO : Add & Remove automatically the "custom pages" in the "em_list_x"
		var obj = $(this);
		var shopID = obj.attr('id').replace(/\D/g, '');
		var list = obj.closest('form').find('#em_list_' + shopID);
		var values = obj.val().split(',');
		var len = values.length;

		list.find('option').prop('selected', false);
		for (var i = 0; i < len; i++)
			list.find('option[value="' + $.trim(values[i]) + '"]').prop('selected', true);
	}
	function position_exception_listchange() {
		var obj = $(this);
		var shopID = obj.attr('id').replace(/\D/g, '');
		var val = obj.val();
		var str = '';
		if (val)
			str = val.join(', ');
		obj.closest('form').find('#em_text_' + shopID).val(str);
	}
	$(document).ready(function(){
		$('form[id="hook_module_form"] input[id^="em_text_"]').each(function(){
			$(this).change(position_exception_textchange).change();
		});
		$('form[id="hook_module_form"] select[id^="em_list_"]').each(function(){
			$(this).change(position_exception_listchange);
		});
		$('select[name=id_hook]').on('change', function() {
			$('#new_hook').attr('value', $(this).val());
		});
	});
	//]]>
<?php echo '</script'; ?>
>
<?php }
/* {block "leadin"} */
class Block_10976514865efc929d858e08_65043541 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_10976514865efc929d858e08_65043541',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "leadin"} */
}
