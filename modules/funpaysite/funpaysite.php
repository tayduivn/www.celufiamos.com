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

class funpaysite extends PaymentModule
{

    const STATE_ORDER_WAIT = 'Crédito en trámite';

    private $_html = '';
    private $_postErrors = array();

    public $checkName;
    public $address;
    public $extra_mail_vars;

    public function __construct()
    {
        $this->name = 'funpaysite';
        $this->tab = 'payments_gateways';
        $this->version = '2.0.4';
        $this->author = 'PrestaShop';
        $this->controllers = array('payment', 'validation');

        $this->currencies = true;
        $this->currencies_mode = 'checkbox';
        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('PAGO A CREDITO', array(), 'Modules.funpaysite.Admin');
        $this->description = $this->trans('Metodo de pago a traves de solicitud de credito', array(), 'Modules.funpaysite.Admin');
        $this->confirmUninstall = $this->trans('Are you sure you want to delete these details?', array(), 'Modules.funpaysite.Admin');
        $this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('paymentOptions')
            && $this->registerHook('paymentReturn')
            && $this->registerHook('actionEmailSendBefore')
            && $this->createStateOrder()
        ;
    }

    private function createStateOrder() {
        $name = self::STATE_ORDER_WAIT;
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
            $order_state->color = '#0c4da2';
            $order_state->send_email = true;
            $order_state->module_name = $this->name;
            $order_state->template = 'confirmationonsite';
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
        return parent::uninstall();
    }

    private function _postValidation()
    {
        if (Tools::isSubmit('btnSubmit')) {
            
        }
    }

    private function _postProcess()
    {
        if (Tools::isSubmit('btnSubmit')) {
            Configuration::updateValue('CHEQUE_NAME', Tools::getValue('CHEQUE_NAME'));
            Configuration::updateValue('CHEQUE_ADDRESS', Tools::getValue('CHEQUE_ADDRESS'));
        }
        $this->_html .= $this->displayConfirmation($this->trans('Actualización Exitosa', array(), 'Admin.Notifications.Success'));
    }

    private function _displayCheck()
    {
        return $this->display(__FILE__, './views/templates/hook/infos.tpl');
    }

    public function getContent()
    {
        $this->_html = '';

        if (Tools::isSubmit('btnSubmit')) {
            $this->_postValidation();
            if (!count($this->_postErrors)) {
                $this->_postProcess();
            } else {
                foreach ($this->_postErrors as $err) {
                    $this->_html .= $this->displayError($err);
                }
            }
        }

        $this->_html .= $this->_displayCheck();
        $this->_html .= $this->renderForm();

        return $this->_html;
    }

    public function hookActionEmailSendBefore($params) {
        if ($params['template'] == 'confirmationonsite') {
            $params['templatePath'] = dirname(__FILE__) . DIRECTORY_SEPARATOR .'mails' . DIRECTORY_SEPARATOR ;
        }
        return $params;
    }

    public function hookPaymentOptions($params)
    {
        if (!$this->active) {
            return;
        }
        if (!$this->checkCurrency($params['cart'])) {
            return;
        }

        $this->smarty->assign(
            $this->getTemplateVars()
        );

        $newOption = new PaymentOption();
        $newOption->setModuleName($this->name)
                ->setCallToActionText(
                    $this->trans('Pago a crédito',
                    array(),
                    'Modules.funpaysite.Admin')
                )
                ->setAction($this->context->link->getModuleLink($this->name, 'validation', array(), true))
                ->setAdditionalInformation($this->fetch('module:funpaysite/views/templates/front/payment_infos.tpl'));

        return [$newOption];
    }



    public function hookPaymentReturn($params)
    {
        if (!$this->active) {
            return;
        }

        $state = $params['order']->getCurrentState();
        if (in_array($state, array(Configuration::get('PS_OS_CHEQUE'), Configuration::get('PS_OS_OUTOFSTOCK'), Configuration::get('PS_OS_OUTOFSTOCK_UNPAID')))) {
            $this->smarty->assign(array(
                'total_to_pay' => Tools::displayPrice(
                    $params['order']->getOrdersTotalPaid(),
                    new Currency($params['order']->id_currency),
                    false
                ),
                'shop_name' => $this->context->shop->name,
                'checkName' => $this->checkName,
                'checkAddress' => Tools::nl2br($this->address),
                'status' => 'ok',
                'id_order' => $params['order']->id
            ));
            if (isset($params['order']->reference) && !empty($params['order']->reference)) {
                $this->smarty->assign('reference', $params['order']->reference);
            }
        } else {
            $this->smarty->assign('status', 'failed');
        }
        return $this->fetch('module:funpaysite/views/templates/hook/payment_return.tpl');
    }

    public function checkCurrency($cart)
    {
        $currency_order = new Currency((int)($cart->id_currency));
        $currencies_module = $this->getCurrency((int)$cart->id_currency);

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
                    'title' => $this->trans('Configuración', array(), 'Modules.funpaysite.Admin'),
                    'icon' => 'icon-envelope'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->trans('Payee (name)', array(), 'Modules.funpaysite.Admin'),
                        'name' => 'CHEQUE_NAME',
                        'required' => true
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->trans('Address', array(), 'Modules.funpaysite.Admin'),
                        'desc' => $this->trans('Address where the check should be sent to.', array(), 'Modules.funpaysite.Admin'),
                        'name' => 'CHEQUE_ADDRESS',
                        'required' => true
                    ),
                ),
                'submit' => array(
                    'title' => $this->trans('Save', array(), 'Admin.Actions'),
                )
            ),
        );

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->id = (int)Tools::getValue('id_carrier');
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'btnSubmit';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
        );

        $this->fields_form = array();

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
        return array(
            'CHEQUE_NAME' => Tools::getValue('CHEQUE_NAME', Configuration::get('CHEQUE_NAME')),
            'CHEQUE_ADDRESS' => Tools::getValue('CHEQUE_ADDRESS', Configuration::get('CHEQUE_ADDRESS')),
        );
    }

    public function getTemplateVars()
    {
        $cart = $this->context->cart;
        $total = $this->trans(
            '%amount% (tax incl.)',
            array(
                '%amount%' => Tools::displayPrice($cart->getOrderTotal(true, Cart::BOTH)),
            ),
            'Modules.funpaysite.Admin'
        );

        $checkOrder = Configuration::get('CHEQUE_NAME');
        if (!$checkOrder) {
            $checkOrder = '___________';
        }

        $checkAddress = Tools::nl2br(Configuration::get('CHEQUE_ADDRESS'));
        if (!$checkAddress) {
            $checkAddress = '___________';
        }

        return [
            'checkTotal' => $total,
            'checkOrder' => $checkOrder,
            'checkAddress' => $checkAddress,
        ];
    }
}
