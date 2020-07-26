<?php
/* Smarty version 3.1.33, created on 2020-07-01 09:13:38
  from '/home/c3luf14m0s/public_html/themes/theme_ororus2/templates/checkout/_partials/steps/unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efc9a12c7a455_12678932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44f11f1f23209fef98b771f0d244713ea30d5c4b' => 
    array (
      0 => '/home/c3luf14m0s/public_html/themes/theme_ororus2/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1560994343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efc9a12c7a455_12678932 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19878992495efc9a12c79537_74817184', 'step');
?>

<?php }
/* {block 'step'} */
class Block_19878992495efc9a12c79537_74817184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_19878992495efc9a12c79537_74817184',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
