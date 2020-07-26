<?php

class AdminKaiowaController extends ModuleAdminController
{
  public function __construct()
  {
    require_once (dirname(__FILE__).'/../../classes/kaiowa.php');
    $this->deleted = false;
    $this->bootstrap = true;
    $this->colorOnBackground = false;
    $this->lang    = false;
    $this->token = Tools::getAdminTokenLite('AdminKaiowa');
    $this->context = Context::getContext();
    $this->table = 'kaiowa';
    $this->allow_export = true; 
    parent::__construct();
    $this->meta_title = $this->module->getTranslator()->trans('Créditos Conciliación', array(), 'Admin.Global');
    $this->fields_list = array(
        'id_transaccion' => array(
            'title' => $this->module->getTranslator()->trans('ID', array(), 'Admin.Global'),
            'align' => 'center',
            'orderby' => false,
            'search' => false
        ),
        'fh_sistema' => array(
            'title' => $this->module->getTranslator()->trans('Fecha', array(), 'Admin.Global'),
            'orderby' => false,
            'search' => true,
            'type' => 'datetime',
        ),                  
        'razon_social' => array(
            'title' => $this->module->getTranslator()->trans('R. Social', array(), 'Admin.Global'),
            'align' => 'center',
            'orderby' => false,
            'search' => false
        ),  
        'cedula_deudor' => array(
            'title' => $this->module->getTranslator()->trans('Cel', array(), 'Admin.Global'),
            'orderby' => false,
            'search' => false
        ),
        'c_modalidad' => array(
            'title' => $this->module->getTranslator()->trans('Modalidad', array(), 'Admin.Global'),
            'orderby' => false,
            'search' => false
         ),
        'd_modalidad' => array(
            'title' => $this->module->getTranslator()->trans('Desc. Modalidad', array(), 'Admin.Global'),
            'orderby' => false,
            'search' => false
        ),
        'id_obligacion' => array(
            'title' => $this->module->getTranslator()->trans('# Credito', array(), 'Admin.Global'),
            'orderby' => false,
            'search' => false
        ),
        'vrfinanciar' => array(
            'title' => $this->module->getTranslator()->trans('Vlr Financiado', array(), 'Admin.Global'),
            'orderby' => false,
            'search' => false
        ),
        'totalcredito' => array(
            'title' => $this->module->getTranslator()->trans('Total + Interes', array(), 'Admin.Global'),
            'orderby' => false,
            'search' => false
        ),
        'estado' => array(
            'title' => $this->module->getTranslator()->trans('Est', array(), 'Admin.Global'),
            'orderby' => false,
            'search' => false
        ),
        'd_estado' => array(
            'title' => $this->module->getTranslator()->trans('Desc. Estado', array(), 'Admin.Global'),
            'orderby' => false,
            'search' => false
        ),
        'c_garantia' => array(
            'title' => $this->module->getTranslator()->trans('Emp Garantia', array(), 'Admin.Global'),
            'orderby' => false,
            'search' => false
        ),
        'id_marca' => array(
            'title' => $this->module->getTranslator()->trans('ID Marca', array(), 'Admin.Global'),
            'orderby' => false,
            'search' => false
        ),
        'interesiva' => array(
            'title' => $this->module->getTranslator()->trans('Int + IVA', array(), 'Admin.Global'),
            'orderby' => false,
            'search' => false
        ),
        'cre_valor_garantia' => array(
            'title' => $this->module->getTranslator()->trans('Vlr Garantia', array(), 'Admin.Global'),
            'orderby' => false,
            'search' => false
        ),
    );
  }

  public function postProcess()
  {
    parent::postProcess();
  }

  public function renderList() {
    $this->_buildList();
    parent::initToolbar();
    return parent::renderList();
  }

    private function _buildList() {
            $ws_response = Hook::exec('actionWSKaiowa', array('type' => 'conciliation'), null, true);
            array_push($ws_response['ps_kaiowa']['datos'],array(
               "razon_social" => "C.I. HERMECO S.A.", 
               "d_sucursal" => "KAIOWA - MOLINOS", 
               "ubicacion" => "MEDELLIN", 
               "f_apertura" => "2020-05-18", 
               "cedula_deudor" => 1020412704, 
               "c_modalidad" => 8, 
               "d_modalidad" => "7 Meses Pago Quincenal ", 
               "id_obligacion" => 811, 
               "vrfinanciar" => 150000, 
               "totalcredito" => 163869, 
               "estado" => 1, 
               "d_estado" => "VIGENTE", 
               "fh_sistema" => "2020-05-18 10:47:40", 
               "c_garantia" => 2, 
               "id_marca" => 2, 
               "interesiva" => 13869, 
               "cre_valor_garantia" => 17850, 
               "id_transaccion" => 54121 
            ));
            array_push($ws_response['ps_kaiowa']['datos'],array(
               "razon_social" => "C.I. HERMECO S.A.", 
               "d_sucursal" => "KAIOWA - MOLINOS", 
               "ubicacion" => "MEDELLIN", 
               "f_apertura" => "2020-05-18", 
               "cedula_deudor" => 1020412704, 
               "c_modalidad" => 8, 
               "d_modalidad" => "7 Meses Pago Quincenal ", 
               "id_obligacion" => 811, 
               "vrfinanciar" => 150000, 
               "totalcredito" => 163869, 
               "estado" => 1, 
               "d_estado" => "VIGENTE", 
               "fh_sistema" => "2020-05-18 10:47:40", 
               "c_garantia" => 2, 
               "id_marca" => 2, 
               "interesiva" => 13869, 
               "cre_valor_garantia" => 17850, 
               "id_transaccion" => 54121 
            ));
            array_push($ws_response['ps_kaiowa']['datos'],array(
               "razon_social" => "C.I. HERMECO S.A.", 
               "d_sucursal" => "KAIOWA - MOLINOS", 
               "ubicacion" => "MEDELLIN", 
               "f_apertura" => "2020-05-18", 
               "cedula_deudor" => 1020412704, 
               "c_modalidad" => 8, 
               "d_modalidad" => "7 Meses Pago Quincenal ", 
               "id_obligacion" => 811, 
               "vrfinanciar" => 150000, 
               "totalcredito" => 163869, 
               "estado" => 1, 
               "d_estado" => "VIGENTE",
               "fh_sistema" => "2020-05-18 10:47:40", 
               "c_garantia" => 2, 
               "id_marca" => 2, 
               "interesiva" => 13869, 
               "cre_valor_garantia" => 17850, 
               "id_transaccion" => 54121 
            ));

        if(!empty($ws_response['ps_kaiowa']['datos'])) {
          
          $kaiowa = new kaiowaCore;
          $kaiowa->clean();
          foreach($ws_response['ps_kaiowa']['datos'] as $data) {
            foreach ($data as $k => $value) {
              $kaiowa->$k = $value;
            }
            $kaiowa->add();
          }
        }    
        return true;     
    }
}
