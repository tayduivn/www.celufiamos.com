<?php
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

if (!defined('_PS_VERSION_')) {
    exit;
}

class Ps_Kaiowa extends PaymentModule
{
    const STATE_ORDER_WAIT = 'CREDITO PENDIENTE';
    const STATE_ORDER_OK = 'CREDITO APROBADO';
    const STATE_ORDER_FAIL = 'CREDITO RECHAZADO';    

    protected $_html = '';
    protected $_postErrors = array();

    public $details;
    public $owner;
    public $address;
    public $extra_mail_vars;

    CONST BALANCE = 'balance';
    CONST STATUS = 'status';
    CONST CONCILIATION = 'conciliation';
    public function __construct()
    {

        $this->config_form = array(
            'BANK_KAIOWA_CUOTAS' =>  array(
                'label' => 'Cuotas',
            ),
            'BANK_KAIOWA_CID' => array(
                'label' => 'CID',
            ),
            'BANK_KAIOWA_USER' => array(
                'label' => 'User',
            ),
            'BANK_KAIOWA_PASSWORD' => array(
                'label' => 'Password',
            ),
            'BANK_KAIOWA_URL_CUPO' => array(
                'label' => 'Ws solicitud de cupo',
            ),
            'BANK_KAIOWA_URL_SALDO' => array(
                'label' => 'Ws saldo disponible',
            ),
            'BANK_KAIOWA_URL_CREACION' => array(
                'label' => 'Ws creacion cupo',
            ),
            'BANK_KAIOWA_URL_STATUS' => array(
                'label' => 'Ws estado de cuenta',
            ),
            'BANK_KAIOWA_URL_CONCILIATION' => array(
                'label' => 'Ws conciliacion',
            ),            
            'BANK_KAIOWA_URL_SCHEMACIA' => array(
                'label' => 'Schemacia',
            ),
            'BANK_KAIOWA_URL_MARCA' => array(
                'label' => 'ID marca',
            ),
            'BANK_KAIOWA_WOMPI_PUB_KEY' => array(
                'label' => 'Wompi llave pública',
            ),
            'BANK_KAIOWA_HOUR_INI' => array(
                'label' => 'Hora inicio mantenimiento',
            ),
            'BANK_KAIOWA_HOUR_FIN' => array(
                'label' => 'Hora fin mantenimiento',
            ),
            'BANK_KAIOWA_HOUR_THANK_YOU' => array(
                'label' => 'Thank you page URL',
            ),
        );
        $this->name = 'ps_kaiowa';
        $this->tab = 'payments_gateways';
        $this->version = '2.0.4';
        $this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
        $this->author = 'PrestaShop';
        $this->controllers = array('payment', 'validation');
        $this->is_eu_compatible = 1;

        $this->currencies = true;
        $this->currencies_mode = 'checkbox';

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('Kaiowa', array(), 'Modules.Kaiowa.Admin');
        $this->description = $this->trans('Pasarela de pagos kaiowa.', array(), 'Modules.Kaiowa.Admin');
        $this->confirmUninstall = $this->trans('Are you sure about removing these details?', array(), 'Modules.Kaiowa.Admin');
        if (!isset($this->owner) || !isset($this->details) || !isset($this->address)) {
            $this->warning = $this->trans('Account owner and account details must be configured before using this module.', array(), 'Modules.Kaiowa.Admin');
        }
        if (!count(Currency::checkPaymentCurrencies($this->id))) {
            $this->warning = $this->trans('No currency has been set for this module.', array(), 'Modules.Kaiowa.Admin');
        }
    }

    public function install()
    {
        $sql = 'ALTER TABLE `ps_customer` ADD `firstname2` VARCHAR(255) NOT NULL AFTER `reset_password_validity`, ADD `lastname2` VARCHAR(255) NOT NULL AFTER `firstname2`, ADD `document_type` VARCHAR(2) NOT NULL AFTER `lastname2`, ADD `document` VARCHAR(20) NOT NULL AFTER `document_type`, ADD `f_exped` DATE NOT NULL AFTER `document`, ADD `mobile` INT(11) NOT NULL AFTER `f_exped`;';

        $this->createStateOrder(self::STATE_ORDER_WAIT,'#4169E1', 'credito_pendiente');
        $this->createStateOrder(self::STATE_ORDER_OK,'#acef00', 'credito_aprobado');
        $this->createStateOrder(self::STATE_ORDER_FAIL,'#8f0621', 'credito_rechazado');

        
        if (!parent::install() 
            || !$this->registerHook('paymentReturn') 
            || !$this->registerHook('paymentOptions')
            || !$this->registerHook('actionCartSave')
            || !$this->registerHook('header')
            || !$this->registerHook('actionFrontControllerSetVariables')
            || !$this->registerHook('displayProductPriceBlock')
            || !$this->registerHook('displayCustomerAccount')
            || !$this->registerHook('actionSubmitAccountBefore')
            || !$this->registerHook('actionWSKaiowa')
            || !$this->registerHook('displayExpressCheckout')
            || !$this->registerHook('displayFooter')
            || !$this->registerHook('displayOrderDetail')
            || !$this->registerHook('displayOrderDetail')
            || !$this->registerHook('displayCustomerAccountForm')
        ) {
            return false;
        }
        return true;
    }

    public function hookDisplayCustomerAccountForm($params) {
        return '<div class="col-md-12" style="text-align:center;margin-bottom:20px">
        <a href="/content/17-terminos-y-condiciones" target="_new" class="btn btn-secundary form-control-submit">Ver términos y condiciones</a>
        <a href="/content/18-politica-de-manejo-de-informacion-de-datos-personales" target="_new" class="btn btn-secundary form-control-submit">Ver póliticas de tratamiento</a>
        </div>';
    }

    public function hookDisplayOrderDetail($params) {
        $cart = new Cart($params['order']->id_cart);
        require_once(dirname(__FILE__).'/../ps_store/classes/cuotas.php');

        $ws_response = Hook::exec('actionWSKaiowa', array('type' => 'status'), null, true);
        $status = json_decode($ws_response['ps_kaiowa']);
        
        foreach ($status->datos->cuposaldo->creditos_vigentes as $credito) {
            if($credito->id_obligacion == $cart->id_obligacion) {
                $data = $credito;
                break;
            }
        }
        $payments = cuotasCore::getPaymentsByIdOrder($params['order']->id);
        $this->smarty->assign(array(
            'kaiowa' => $data,
            'pagos' => $payments
        ));
        return $this->display(__FILE__, 'views/templates/hook/hookDisplayOrderDetail.tpl');
    }

    public function hookDisplayFooter($params) {
        return $this->display(__FILE__, 'views/templates/hook/hookDisplayFooter.tpl');
    }

    public function hookDisplayExpressCheckout($params){

        $total = $params['storecart']
            ? (float)$params['storecart']->getOrderTotal(true, Cart::BOTH)
            : (float)$this->context->cart->getOrderTotal(true, Cart::BOTH);
        $url_comercio = $params['storeurl']
            ? $params['storeurl']
            : $this->context->link->getPageLink('cart').'?action=show&checkout';
        $nro_documento = $params['storedoc']
            ? $params['storedoc']
            : $this->context->customer->document;
        $cart_id = $params['storecartid']
            ? $params['storecartid']
            : $this->context->cart->id;

        $request = array(
            "cid" =>  Configuration::get('BANK_KAIOWA_CID'),
            "url_comercio" =>  $url_comercio,
            "api_response_ecommerce" => $this->context->link->getModuleLink('ps_kaiowa', 'responses',array('type' => 'cart')),
            "nro_documento" => $nro_documento,
            "login" => Configuration::get('BANK_KAIOWA_USER'),
            "pass" => Configuration::get('BANK_KAIOWA_PASSWORD'),
            "c_sucursal" =>  "1",
            "id_transaccion" => $cart_id,
            "valor_financiar" =>  ($total * Configuration::get('BANK_KAIOWA_CUOTAS'))
        );
        $urlRequest = str_replace(
            'JSON',
            $this->base64url_encode(utf8_encode(Tools::jsonEncode($request))),
            Configuration::get('BANK_KAIOWA_URL_CREACION')
        );
        if(!empty($params['storecart'])) {
            return $urlRequest;
        }
        $this->smarty->assign(array(
            'url' => $urlRequest
        ));

        return $this->display(__FILE__, 'views/templates/hook/hookDisplayExpressCheckout.tpl');

    }

    public function hookActionFrontControllerSetVariables() {

        if(!empty($this->context->customer->id)) {
            $credits = Tools::jsonDecode($this->hookActionWSKaiowa(array('type' => self::STATUS)));
            foreach ($credits->datos->cuposaldo->creditos_vigentes as $k => &$row) {
                $row->wompi = $this->_getWompiConfig($row->id_obligacion, $row);
            }
            $parseCredits = $credits;
            if(isset($parseCredits->datos->cuposaldo->creditos_vigentes)) {            
                foreach ($parseCredits->datos->cuposaldo->creditos_vigentes as $k => &$row) {
                    
                    foreach($row as $kr => $value) {
                        if(in_array($kr, array(
                            'valorobligacion',
                            'saldo_obligacion',
                            'saldo_capital',
                            'valor_cuota',
                            'valor_mora',
                            'paga_hoy'
                        ))) {
                            if($value < 0) {
                                $value = 0;
                            }
                            $row->$kr = Tools::displayPrice($value);
                        }
                        if(isset($value->cuotas_pendientes)) {
                            for ($i = 1; $i <= $value->cuotas_pendientes; $i ++) {
                                $value->payments[$i] = ($i * $value->valor_mora)+'00';
                            }
                        }
                    }
                }
            }
            return array(
                'wompi' => $this->_getWompiConfig(),
                'redirect' => $this->context->link->getModuleLink('ps_kaiowa', 'balance'),
                'cupo' => $credits,
                'cuota' => ($credits->cupo/(Configuration::get('BANK_KAIOWA_CUOTAS')-1)),
                'credits' => json_encode($credits),
                'parsecredits' => json_encode($parseCredits),
                'availability' => $this->_checkAvailability()
            );
        } else {
            return array(
                'availability' => $this->_checkAvailability()
            );
        }
    }

    private function _checkAvailability() {

        if(!empty(Configuration::get('BANK_KAIOWA_HOUR_INI')) && !empty(Configuration::get('BANK_KAIOWA_HOUR_FIN'))) {
            if(date('H') >= Configuration::get('BANK_KAIOWA_HOUR_INI') || date('H') <= Configuration::get('BANK_KAIOWA_HOUR_FIN') ) {
                return false;
            }
        }

        $request = array(
            'a_schemacia' => Configuration::get('BANK_KAIOWA_URL_SCHEMACIA'),
            'a_login' => Configuration::get('BANK_KAIOWA_USER'),
            'a_password' => Configuration::get('BANK_KAIOWA_PASSWORD'),
            'a_cedula_deudor' => '123456789'                        
        );
        $opts['http']['method'] = 'post';
        $opts['http']['content'] = json_encode($request);
        $response = $this->file_get_contents_curl_status(Configuration::get('BANK_KAIOWA_URL_STATUS'),2,$opts);     
        return $response;        
    }


    private function _getWompiConfig($id_obligacion = null, $obligacion = null) {
        if(!empty($id_obligacion)) {
            $reference = base64_encode($id_obligacion.'|'.$this->context->customer->id.'|'.time());
            $amountInCents = $obligacion->valor_cuota.'00';
            $redirectURL = $this->context->link->getModuleLink('ps_kaiowa', 'responses',array('type' => 'paymentQuotes'));
        } else {
            $reference = base64_encode($this->context->cart->id.'|'.$this->context->customer->id.'|'.time());
            $amountInCents = $this->context->cart->getOrderTotal(true, Cart::BOTH).'00';
            $redirectURL = $this->context->link->getModuleLink('ps_kaiowa', 'responses',array('type' => 'payment'));
        }

        if(Configuration::get('BANK_KAIOWA_HOUR_THANK_YOU')) {
            $redirectURL = Tools::getHttpHost(true) . __PS_BASE_URI__ . Configuration::get('BANK_KAIOWA_HOUR_THANK_YOU');
        }
        return array(
            'currency' => $this->context->currency->iso_code,
            'amountInCents' => $amountInCents,
            'amountOriginal' => $obligacion->valor_cuota,
            'reference' => $reference,
            'publicKey' => Configuration::get('BANK_KAIOWA_WOMPI_PUB_KEY'),
            'redirectUrl' => $redirectURL
        );
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

    public function hookActionWSKaiowa($params) {
        if(isset($params['type'])) {
            switch ($params['type']) {
                case self::BALANCE:
                    $request = array(
                        'a_schemacia' => Configuration::get('BANK_KAIOWA_URL_SCHEMACIA'),
                        'a_login' => Configuration::get('BANK_KAIOWA_USER'),
                        'a_password' => Configuration::get('BANK_KAIOWA_PASSWORD'),
                        'a_id_marca' => Configuration::get('BANK_KAIOWA_URL_MARCA'),
                        'a_documento' => $params['document'] ? $params['document'] : $this->context->customer->document                        
                    );
                    $opts['http']['method'] = 'post';
                    $opts['http']['content'] = json_encode($request);
                    $response = $this->file_get_contents_curl(Configuration::get('BANK_KAIOWA_URL_SALDO'),20,$opts);
                    if($response == false) {
                        return null;
                    }
                    $response = json_decode($response);
                    return $response;
                break;
                case self::CONCILIATION:
                    $request = array(
                        'a_schemacia' => Configuration::get('BANK_KAIOWA_URL_SCHEMACIA'),
                        'a_login' => Configuration::get('BANK_KAIOWA_USER'),
                        'a_password' => Configuration::get('BANK_KAIOWA_PASSWORD'),
                        'a_id_marca' => Configuration::get('BANK_KAIOWA_URL_MARCA'),
                        'a_fechaini' => !empty($params['a_fechaini']) ? $params['a_fechaini'] : date('Y-m-d', strtotime('-1 month')),
                        'a_fechafin' => !empty($params['a_fechafin']) ? $params['a_fechafin'] : date('Y-m-d')
                    );
                    $opts['http']['method'] = 'post';
                    $opts['http']['content'] = json_encode($request);
                    $response = $this->file_get_contents_curl(Configuration::get('BANK_KAIOWA_URL_CONCILIATION'),20,$opts);
                    if($response == false) {
                        return null;
                    }
                    $response = json_decode($response,true);
                    return $response;
                break;                
                case self::STATUS:
                    
                    $request = array(
                        'a_schemacia' => Configuration::get('BANK_KAIOWA_URL_SCHEMACIA'),
                        'a_login' => Configuration::get('BANK_KAIOWA_USER'),
                        'a_password' => Configuration::get('BANK_KAIOWA_PASSWORD'),
                        'a_cedula_deudor' => $this->context->customer->document                        
                    );
                    $opts['http']['method'] = 'post';
                    $opts['http']['content'] = json_encode($request);
                    $response = $this->file_get_contents_curl(Configuration::get('BANK_KAIOWA_URL_STATUS'),20,$opts);
                    if($response == false) {
                        return null;
                    }
                    $response = $response;
                    return $response;
                break;

            } 
        }
    }
    
    private function file_get_contents_curl_status(
        $url,
        $curl_timeout,
        $opts
    ) {
        $content = false;

        if (function_exists('curl_init')) {
            Tools::refreshCACertFile();
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $curl_timeout);
            curl_setopt($curl, CURLOPT_TIMEOUT, $curl_timeout);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_MAXREDIRS, 5);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

            if ($opts != null) {
                if (isset($opts['http']['method']) && Tools::strtolower($opts['http']['method']) == 'post') {
                    curl_setopt($curl, CURLOPT_POST, true);
                    if (isset($opts['http']['content'])) {
                        curl_setopt($curl, CURLOPT_POSTFIELDS, $opts['http']['content']);
                    }
                }
            }

            $content = curl_exec($curl);
            $content = trim( strip_tags( $content ) );
            $http_code = curl_getinfo( $curl, CURLINFO_HTTP_CODE );
            if ( ( $http_code == "200" ) || ( $http_code == "302" ) ) {
                return true;
            } else {
                // return $http_code;, possible too
                return false;
            }    
            curl_close($curl);
        }
    }
    
    private function file_get_contents_curl(
        $url,
        $curl_timeout,
        $opts
    ) {
        $content = false;

        if (function_exists('curl_init')) {
            Tools::refreshCACertFile();
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($curl, CURLOPT_TIMEOUT, $curl_timeout);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_MAXREDIRS, 5);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

            if ($opts != null) {
                if (isset($opts['http']['method']) && Tools::strtolower($opts['http']['method']) == 'post') {
                    curl_setopt($curl, CURLOPT_POST, true);
                    if (isset($opts['http']['content'])) {
                        curl_setopt($curl, CURLOPT_POSTFIELDS, $opts['http']['content']);
                    }
                }
            }

            $content = curl_exec($curl);
            if ($content === FALSE) {
                return false;
            }            
            curl_close($curl);
        }

        return $content;
    }

    public function hookActionSubmitAccountBefore($params) {
        if(isset($params['customer'])) {
            $customer = $params['customer'];
            $customer->active = 0;
            $customer->update();
            if (empty($params['redirect'])) {
                $redirect = $this->context->link->getModuleLink('ps_kaiowa', 'balance');
            } else {
                $redirect = $params['redirect'];
            }
            $request = array(
                "cid" =>  Configuration::get('BANK_KAIOWA_CID'),
                "url_comercio" => $redirect,
                "api_response_ecommerce" => $this->context->link->getModuleLink('ps_kaiowa', 'responses',array('type' => 'user')),
                "tipo_documento" =>  Tools::getValue('document_type') ? Tools::getValue('document_type') : $customer->document_type,
                "nro_documento" =>  Tools::getValue('document') ? Tools::getValue('document') : $customer->document,
                "primer_nombre" =>  Tools::getValue('firstname') ? Tools::getValue('firstname') : $customer->firstname,
                "segundo_nombre" =>  Tools::getValue('firstname2') ? Tools::getValue('firstname2') : $customer->firstname2,
                "primer_apellido" =>  Tools::getValue('lastname') ? Tools::getValue('lastname') : $customer->lastname,
                "segundo_apellido" =>  Tools::getValue('lastname2') ? Tools::getValue('lastname2') : $customer->lastname2,
                "f_nacimiento" =>  Tools::getValue('birthday') ? Tools::getValue('birthday') : $customer->birthday,
                "f_expedicion_documento" =>  Tools::getValue('f_exped') ? Tools::getValue('f_exped') : $customer->f_exped,
                "email" =>  Tools::getValue('email') ? Tools::getValue('email') : $customer->email,
                "genero" =>  Tools::getValue('id_gender') ? (Tools::getValue('id_gender') == 1 ? 'M' : 'F') : ($customer->f_exped == 1 ? 'M' : 'F'),
                "c_sucursal" =>  "1",
                "login" => Configuration::get('BANK_KAIOWA_USER'),
                "pass" =>  Configuration::get('BANK_KAIOWA_PASSWORD'),
                "celular" =>  Tools::getValue('mobile'),
                "id_transaccion" => $customer->id,
            );
            $id_cart = $this->context->cart->id;
            $urlRequest = str_replace(
                'JSON',
                $this->base64url_encode(utf8_encode(Tools::jsonEncode($request))),
                Configuration::get('BANK_KAIOWA_URL_CUPO')
            );
            mail('sebasca5gz@gmail.com','REQUEST USER KAIOWA','--- '.$urlRequest.' -- '.print_r($request,true));

            if (empty($params['from-store'])) {
                setcookie('USER_CREATE_TRANSACTION',$customer->id.'|'.$this->context->cart->id, time()+3600);
            }
            Db::getInstance()->execute('INSERT INTO '._DB_PREFIX_.'kaiowa_validations (`id_customer`,`id_cart`,`email`) VALUES ('.$customer->id.', '.$id_cart.',"'.Tools::getValue('email').'")');
            return $urlRequest;
        } else {
            return true;
        }
    }

    private function base64url_encode($data) {
      $b64 = base64_encode($data);
      if ($b64 === false) {
        return false;
      }
      $url = strtr($b64, '+/', '-_');
      return rtrim($url, '=');
    }

    public function hookDisplayCustomerAccount($params) {

        $this->smarty->assign(array(
            'url' => $this->context->link->getModuleLink($this->name, 'quotes', array(), true)
        ));
        return $this->display(__FILE__, 'views/templates/hook/hookDisplayCustomerAccount.tpl');
    }

    public function hookDisplayProductPriceBlock($param)
    {
        $page = $this->context->controller->php_self;
        if(isset($param['product'])) {
            $product = $param['product'];
            $product = new Product($product->id);
            $category_id = $product->id_category_default;
            $category = new Category($category_id);
            $cuotas = Configuration::get('BANK_KAIOWA_CUOTAS');
            $price = $product->price_amount ? $product->price_amount : $product->price; 
            if (in_array($param['type'], array('before_price', 'unit_price', 'weight', 'weight_cart'))) {
                $this->smarty->assign(array(
                    'category_name' => Tools::displayPrice(current(str_replace('.','',$category->name))),
                    'type' => $param['type'],
                    'page' => $page,
                    'total_price' => Tools::displayPrice($cuotas * $price),
                    'cuotas' => $cuotas
                ));
                return $this->display(__FILE__, 'views/templates/hook/hookDisplayProductPriceBlock.tpl');
            }

            if($param['type'] == 'after_price') {
                $saldo = $this->hookActionWSKaiowa(array('type' => self::BALANCE));
                $cuota = ($saldo->cupo/($cuotas-1));
                if ($price > $cuota) {
                    $this->smarty->assign(array(
                        'cuota' => $cuota,
                        'url_contact' => $this->context->link->getPageLink('contact', true),
                        'logged' => $this->context->cookie->isLogged(),
                        'url_login' => $this->context->link->getPageLink('authentication')
                    ));
                    return $this->display(__FILE__, 'views/templates/hook/hookDisplayProductPriceBlockModal.tpl');
                }  
            }
        
        }

    }

    public function hookActionCartSave($params) {
        ## remove cart if users is not loggin
        $cart = $params['cart'];
        if(isset($cart)) {
            if($cart->id_customer == 0) {
                $cart->delete();
            }
        }
    }

    private function createStateOrder($name, $color, $template) {
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
            $order_state->template = $template;
            $order_state->name = array();
            $languages = Language::getLanguages(false);
            foreach ($languages as $language)
                $order_state->name[ $language['id_lang'] ] = $name;
 
            // Update object
            $order_state->add();
            Configuration::updateValue(strtoupper($this->name.'_state'), $order_state->id);
        }
 
        return true;        
    }    

    public function uninstall()
    {
        foreach ($this->config_form as $key => $field) {
            Configuration::deleteByName($key);
        }

        if (!parent::uninstall()) {
            return false;
        }
        return true;
    }

    protected function _postValidation()
    {
        if (Tools::isSubmit('btnSubmit')) {
            foreach ($this->config_form as $key => $field) {
                if (!Tools::getValue($key)) {
                   $this->_postErrors[] = $this->trans('Ingrese el campo <b>'. $field['label'].'</b>', array(), 'Modules.Kaiowa.Admin'); 
                }
            }
        }
    }

    protected function _postProcess()
    {
        if (Tools::isSubmit('btnSubmit')) {
            foreach ($this->config_form as $key => $field) {
                Configuration::updateValue($key, Tools::getValue($key));
            }
        }
        $this->_html .= $this->displayConfirmation($this->trans('Settings updated', array(), 'Admin.Global'));
    }

    public function getContent()
    {
        //$this->installTabs('AdminKaiowaController','Créditos', 0);
        if (Tools::isSubmit('btnSubmit')) {
            $this->_postValidation();
            if (!count($this->_postErrors)) {
                $this->_postProcess();
            } else {
                foreach ($this->_postErrors as $err) {
                    $this->_html .= $this->displayError($err);
                }
            }
        } else {
            $this->_html .= '<br />';
        }
        $this->_html .= $this->renderForm();

        return $this->_html;
    }

    public function hookHeader($params)
    {
        $this->context->controller->addCSS(($this->_path).'ps_kaiowa.css', 'all');
        $this->context->controller->addJS($this->_path.'ps_kaiowa.js');
        $this->context->controller->registerJavascript('remote-wompi', 'https://checkout.wompi.co/widget.js', ['server' => 'remote', 'position' => 'bottom', 'priority' => 20]);
        $this->_checkUserhasCupo();
    }

    private function _checkUserhasCupo() {
        if(isset($_COOKIE['USER_CREATE_TRANSACTION'])) {
            $transactionIds = explode('|',$_COOKIE['USER_CREATE_TRANSACTION']);
            $customer_id = $transactionIds[0];
            $cart_id = $transactionIds[1];
            $activate = Db::getInstance()->getValue('SELECT id_customer FROM '._DB_PREFIX_.'kaiowa_validations 
                WHERE id_customer = "'.$customer_id.'"
                    AND id_cart="'.$cart_id.'"
                    AND cupo = 0');
            if($activate) {
                $customer = new Customer($customer_id);
                require_once('classes/kaiowaUsers.php');
                $kaiowaUsers = new kaiowaUsersCore;
                $kaiowaUsers->firstname = $customer->firstname;
                $kaiowaUsers->firstname2 = $customer->firstname2;
                $kaiowaUsers->lastname = $customer->lastname;
                $kaiowaUsers->lastname2 = $customer->lastname2;
                $kaiowaUsers->email = $customer->email;
                $kaiowaUsers->mobile = $customer->mobile;
                $kaiowaUsers->add();
                Mail::Send(
                    (int) Context::getContext()->language->id,
                    'customer_deactivate',
                    Context::getContext()->getTranslator()->trans(
                        'Tu cuenta no ha sido aprobada',
                        array(),
                        'Emails.Subject',
                        Context::getContext()->language->locale
                    ),
                    array(
                        '{firstname}' => $customer->firstname,
                        '{lastname}' => $customer->lastname,
                        '{email}' => $customer->email,
                    ),
                    $customer->email,
                    $customer->firstname . ' ' . $customer->lastname,
                    null,
                    null,
                    null,
                    null,
                    _PS_MAIL_DIR_,
                    false,
                    (int) Context::getContext()->shop->id
                );
                setcookie('USER_CREATE_TRANSACTION', time() - 3600);
                unset($_COOKIE['USER_CREATE_TRANSACTION']);
                $customer->delete();
                $this->context->controller->addJS($this->_path.'ps_kaiowa_modal.js');
            }
        }
        if(isset($this->context->customer->id)) {
            // verifico si ha tenido cupo aprobado.
        }   
    }

    public function hookPaymentOptions($params)
    {
        if (!$this->active) {
            return;
        }

        if (!$this->checkCurrency($params['cart'])) {
            return;
        }


        $newOption = new PaymentOption();
        $newOption->setModuleName($this->name)
                ->setCallToActionText($this->trans('Paga la primera cuota desde Wompi', array(), 'Modules.Kaiowa.Shop'))
                ->setAction($this->context->link->getModuleLink($this->name, 'validation', array(), true))
                ->setAdditionalInformation($this->fetch('module:ps_kaiowa/views/templates/hook/ps_kaiowa_intro.tpl'));
        $payment_options = [
            $newOption,
        ];

        return $payment_options;
    }

    public function hookPaymentReturn($params)
    {
        if (!$this->active) {
            return;
        }

        $state = $params['order']->getCurrentState();
        if (
            in_array(
                $state,
                array(
                    Configuration::get('PS_OS_BANKWIRE'),
                    Configuration::get('PS_OS_OUTOFSTOCK'),
                    Configuration::get('PS_OS_OUTOFSTOCK_UNPAID'),
                )
        )) {
            $bankwireOwner = $this->owner;
            if (!$bankwireOwner) {
                $bankwireOwner = '___________';
            }

            $bankwireDetails = Tools::nl2br($this->details);
            if (!$bankwireDetails) {
                $bankwireDetails = '___________';
            }

            $bankwireAddress = Tools::nl2br($this->address);
            if (!$bankwireAddress) {
                $bankwireAddress = '___________';
            }

            $this->smarty->assign(array(
                'shop_name' => $this->context->shop->name,
                'total' => Tools::displayPrice(
                    $params['order']->getOrdersTotalPaid(),
                    new Currency($params['order']->id_currency),
                    false
                ),
                'bankwireDetails' => $bankwireDetails,
                'bankwireAddress' => $bankwireAddress,
                'bankwireOwner' => $bankwireOwner,
                'status' => 'ok',
                'reference' => $params['order']->reference,
                'contact_url' => $this->context->link->getPageLink('contact', true)
            ));
        } else {
            $this->smarty->assign(
                array(
                    'status' => 'failed',
                    'contact_url' => $this->context->link->getPageLink('contact', true),
                )
            );
        }

        return $this->fetch('module:ps_kaiowa/views/templates/hook/payment_return.tpl');
    }

    public function checkCurrency($cart)
    {
        $currency_order = new Currency($cart->id_currency);
        $currencies_module = $this->getCurrency($cart->id_currency);

        if (is_array($currencies_module)) {
            foreach ($currencies_module as $currency_module) {
                if ($currency_order->id == $currency_module['id_currency']) {
                    return true;
                }
            }
        }
        return false;
    }

    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->trans('Account details', array(), 'Modules.Kaiowa.Admin'),
                    'icon' => 'icon-envelope'
                ),
                'input' => array(
                ),
                'submit' => array(
                    'title' => $this->trans('Save', array(), 'Admin.Actions'),
                )
            ),
        );

        foreach ($this->config_form as $key => $field) {
            $fields_form['form']['input'][] = array(
                'type' => 'text',
                'label' => $this->trans($field['label'], array(), 'Modules.Kaiowa.Admin'),
                'name' => $key,
                'required' => true
            );
        }

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? : 0;
        $this->fields_form = array();
        $helper->id = (int)Tools::getValue('id_carrier');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'btnSubmit';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='
            .$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
        $return = array();
        foreach ($this->config_form as $key => $field) {
            $return[$key] = Tools::getValue($key, Configuration::get($key));
        }

        return $return;
    }

    public function getTemplateVarInfos()
    {
        $cart = $this->context->cart;
        $total = sprintf(
            $this->trans('%1$s (tax incl.)', array(), 'Modules.Kaiowa.Shop'),
            Tools::displayPrice($cart->getOrderTotal(true, Cart::BOTH))
        );

         $bankwireOwner = $this->owner;
        if (!$bankwireOwner) {
            $bankwireOwner = '___________';
        }

        $bankwireDetails = Tools::nl2br($this->details);
        if (!$bankwireDetails) {
            $bankwireDetails = '___________';
        }

        $bankwireAddress = Tools::nl2br($this->address);
        if (!$bankwireAddress) {
            $bankwireAddress = '___________';
        }

        $bankwireReservationDays = Configuration::get('BANK_KAIOWA_RESERVATION_DAYS');
        if (false === $bankwireReservationDays) {
            $bankwireReservationDays = 7;
        }

        $bankwireCustomText = Tools::nl2br(Configuration::get('BANK_KAIOWA_CUSTOM_TEXT', $this->context->language->id));
        if (false === $bankwireCustomText) {
            $bankwireCustomText = '';
        }

        return array(
            'total' => $total,
            'bankwireDetails' => $bankwireDetails,
            'bankwireAddress' => $bankwireAddress,
            'bankwireOwner' => $bankwireOwner,
            'bankwireReservationDays' => (int)$bankwireReservationDays,
            'bankwireCustomText' => $bankwireCustomText,
        );
    }
}
