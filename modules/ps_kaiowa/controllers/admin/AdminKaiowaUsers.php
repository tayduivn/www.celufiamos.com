<?php

class AdminKaiowaUsersController extends ModuleAdminController
{
  public function __construct()
  {
    require_once (dirname(__FILE__).'/../../classes/kaiowaUsers.php');
    $this->deleted = false;
    $this->bootstrap = true;
    $this->colorOnBackground = false;
    $this->lang    = false;
    $this->token = Tools::getAdminTokenLite('AdminKaiowaUsers');
    $this->context = Context::getContext();
    $this->table = 'kaiowa_users';
    $this->allow_export = true; 
    parent::__construct();
    $this->meta_title = $this->module->getTranslator()->trans('Usuarios no aprobados', array(), 'Admin.Global');
    $this->fields_list = array(
        'id_kaiowa_users' => array(
            'title' => $this->module->getTranslator()->trans('ID', array(), 'Admin.Global'),
            'align' => 'center',
            'orderby' => true,
            'search' => true
        ),
        'firstname' => array(
            'title' => $this->module->getTranslator()->trans('1er Nombre', array(), 'Admin.Global'),
            'align' => 'center',
            'orderby' => true,
            'search' => true
        ),                  
        'firstname2' => array(
            'title' => $this->module->getTranslator()->trans('2do Nombre', array(), 'Admin.Global'),
            'align' => 'center',
            'orderby' => true,
            'search' => true
        ),  
        'lastname' => array(
            'title' => $this->module->getTranslator()->trans('1er Apellido', array(), 'Admin.Global'),
            'orderby' => true,
            'search' => true
        ),
        'lastname2' => array(
            'title' => $this->module->getTranslator()->trans('2do Apellido', array(), 'Admin.Global'),
            'orderby' => true,
            'search' => true
         ),
        'email' => array(
            'title' => $this->module->getTranslator()->trans('Email', array(), 'Admin.Global'),
            'orderby' => true,
            'search' => true
        ),
        'mobile' => array(
            'title' => $this->module->getTranslator()->trans('Celular', array(), 'Admin.Global'),
            'orderby' => true,
            'search' => true
        ),
        'date' => array(
            'title' => $this->module->getTranslator()->trans('Fecha', array(), 'Admin.Global'),
            'orderby' => true,
            'search' => true,
            'type' => 'datetime',
        )
    );
  }

  public function postProcess()
  {
    parent::postProcess();
  }

  public function renderList() {
    parent::initToolbar();
    return parent::renderList();
  }
}
