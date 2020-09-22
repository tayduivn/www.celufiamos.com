<?php
require_once(dirname(__FILE__).'/../../classes/store.php');
class AdminStoreController extends ModuleAdminController
{
  public function __construct()
  {
    $this->deleted = false;
    $this->bootstrap = true;
    $this->colorOnBackground = false;
    $this->lang    = false;
    $this->token = Tools::getAdminTokenLite('AdminStore');
    $this->context = Context::getContext();
    $this->table = 'celufiamos_store';
    $this->className = 'storeCore';
    $this->allow_export = false; 
    parent::__construct();
    $this->meta_title = $this->module->getTranslator()->trans('Tiendas Fisicas', array(), 'Admin.Global');
    $this->fields_list = array(
        'id_celufiamos_store' => array(
            'title' => $this->module->getTranslator()->trans('ID', array(), 'Admin.Global'),
            'align' => 'center',
            'orderby' => false,
            'search' => false
        ),
        'store' => array(
            'title' => $this->module->getTranslator()->trans('Tienda', array(), 'Admin.Global'),
            'orderby' => false,
            'search' => true,
            'type' => 'text',
        ),
    );
  }

	public function renderForm() {
    $this->fields_form = array(
        'tinymce' => false,
        'legend' => array(
            'title' => $this->trans('Tiendas', array(), 'Admin.Catalog.Feature'),
            'icon' => 'icon-tags',
        ),
        'input' => array(
            array(
                'type' => 'text',
                'label' => $this->trans('Tienda', array(), 'Admin.Global'),
                'name' => 'store',
                'lang' => false,
                'required' => true,
                'hint' => $this->trans('Invalid characters:', array(), 'Admin.Notifications.Info') . ' <>;=#{}',
            ),
        ),
        'submit' => array(
        	'title' => $this->trans('Save', array(), 'Admin.Actions'),
        )
    );
    return parent::renderForm();		
  }


  public function renderView() {
    return $this->renderList();
  }

  public function postProcess() {
    parent::postProcess();
  }

  public function renderList() {
  	$this->addRowAction('view');
    $this->addRowAction('add');
    $this->addRowAction('edit');
    $this->addRowAction('delete');
    return parent::renderList();
  }
}
