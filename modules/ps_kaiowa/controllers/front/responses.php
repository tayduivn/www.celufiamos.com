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
			case 'cart':
				$this->_log('cart');
				$this->_validateCart();
			break;
		}
		die('end');
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
		if ($response['id_transaccion'] && $response['err_code'] != 0) {
			$cart_id = $response['id_transaccion'];
			if(!empty($cart_id)) {
				$cart = new cart($cart_id);
				$customer = new Customer($cart->id_customer);
				$currency = Context::getContext()->currency;
				$mailVars = array();
				$total = (float)$cart->getOrderTotal(true, Cart::BOTH);
				$state = 16;
				$this->module->validateOrder(
					$cart->id,
					$state,
					$total,
					'Credito no aprobado',
					NULL,
					$mailVars,
					(int)$currency->id,
					false,
					$customer->secure_key
				);
			}
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
			$state = $transaction['status'] == 'APPROVED' ? 2 : 8;
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
			die('');
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
