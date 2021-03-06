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
class ps_kaiowaResponsesModuleFrontController extends ModuleFrontController
{
	
	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{
		switch(Tools::getValue('type')) {
			case 'user':
				$this->_log('user');
				$this->_activateUser();
			break;
			case 'payment':
				$this->_log('payment');
				$this->_processPayment();
			break;
			case 'paymentCuote':
				$this->_log('paymentCuote');
				$this->_processPaymentCuote();
			break;			
			case 'cart':
				$this->_log('cart');
				$this->_validateCart();
			break;
			case 'cronjob':
				$this->_cronjob();
			break;
			case 'saveimei':
				$this->_saveimei();
			break;
		}
		die('end');
	}

	private function _saveimei() {
		$order_id = Tools::getValue('order');
		$imei = Tools::getValue('imei');
		if($order_id && $imei) {
			$order = new Order($order_id);
			$order->imei = $imei;
			$order->update();
		}
	}

	private function _cronjob() {
		require_once(dirname(__FILE__).'/../../ps_kaiowa.php');
		$kaiowa = new Ps_Kaiowa(); 
		$date = time() - 1800; 
		$sql = '
      SELECT `id_customer`
      FROM `' . _DB_PREFIX_ . 'customer`
      WHERE 1 ' . Shop::addSqlRestriction(Shop::SHARE_CUSTOMER) .
      ' AND `active` = 0 
      AND  date_add < "'.date('Y-m-d H:i:s', $date).'"
      ORDER BY `id_customer` ASC';
		$customers = Db::getInstance()->executeS($sql);
		foreach($customers as &$customer) {
			$kaiowa->disableCustomer($customer['id_customer']);
		}
	}

	private function _log($type) {
		$inputJSON = file_get_contents('php://input');
		$response = json_decode($inputJSON, true);
		$log = "\n------------------------------------------------------------------------------\n";
		$log .= date('H:m:d');
		$log .= "\n------------------------------------------------------------------------------\n";
		$log .= "JSON WS RESPONSE\n";
		$log .= $inputJSON;
		$log .= "\nREQUEST\n";
		$log .= print_r($_REQUEST,true);
		$log .= "\nPARSE RESPONSE\n";
		$log .= print_r($response,true);
		file_put_contents(_PS_ROOT_DIR_.'/logs/'.date("Y-m-d").'-'.$type.'.log', $log, FILE_APPEND);
	}

	private function _validateCart() {
		$inputJSON = file_get_contents('php://input');
		$response = json_decode($inputJSON, true);
		if ($response['id_transaccion']) {
			$cart_id = $response['id_transaccion'];
			$cart = new cart($cart_id);
			if($response['err_code'] != 0) {
				$cart->delete();
			} else {
				if(strstr($response['msg'],'Crédito previamente generado')) {
					$cart_id = $response['id_transaccion'];
					$cart = new cart($cart_id);
					$cart->delete();				
				} else {
					$cart->id_obligacion = $response['id_obligacion'];
					$cart->update();
				}
			}
		}
	}

	private function _processPaymentCuote() {
		print_r($_REQUEST);
		$transaction = $_REQUEST['form']['transaction'];
		$reference = explode('|',base64_decode($transaction['reference']));
		$cart_id = $reference[0];
		$customer_id = $reference[1];
		$date = $reference[2];
		if($transaction['status'] == 'APPROVED') {
			require_once dirname(__FILE__). '/../../../ps_store/classes/cuotas.php';
			$date = date('Y-m-d H:i:s');
			$id = Order::getIdByCartId($cart_id);
			$Order = new Order($id);
			$cuotas = new cuotasCore();
			$cuotas->value = $Order->getTotalProductsWithoutTaxes();
			$cuotas->quotas = 1;
			$cuotas->id_customer = $Order->id_customer;
			$cuotas->payment_method = 'Pago Online';
			$cuotas->id_order = $id;
			$cuotas->date = $date;
			$cuotas->add();
		}
	}

	private function _processPayment() {
		$transaction = $_REQUEST['transaction'];
		$reference = explode('|',base64_decode($transaction['reference']));
		$cart_id = $reference[0];
		$customer_id = $reference[1];
		$date = $reference[2];
		if(!empty($cart_id) && !empty($customer_id) && !empty($date)) {
			$customer = new Customer($customer_id);
			$cart = new cart($cart_id);
			$currency = Context::getContext()->currency;
			$mailVars = array();
			$total = (float)$cart->getOrderTotal(true, Cart::BOTH);
			$state = $transaction['status'] == 'APPROVED' ? 21 : ($transaction['status'] == 'PENDING' ? 10 : 8);
			$this->module->validateOrder(
				$cart->id,
				$state,
				$total,
				'Wompi - '.$transaction['paymentMethod']['type'],
				NULL,
				$mailVars,
				(int)$currency->id,
				false,
				$customer->secure_key
			);
			if ($state == 21) {
				require_once dirname(__FILE__). '/../../../ps_store/classes/cuotas.php';
				$date = date('Y-m-d H:i:s');
				$id = Order::getIdByCartId($cart_id);
				$Order = new Order($id);
				$cuotas = new cuotasCore();
				$cuotas->value = $Order->getTotalProductsWithoutTaxes();
				$cuotas->quotas = 1;
				$cuotas->id_customer = $Order->id_customer;
				$cuotas->payment_method = 'Pago en tienda';
				$cuotas->id_order = $id;
				$cuotas->date = $date;
				$cuotas->noSetStatusOrder = true;
				$cuotas->add();
				$cuotas->updateOrderCurrentState($state, $id);
			}
			die('end payment');
		}
	}

	private function _activateUser() {
		$inputJSON = file_get_contents('php://input');
		$response = json_decode($inputJSON, true);
		if(!empty($response['id_transaccion'])) {
			$customer = new Customer((int) $response['id_transaccion']);
			if (in_array($response['err_code'], array('0','4'))) {
				$customer->active = true;
				$customer->logged = 1;
				$customer->update();
				Db::getInstance()->execute('
					UPDATE `'._DB_PREFIX_.'kaiowa_validations` SET `cupo` = '.(int)$response['cupo_asignado']
					.' WHERE `id_customer` = '.(int)$response['id_transaccion']
				);
			} else {
				$customer->active = false;
				$customer->logged = 0;
				$customer->update();
			}
		} 
	}

}
