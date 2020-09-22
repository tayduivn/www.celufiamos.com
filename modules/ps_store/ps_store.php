<?php
// Security
if (!defined('_PS_VERSION_'))
	exit;

class Ps_Store extends Module {

	CONST LANGUAGE_KEY = 'Modules.PsStore.Admin';

	public $html = '';
	protected $_errors = array();
	public $_ecountApiZone = NULL;
	public $_ecountApiSession = NULL;

	public function __construct() {
		$this->name = 'ps_store';
    $this->tab = 'payments_gateways';
    $this->version = '2.0.4';
		$this->author = 'Sebinc';
    $this->need_instance = 0;
    $this->bootstrap = true;
		$this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
		parent::__construct();
		$this->displayName = $this->l('Modulo Tienda');
		$this->description = $this->l('Modulo Tiendas');

		$this->confirmUninstall = $this->l('Esta seguro de desinstalar este modulo, la integracion con EcountERP dejara de funcionar?');
		$this->_setConfigForm();
	}
  public function install() {
  	$this->installTabs('AdminStore','Tiendas', 210);
		$sql = '
		CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'celufiamos_store` (
			  `id_celufiamos_store` int(11) NOT NULL,
			  `store` text NOT NULL,
			  PRIMARY KEY (`id_celufiamos_store`)
			) ENGINE=InnoDB DEFAULT CHARSET=latin1;
		';
		if (
			!parent::install()
			|| !Db::getInstance()->execute($sql)
			|| !$this->registerHook('displayCustomerAccount')
			|| !$this->registerHook('header')
		) {
			return false;
		}
		return true;
	}

	public function uninstall()
	{
		$this->uninstallTabs('AdminStore');
		$sql = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'celufiamos_store`';
		if (
			!parent::uninstall()
			|| !Db::getInstance()->execute($sql)
		) {
			return false;
		}
		return true;
	}
  private function uninstallTabs($class_name)
  {
      try {
          $id_tab = (int)Tab::getIdFromClassName($class_name);
          if ($id_tab) {
              $tab = new Tab($id_tab);
              $tab->delete();
          }
          return true;
      } catch (Exception $e) {
          return false;
      }
  }
  private function installTabs($class_name,$name,$parent = 3,$page = null,$title = null,$description = null,$url_rewrite = null) {
    try {
        $tab = new Tab();
        $tab->active = 1;
        $tab->class_name = $class_name;
        $tab->name = array();
        foreach (Language::getLanguages(true) as $lang)
            $tab->name[$lang['id_lang']] = $name;
        $tab->id_parent = $parent;//if exists
        $tab->position = 0;
        $tab->module = $this->name;
        $tab->add();
        return true;
    } catch (Exception $e) {
        return false;
    }
  } 	

  protected function _setConfigForm() {
		$this->config_fields = array(
			array(
				'type' => 'text',
				'label' => $this->trans('Código empresa', array(), self::LANGUAGE_KEY),
				'name' => 'ws_'.$this->name.'_code',
				'required' => true
			)
		);
		foreach ($this->config_fields as $key => $field) {
			$this->fields_values[$field['name']] = Tools::getValue($field['name'], Configuration::get($field['name']));
		}
		$this->config_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->trans('Tiendas', array(), 'Modules.PsStore.Admin'),
					'icon' => 'icon-envelope'
				),
				'input' => $this->config_fields,
				'submit' => array(
					'title' => $this->trans('Guardar', array(), 'Admin.Actions'),
				)
			),
		);
	}

	public function hookHeader($params) {
		$this->context->controller->addCSS(($this->_path).'ps_store.css', 'all');
		$this->context->controller->addJS($this->_path.'ps_store.js');
	}
	public function hookDisplayCustomerAccount($params) {
		$customer = new Customer($this->context->customer->id);
		if(!empty($customer->id_celufiamos_store) && $customer->id_celufiamos_store > 0) {
			$this->smarty->assign(array(
					'url' => $this->context->link->getModuleLink($this->name, 'store', array(), true)
			));
			return $this->display(__FILE__, 'views/templates/hook/hookDisplayCustomerAccount.tpl');
		}
	}

  public function getContent() {
		$this->_postProcess();
    $this->_renderConfigForm();
    return $this->html;
  }

  protected function _postProcess() {
		if (Tools::isSubmit('btnSubmit')) {
			$this->_validateConfigForm();
			if (empty($this->_errors)) {
				foreach ($this->config_fields as $key => $field) {
					Configuration::updateValue($field['name'], Tools::getValue($field['name']));
				}
				$this->html.= $this->displayConfirmation($this->trans('Settings updated', array(), 'Admin.Global'));
			}
		}
  }

  protected function _validateConfigForm() {
		foreach ($this->config_fields as $key => $field) {
			if (!Tools::getValue($field['name'])) {
				$this->_errors[] = $this->trans('Ingrese el campo <'. $field['label'].'>', array(), 'Modules.PsStore.Admin'); 
			}
		}
		if (sizeof($this->_errors) > 0) {
			$this->html.= $this->displayError('<li>' . implode('</li><li>', $this->_errors) . '</li>');
		}
	}

  protected function _renderConfigForm() {
		$helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->default_form_language = (int)Configuration::get('PS_LANG_DEFAULT');
		$helper->submit_action = 'btnSubmit';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='
			.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$helper->tpl_vars['fields_value'] = $this->fields_values;
		$helper->tpl_vars['languages'] = $this->context->controller->getLanguages();
		$helper->tpl_vars['id_language'] = $this->context->language->id;
		$this->html.= $helper->generateForm(array($this->config_form));
	}
}