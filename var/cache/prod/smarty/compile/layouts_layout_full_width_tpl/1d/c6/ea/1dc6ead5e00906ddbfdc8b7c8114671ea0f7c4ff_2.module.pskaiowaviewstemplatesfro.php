<?php
/* Smarty version 3.1.33, created on 2020-07-01 08:32:16
  from 'module:pskaiowaviewstemplatesfro' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5efc9060652bc7_30114547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dc6ead5e00906ddbfdc8b7c8114671ea0f7c4ff' => 
    array (
      0 => 'module:pskaiowaviewstemplatesfro',
      1 => 1593610107,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl' => 1,
  ),
),false)) {
function content_5efc9060652bc7_30114547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6788171915efc906062bb28_19168437', 'page_title');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3199848495efc906062fbc7_50185311', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_6788171915efc906062bb28_19168437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_6788171915efc906062bb28_19168437',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pagos','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_3199848495efc906062fbc7_50185311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_3199848495efc906062fbc7_50185311',
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
            <th scope="col">
<button data-toggle="modal" data-target="#infoModal" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['credit']->value->id_obligacion, ENT_QUOTES, 'UTF-8');?>
" type="button" class="btn btn-info view-credit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ver detalle','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</button>
            <button data-toggle="modal" data-target="#infoPayment" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['credit']->value->id_obligacion, ENT_QUOTES, 'UTF-8');?>
" type="button" class="btn btn-info view-credit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pagar','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</button>
            </th>
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
<div class="modal fade" id="infoPayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pagos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row mx-1">
          <div class="form-group">
            <label for="paymentQuotes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Seleccione el número de cuotas','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</label>
            <select class="form-control" id="paymentQuotes">
            </select>
          </div>
          <div id="consignation" class="mb-2">
            <h3 class="text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'O paga por consignación bancaria','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</h3>
            <?php $_smarty_tpl->_subTemplateRender('module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
          <form class="text-right">
            <button type="button" class="btn btn-success payment-wompi"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pagar con wompi','d'=>'Modules.ps_kaiowa.myaccount'),$_smarty_tpl ) );?>
</button>
        </form>      	
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cerrar','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</button>
      </div>
    </div>
  </div>
</div>
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
