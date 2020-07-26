<?php
/* Smarty version 3.1.33, created on 2020-07-02 08:40:00
  from '/home/c3luf14m0s/public_html/themes/theme_ororus2/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efde3b02da9f2_95297803',
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
function content_5efde3b02da9f2_95297803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13713886135efde3b02d4ae8_53848699', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_18040191625efde3b02d58f7_52863890 extends Smarty_Internal_Block
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
class Block_20778967325efde3b02d5151_15587485 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18040191625efde3b02d58f7_52863890', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_10714487905efde3b02d80d7_78208116 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_17461869705efde3b02d8972_08817718 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19608243515efde3b02d7a79_31530283 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10714487905efde3b02d80d7_78208116', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17461869705efde3b02d8972_08817718', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_11380285235efde3b02d9ba9_67105866 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2506867515efde3b02d9612_95807327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11380285235efde3b02d9ba9_67105866', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_13713886135efde3b02d4ae8_53848699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13713886135efde3b02d4ae8_53848699',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_20778967325efde3b02d5151_15587485',
  ),
  'page_title' => 
  array (
    0 => 'Block_18040191625efde3b02d58f7_52863890',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_19608243515efde3b02d7a79_31530283',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_10714487905efde3b02d80d7_78208116',
  ),
  'page_content' => 
  array (
    0 => 'Block_17461869705efde3b02d8972_08817718',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2506867515efde3b02d9612_95807327',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11380285235efde3b02d9ba9_67105866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20778967325efde3b02d5151_15587485', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19608243515efde3b02d7a79_31530283', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2506867515efde3b02d9612_95807327', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
