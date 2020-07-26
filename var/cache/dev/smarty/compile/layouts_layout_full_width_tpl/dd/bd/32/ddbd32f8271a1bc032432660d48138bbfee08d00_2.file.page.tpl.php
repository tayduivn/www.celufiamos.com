<?php
/* Smarty version 3.1.33, created on 2020-06-23 21:32:13
  from '/home/c3luf14m0s/public_html/themes/theme_ororus2/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ef2bb2d2bb8f2_49527173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddbd32f8271a1bc032432660d48138bbfee08d00' => 
    array (
      0 => '/home/c3luf14m0s/public_html/themes/theme_ororus2/templates/page.tpl',
      1 => 1560994343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef2bb2d2bb8f2_49527173 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9230765235ef2bb2d2b73d3_17438687', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_11907238215ef2bb2d2b7df2_03398157 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_8962078325ef2bb2d2b78e5_05582386 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11907238215ef2bb2d2b7df2_03398157', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_13660696725ef2bb2d2b9b12_23792621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_4204105135ef2bb2d2ba0d9_46333807 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4957667515ef2bb2d2b96d8_29430994 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13660696725ef2bb2d2b9b12_23792621', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4204105135ef2bb2d2ba0d9_46333807', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_11066078355ef2bb2d2baef4_13077554 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16081259225ef2bb2d2bab22_83178201 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11066078355ef2bb2d2baef4_13077554', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9230765235ef2bb2d2b73d3_17438687 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9230765235ef2bb2d2b73d3_17438687',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8962078325ef2bb2d2b78e5_05582386',
  ),
  'page_title' => 
  array (
    0 => 'Block_11907238215ef2bb2d2b7df2_03398157',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_4957667515ef2bb2d2b96d8_29430994',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13660696725ef2bb2d2b9b12_23792621',
  ),
  'page_content' => 
  array (
    0 => 'Block_4204105135ef2bb2d2ba0d9_46333807',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16081259225ef2bb2d2bab22_83178201',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11066078355ef2bb2d2baef4_13077554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8962078325ef2bb2d2b78e5_05582386', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4957667515ef2bb2d2b96d8_29430994', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16081259225ef2bb2d2bab22_83178201', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
