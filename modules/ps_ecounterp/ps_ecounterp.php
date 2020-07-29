<?php
// Security
if (!defined('_PS_VERSION_'))
	exit;

class Ps_Ecounterp extends Module {

	CONST LANGUAGE_KEY = 'Modules.EcountERP.Admin';

	public $html = '';
	protected $_errors = array();
	public $_ecountApiZone = NULL;
	public $_ecountApiSession = NULL;

	public function __construct() {
		$this->name = 'ps_ecounterp';
    $this->tab = 'payments_gateways';
    $this->version = '2.0.4';
		$this->author = 'Sebinc';
    $this->need_instance = 0;
    $this->bootstrap = true;
		$this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
		parent::__construct();
		$this->displayName = $this->l('EcountERP API');
		$this->description = $this->l('Crea la integración con Ecount ERP para la creación de facturas automaticas ');

		$this->confirmUninstall = $this->l('Esta seguro de desinstalar este modulo, la integracion con EcountERP dejara de funcionar?');
		$this->_setConfigForm();
	}

  protected function _setConfigForm() {
		$this->config_fields = array(
			array(
				'type' => 'text',
				'label' => $this->trans('Código empresa', array(), self::LANGUAGE_KEY),
				'name' => 'ws_'.$this->name.'_code',
				'required' => true
			),
			array(
				'type' => 'text',
				'label' => $this->trans('Palabras Clave', array(), self::LANGUAGE_KEY),
				'name' => 'ws_'.$this->name.'_remarks',
				'required' => true
			),
			array(
				'type' => 'text',
				'label' => $this->trans('Código bodega', array(), self::LANGUAGE_KEY),
				'name' => 'ws_'.$this->name.'_storage',
				'required' => true
			),
			array(
				'type' => 'text',
				'label' => $this->trans('Código encargado', array(), self::LANGUAGE_KEY),
				'name' => 'ws_'.$this->name.'_employe',
				'required' => true
			),
			array(
				'type' => 'text',
				'label' => $this->trans('User Id', array(), self::LANGUAGE_KEY),
				'name' => 'ws_'.$this->name.'_userid',
				'required' => true
			),
			array(
				'type' => 'text',
				'label' => $this->trans('Api Cert Key', array(), self::LANGUAGE_KEY),
				'name' => 'ws_'.$this->name.'_apikey',
				'required' => true
			),
			array(
				'type' => 'text',
				'label' => $this->trans('Lang Type', array(), self::LANGUAGE_KEY),
				'name' => 'ws_'.$this->name.'_langtype',
				'required' => true
			),
			array(
				'type' => 'text',
				'label' => $this->trans('Request URL Zone', array(), self::LANGUAGE_KEY),
				'name' => 'ws_'.$this->name.'_zone',
				'required' => true
			),
			array(
				'type' => 'text',
				'label' => $this->trans('Request URL Login', array(), self::LANGUAGE_KEY),
				'name' => 'ws_'.$this->name.'_login',
				'required' => true
			),
			array(
				'type' => 'text',
				'label' => $this->trans('Request URL Customer', array(), self::LANGUAGE_KEY),
				'name' => 'ws_'.$this->name.'_customer',
				'required' => true
			),
			array(
				'type' => 'text',
				'label' => $this->trans('Request URL Sale', array(), self::LANGUAGE_KEY),
				'name' => 'ws_'.$this->name.'_sale',
				'required' => true
			),
		);
		foreach ($this->config_fields as $key => $field) {
			$this->fields_values[$field['name']] = Tools::getValue($field['name'], Configuration::get($field['name']));
		}
		$this->config_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->trans('Configuración api', array(), 'Modules.Kaiowa.Admin'),
					'icon' => 'icon-envelope'
				),
				'input' => $this->config_fields,
				'submit' => array(
					'title' => $this->trans('Guardar', array(), 'Admin.Actions'),
				)
			),
		);
	}

  public function install() {
		$sql = '
			CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'_ecount_erp_log` (
				`id` bigint(20) NOT NULL AUTO_INCREMENT,
				`id_order` int(11) NOT NULL,
				`log` text NOT NULL,
				`method` text NOT NULL,
				`url` text NOT NULL,
				PRIMARY KEY (`id`)
			) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
		';
		$this->createStateOrder('Generar Factura EcountERP','#c6212e');
		Configuration::updateValue('ws_'.$this->name.'_code','102800');
		Configuration::updateValue('ws_'.$this->name.'_remarks','CELUFIAMOS-WEB');
		Configuration::updateValue('ws_'.$this->name.'_storage','750');
		Configuration::updateValue('ws_'.$this->name.'_employe','00070');
		Configuration::updateValue('ws_'.$this->name.'_userid','Proyectos');
		Configuration::updateValue('ws_'.$this->name.'_apikey','4f76d6b30238046ef85e6ada0a33f1daa0');
		Configuration::updateValue('ws_'.$this->name.'_langtype','es');
		Configuration::updateValue('ws_'.$this->name.'_zone','https://oapi.ecounterp.com/OAPI/V2/Zone');
		Configuration::updateValue('ws_'.$this->name.'_login','https://oapi{ZONE}.ecounterp.com/OAPI/V2/OAPILogin');
		Configuration::updateValue('ws_'.$this->name.'_customer','https://oapi{ZONE}.ecounterp.com/OAPI/V2/AccountBasic/SaveBasicCust?SESSION_ID={SESSION_ID}');
		Configuration::updateValue('ws_'.$this->name.'_sale','https://oapi{ZONE}.ecounterp.com/OAPI/V2/Sale/SaveSale?SESSION_ID={SESSION_ID}');
		if (
    	!parent::install()
			|| !$this->registerHook('actionOrderStatusPostUpdate')
			|| !$this->registerHook('displayAdminOrderRight')
			|| !$this->Db::getInstance()->Execute($sql)
		) {
			return false;
		}
		return true;
	}
	
	public function hookDisplayAdminOrderRight($params) {
		$sql = 'SELECT * FROM `' . _DB_PREFIX_ . 'ecount_erp_log` WHERE id_order = '.$_GET['id_order'];
		$log = Db::getInstance()->ExecuteS($sql);
		$this->smarty->assign(array(
			'log' => $log
		));
		return $this->display(__FILE__, 'views/templates/hook/hookDisplayAdminOrderLeft.tpl');
	}

  public function hookActionOrderStatusPostUpdate($params) {
		if ( $params['newOrderStatus']->module_name == $this->name ) {
			$Order = new Order( (int) $params['id_order'] );
			$ProductsList = current($Order->getProductsDetail());
			$Customer = new Customer( (int) $Order->id_customer );
			$Address = new Address( (int) $Order->id_address_invoice);
			$depto = StateCore::getNameById($Address->id_state);
			if ( empty($Customer->in_ecount) || $Customer->in_ecount == 0  ) {
				$customerResponse = $this->_createApiCustomer(array(
					'BUSINESS_NO' => $Customer->document,
					'CUST_NAME' => mb_strtoupper(
						$Customer->firstname
						. ( !empty($Customer->firstname2) ? ' '.$Customer->firstname2: '')
						. ' ' . $Customer->lastname
						. ( !empty($Customer->lastname2) ? ' '.$Customer->firstname2: '')
					),
					'TEL' => $Customer->mobile,
					'EMAIL' => mb_strtoupper($Customer->email),
					'ADDR' => mb_strtoupper($Address->address1 . (!empty($Address->address2) ? ' '.$Address->address2 : '')),
					'HP_NO' => $Address->phone_mobile,
					'DM_POST' => $Address->postcode,
					'REMARKS' => Configuration::get('ws_'.$this->name.'_remarks'),
					'REMARKS_WIN' => Configuration::get('ws_'.$this->name.'_remarks'),
					'POST_NO_postNo' => $Address->postcode,
					'CONT1' => mb_strtoupper($Address->city),
					'CONT2' => mb_strtoupper($depto)
				));

				if (!empty($customerResponse->Data->SuccessCnt) || $customerResponse->Data->SuccessCnt > 0) {
					$Customer->in_ecount = 1;
					$Customer->update();
				}
			}
			## Create venta
			$total = round($ProductsList['product_price'] * Configuration::get('BANK_KAIOWA_CUOTAS'));
			$customerResponse = $this->_createApiOrder(array(
				'UPLOAD_SER_NO' => '',
				'CUST' => $Customer->document,
				'WH_CD' => Configuration::get('ws_'.$this->name.'_storage'),
				'REMARKS' => Configuration::get('ws_'.$this->name.'_remarks'),
				'U_MEMO5' => mb_strtoupper(Configuration::get('BANK_KAIOWA_CUOTAS') . ' cuotas mensuales de '. round($ProductsList['product_price'])),
				'U_MEMO3' => mb_strtoupper($Address->city),
				'U_MEMO4' => mb_strtoupper($depto),
				'U_TXT1'	=> mb_strtoupper('Pedido: '.$Order->reference),
				'EMP_CD' => Configuration::get('ws_'.$this->name.'_employe'),
				'PROD_CD' => $ProductsList['product_reference'],
				'QTY' => $ProductsList['product_quantity'],
				'PRICE' => $total,
				'SUPPLY_AMT' => $total
			));
  	}
  }

  private function createStateOrder($name, $color, $template = null) {
		$state_exist = false;
		$states = OrderState::getOrderStates((int)$this->context->language->id);
		// check if order state exist
		foreach ($states as $state) {
			if (in_array($name, $state)) {
				$state_exist = true;
				Configuration::updateValue(strtoupper($this->name.'_state'), $state['id_order_state']);
				break;
			}
		}
		// If the state does not exist, we create it.
		if (!$state_exist) {
			// create new order state
			$order_state = new OrderState();
			$order_state->color = $color;
			$order_state->send_email = true;
			$order_state->module_name = $this->name;
			if (!empty($template)) {
				$order_state->template = $template;
			}
			$order_state->name = array();
			$languages = Language::getLanguages(false);
			foreach ($languages as $language) {
				$order_state->name[ $language['id_lang'] ] = $name;
			}
			$order_state->add();
			Configuration::updateValue(strtoupper($this->name.'_state'), $order_state->id);
		}
    return true;
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
				$this->_errors[] = $this->trans('Ingrese el campo <'. $field['label'].'>', array(), 'Modules.Kaiowa.Admin'); 
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

	public function uninstall()
	{
		$sql = '
			DROP TABLE ` '._DB_PREFIX_.'_ecount_erp_log `
		';
		if (
			!parent::uninstall()
			|| !Db::getInstance()->execute($sql)
		) {
			return false;
		}
		return true;
	}

	protected function _call (
		$params,
		$method = 'post',
		$header = array('Content-Type:application/json'),
		$timeout = 20,
		$cTimeout = 30,
		$ssl = false,
		$follow = true,
		$maxRedirect = 5
	) {
		if (function_exists('curl_init')) {
			Tools::refreshCACertFile();
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl, CURLOPT_URL, $params['url']);
			curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $cTimeout);
			curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, $ssl);
			curl_setopt($curl, CURLOPT_FOLLOWLOCATION, $follow);
			curl_setopt($curl, CURLOPT_MAXREDIRS, $maxRedirect);
			curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
			if ( $method == 'post' ) {
				curl_setopt($curl, CURLOPT_POST, true);
				if(in_array('Content-Type:application/json',$header)) {
					curl_setopt($curl, CURLOPT_POSTFIELDS, Tools::jsonEncode($params['params']));
				} else {
					curl_setopt($curl, CURLOPT_POSTFIELDS, $params['params']);
				}
			}
			$content = curl_exec($curl);
			$log = base64_encode('<b>REQUEST:</b><pre>'.json_encode($params).'</pre><b>RESPONSE:</b><pre>'.$content.'</pre>');
			$this->_log(mb_strtoupper($method), $params['url'], $log , $_REQUEST['id_order']);
			if ($content === FALSE) {
				return false;
			}
			$json = json_decode($content);
			if (json_last_error() === 0) {
				return $json;
			}
			return $content;
		}
	}

	protected function _log($method, $url, $msm, $id_order ) {
		$sql = "
			INSERT INTO " . _DB_PREFIX_ . "ecount_erp_log (`id_order`, `log`, `method`, `url`)
			VALUES (" . $id_order . ",'". $msm ."', '". $method ."', '".$url."' )
		";
  	Db::getInstance()->execute($sql);
	}

	protected function _getApiZone() {
		if (empty($this->_ecountApiZone)) {
			$response = $this->_call(array(
				'url' => Configuration::get('ws_'.$this->name.'_zone'),
				'params' => array(
					'COM_CODE' => Configuration::get('ws_'.$this->name.'_code')
				)
			));
			if (!empty($response) && $response->Status == '200') {
				$this->_ecountApiZone = $response;
			}
		}
		return $this->_ecountApiZone;
	}

	protected function _createApiCustomer($params) {
		$zone = $this->_getApiZone();
		$login = $this->_getApiLogin();
		if (!empty($zone->Data->ZONE) && !empty($login->Data->Datas->SESSION_ID) ) {
			$url = str_replace(
				array(
					'{ZONE}',
					'{SESSION_ID}'
				),
				array(
					$zone->Data->ZONE,
					$login->Data->Datas->SESSION_ID
				),
				Configuration::get('ws_'.$this->name.'_customer')
			);
			$response = $this->_call(array(
				'url' => $url,
				'params' => array(
					'CustList' => array(
						array('Line' => 0, 'BulkDatas' => $params)
					)
				)
			));
			return $response;
		}
	}

	protected function _createApiOrder($params) {
		$zone = $this->_getApiZone();
		$login = $this->_getApiLogin();
		if (!empty($zone->Data->ZONE) && !empty($login->Data->Datas->SESSION_ID) ) {
			$url = str_replace(
				array(
					'{ZONE}',
					'{SESSION_ID}'
				),
				array(
					$zone->Data->ZONE,
					$login->Data->Datas->SESSION_ID
				),
				Configuration::get('ws_'.$this->name.'_sale')
			);
			$response = $this->_call(array(
				'url' => $url,
				'params' => array(
					'SaleList' => array(
						array('Line' => 0, 'BulkDatas' => $params)
					)
				)
			));
			return $response;
		}
	}	

	protected function _getApiLogin() {
		$zone = $this->_getApiZone();
		if (!empty($zone->Data->ZONE) && !empty($zone->Data->DOMAIN)){
			if (empty($this->_ecountApiSession)) {
				$response = $this->_call(array(
					'url' => str_replace('{ZONE}', $zone->Data->ZONE ,Configuration::get('ws_'.$this->name.'_login')),
					'params' => array(
						'COM_CODE' => Configuration::get('ws_'.$this->name.'_code'),
						'USER_ID' => Configuration::get('ws_'.$this->name.'_userid'),
						'API_CERT_KEY' => Configuration::get('ws_'.$this->name.'_apikey'),
						'LAN_TYPE' => Configuration::get('ws_'.$this->name.'_langtype'),
						'ZONE' => $zone->Data->ZONE,
					)
				));
				if (!empty($response) && $response->Status == '200') {
					$this->_ecountApiSession = $response;
				}
			}
			return $this->_ecountApiSession;
		}
	}
}