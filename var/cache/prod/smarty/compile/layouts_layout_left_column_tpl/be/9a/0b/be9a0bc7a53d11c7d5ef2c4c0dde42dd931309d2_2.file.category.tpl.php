<?php
/* Smarty version 3.1.33, created on 2020-07-01 13:52:32
  from '/home/c3luf14m0s/public_html/themes/theme_ororus2/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efcdb70881f77_41597894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be9a0bc7a53d11c7d5ef2c4c0dde42dd931309d2' => 
    array (
      0 => '/home/c3luf14m0s/public_html/themes/theme_ororus2/templates/catalog/listing/category.tpl',
      1 => 1569527882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efcdb70881f77_41597894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17871509515efcdb7087c1f1_48810892', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_17871509515efcdb7087c1f1_48810892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_17871509515efcdb7087c1f1_48810892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="block-category card card-block hidden-sm-down">
      <?php if (is_numeric($_smarty_tpl->tpl_vars['category']->value['name'])) {?>
        <h1 class="h1"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</h1>
      <?php } else { ?>
        <h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
          <div id="category-description" class="text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['description'], ENT_QUOTES, 'UTF-8');?>
</div>
        <?php }?>
      <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['large']['url']) {?>
          <div class="category-cover">
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
          </div>
        <?php }?>
    </div>
    <div class="hidden-md-up">
      <h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
    </div>
<?php
}
}
/* {/block 'product_list_header'} */
}
