<?php
/* Smarty version 3.1.33, created on 2020-06-23 08:21:00
  from '/home/c3luf14m0s/public_html/modules/posslideshows/views/templates/admin/_configure/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef201bce62f12_44869054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ccdd8f5e976d22e7348394563c77c1db448abc1' => 
    array (
      0 => '/home/c3luf14m0s/public_html/modules/posslideshows/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1560994342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef201bce62f12_44869054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13851157895ef201bce52460_22379827', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_13851157895ef201bce52460_22379827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_13851157895ef201bce52460_22379827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_lang') {?>
		<div class="row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
				<?php }?>
					<div class="col-lg-6">
						<?php if (isset($_smarty_tpl->tpl_vars['fields']->value[0]['form']['images'])) {?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;
echo $_smarty_tpl->tpl_vars['fields']->value[0]['form']['images'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
" class="img-thumbnail" />
						<?php }?>
						<div class="dummyfile input-group">
							<input id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" type="file" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="hide-file-upload" />
							<span class="input-group-addon"><i class="icon-file"></i></span>
							<input id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
-name" type="text" class="disabled" name="filename" readonly />
							<span class="input-group-btn">
								<button id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
									<i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','mod'=>'posslideshows'),$_smarty_tpl ) );?>

								</button>
							</span>
						</div>
					</div>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					<div class="col-lg-2">
						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
							<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
							<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</a></li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					</div>
				<?php }?>
				<?php echo '<script'; ?>
>
				$(document).ready(function(){
					$('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
-selectbutton').click(function(e){
						$('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
').trigger('click');
					});
					$('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
').change(function(e){
						var val = $(this).val();
						var file = val.split(/[\\/]/);
						$('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
-name').val(file[file.length-1]);
					});
				});
			<?php echo '</script'; ?>
>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
