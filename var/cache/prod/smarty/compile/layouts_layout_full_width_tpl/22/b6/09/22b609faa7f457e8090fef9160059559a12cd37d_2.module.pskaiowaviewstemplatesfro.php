<?php
/* Smarty version 3.1.33, created on 2020-07-01 08:27:59
  from 'module:pskaiowaviewstemplatesfro' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efc8f5f3e73e1_12659409',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22b609faa7f457e8090fef9160059559a12cd37d' => 
    array (
      0 => 'module:pskaiowaviewstemplatesfro',
      1 => 1591638764,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efc8f5f3e73e1_12659409 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19440921085efc8f5f3c9909_72598554', 'page_title');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17549948675efc8f5f3cd7b5_02123548', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_19440921085efc8f5f3c9909_72598554 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_19440921085efc8f5f3c9909_72598554',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Estado de cuenta','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_17549948675efc8f5f3cd7b5_02123548 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_17549948675efc8f5f3cd7b5_02123548',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['status']->value) {?>
<div class="page-my-account">
	<div id="content">
		<div class="row">
		<div class="table-responsive">
		  <table class="table">
		    <thead>
		      <tr>
		        <th scope="col">#</th>
		        <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Valor Cuota','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</th>
		        <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fecha Apertura','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</th>
		        <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fecha Próxima Cuota','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</th>
		        <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Saldo','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</th>
		        <th scope="col"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cuotas pendientes','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</th>
		        <th scope="col"></th>
		      </tr>
		    </thead>
		    <tbody>
		    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['status']->value, 'credit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['credit']->value) {
?>
		      <tr>
		        <th scope="row"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['credit']->value->id_obligacion, ENT_QUOTES, 'UTF-8');?>
</th>
		        <td><?php echo htmlspecialchars(Tools::displayPrice($_smarty_tpl->tpl_vars['credit']->value->valor_cuota), ENT_QUOTES, 'UTF-8');?>
</td>
		        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['credit']->value->f_apertura, ENT_QUOTES, 'UTF-8');?>
</td>
		        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['credit']->value->f_proximacuota, ENT_QUOTES, 'UTF-8');?>
</td>
		        <td><?php echo htmlspecialchars(Tools::displayPrice($_smarty_tpl->tpl_vars['credit']->value->saldo_obligacion), ENT_QUOTES, 'UTF-8');?>
</td>
		        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['credit']->value->cuotas_pendientes, ENT_QUOTES, 'UTF-8');?>
</td>
		        <th scope="col"><button data-toggle="modal" data-target="#infoModal" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['credit']->value->id_obligacion, ENT_QUOTES, 'UTF-8');?>
" type="button" class="btn btn-info view-credit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ver detalle','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</button></th>
		      </tr>
		    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
		    </tbody>
		  </table>
		</div>	
	    </div>
	  </div>
  </div>
</div>
<?php } else { ?>
    <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No se encuentran registros','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</div>
<?php }?>
<!-- Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row mx-1">
        	<div class="col-md-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Estado','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</div>
        	<div id="d_estado_cartera" class="col-md-6">&nbsp;</div>
        	<div class="col-md-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cuotas pendientes','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</div>
        	<div id="cuotas_pendientes" class="col-md-6">&nbsp;</div>
        	<div class="col-md-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modalidad','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</div>
        	<div id="d_modalidad" class="col-md-6">&nbsp;</div>
        	<div class="col-md-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fecha de apertura','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</div>
        	<div id="f_apertura" class="col-md-6">&nbsp;</div>
        	<div class="col-md-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Próxima cuota','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</div>
        	<div id="f_proximacuota" class="col-md-6">&nbsp;</div>
        	<div class="col-md-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Valor mora','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</div>
        	<div id="valor_mora" class="col-md-6">&nbsp;</div>
        	<div class="col-md-6"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</div>
        	<div id="valorobligacion" class="col-md-6">&nbsp;</div>
        	<div class="col-md-6"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Valor cuota','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</b></div>
        	<div id="valor_cuota" class="col-md-6">&nbsp;</div>        	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cerrar','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</button>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'page_content'} */
}
