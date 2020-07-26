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

/**
 * @since 1.5.0
 */
class Ps_KaiowaValidationModuleFrontController extends ModuleFrontController
{
	/**
	 * @see FrontController::postProcess()
	 */
	public function postProcess()
	{
		$cart = $this->context->cart;
		if ($cart->id_customer == 0 || $cart->id_address_delivery == 0 || $cart->id_address_invoice == 0 || !$this->module->active)
			Tools::redirect('index.php?controller=order&step=1');

		// Check that this payment option is still available in case the customer changed his address just before the end of the checkout process
		$authorized = false;
		foreach (Module::getPaymentModules() as $module)
			if ($module['name'] == 'ps_kaiowa')
			{
				$authorized = true;
				break;
			}
		if (!$authorized)
			die($this->module->getTranslator()->trans('This payment method is not available.', array(), 'Modules.Kaiowa.Shop'));

		$customer = new Customer($cart->id_customer);
		if (!Validate::isLoadedObject($customer))
			Tools::redirect('index.php?controller=order&step=1');

		$currency = $this->context->currency;
		$total = (float)$cart->getOrderTotal(true, Cart::BOTH);
		$mailVars = array(
			'{bankwire_owner}' => Configuration::get('BANK_WIRE_OWNER'),
			'{bankwire_details}' => nl2br(Configuration::get('BANK_WIRE_DETAILS')),
			'{bankwire_address}' => nl2br(Configuration::get('BANK_WIRE_ADDRESS'))
		);
		$this->module->validateOrder($cart->id, 14, $total, $this->module->displayName, NULL, $mailVars, (int)$currency->id, false, $customer->secure_key);
		$address = new Address(intval($cart->id_address_delivery));
		$request = array (
			'cid' => Configuration::get('BANK_KAIOWA_CID'),
			'url_comercio' => _PS_BASE_URL_,
			'api_response_ecommerce' => $this->module->getPathUri(),
			'tipo_documento' => '1:CC',
			'nro_documento' => $address->dni,
			'primer_nombre' => $customer->firstname,
			'segundo_nombre' => '',
			'primer_apellido' => $customer->lastname,
			'segundo_apellido' => '',
			'f_nacimiento' => $customer->birthday,
			'f_expedicion_documento' => '',
			'email' => $customer->email,
			'genero' => '',
			'c_sucursal' => Configuration::get('BANK_KAIOWA_SUCURSAL'),
			'login' => Configuration::get('BANK_KAIOWA_USER'),
			'pass' => Configuration::get('BANK_KAIOWA_PASSWORD'),
			'celular' => $address->phone_mobile,
			'id_transaccion' => $this->module->currentOrder,
			'valor_financiar' => $this->context->link->getModuleLink('ps_kaiowa', 'validation', [], true),
		);
		Tools::redirect(Configuration::get('BANK_KAIOWA_URL') . base64_encode(json_encode($request)));
	}
}
