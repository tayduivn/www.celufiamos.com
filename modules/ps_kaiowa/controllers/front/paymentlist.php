<?php
require_once(dirname(__FILE__).'/../../../ps_store/classes/cuotas.php');
class ps_kaiowaPaymentlistModuleFrontController extends ModuleFrontController
{
	public $auth = true;
    public $authRedirection = 'my-account';
    public $ssl = true;

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{
		if(Tools::getValue('ajax')) {

			$form = Tools::getValue('form');
			if ($form['transaction']['status'] == 'APPROVED') {
				$cuotas = new cuotasCore();
				$reference = explode('|',base64_decode($form['transaction']['reference']));
				$id_obligacion = $reference[0];
				$id_customer = $reference[1];
				$id_order = $cuotas->getOrderIdByIdObligacion($id_obligacion);
				$cuotas->value = substr($form['transaction']['amountInCents'],0 , (strlen($form['transaction']['amountInCents']) -2));
				$cuotas->quotas = Tools::getValue('cuotas');
				$cuotas->id_customer = $id_customer;
				$cuotas->payment_method = 'Wompi - '.$form['transaction']['paymentMethodType'];
				$cuotas->id_order = $id_order;
				$cuotas->date = date('Y-m-d H:i:s'); 
				$cuotas->add();
			}
			die();
		}
		$ws_response = Hook::exec('actionWSKaiowa', array('type' => 'status'), null, true);
		$status = json_decode($ws_response['ps_kaiowa']);
		$config = Configuration::getMultiple(array('BANK_WIRE_DETAILS', 'BANK_WIRE_OWNER', 'BANK_WIRE_ADDRESS', 'BANK_WIRE_RESERVATION_DAYS'));
		$this->context->smarty->assign(array(
			'status' => $status->datos->cuposaldo->creditos_vigentes,
			'has_errors' => (isset($balance->err_code) && $balance->err_code!=0),
			'json_credits' => $ws_response['ps_kaiowa'],
      'total' => 'test',
      'bankwireDetails' => $config['BANK_WIRE_DETAILS'],
      'bankwireAddress' => $config['BANK_WIRE_ADDRESS'],
      'bankwireOwner' => $config['BANK_WIRE_OWNER'],
      'bankwireReservationDays' => (int)$config['BANK_WIRE_RESERVATION_DAYS'],
      'bankwireCustomText' => Tools::nl2br(Configuration::get('BANK_WIRE_CUSTOM_TEXT', $this->context->language->id)),
		));
		$this->setTemplate('module:'.$this->module->name.'/views/templates/front/paymentlist.tpl');
		parent::initContent();
	}

	public function getBreadcrumbLinks()
	{
	    $breadcrumb = parent::getBreadcrumbLinks();

	    $breadcrumb['links'][] = [
	        'title' => $this->getTranslator()->trans('Su Cuenta', [], 'Breadcrumb'),
	        'url' => $this->context->link->getPageLink('my-account')
	    ];
	    $breadcrumb['links'][] = [
	        'title' => $this->getTranslator()->trans('Mis Cuotas', [], 'Breadcrumb'),
	        'url' => $this->context->link->getModuleLink('ps_kaiowa', 'quotes')
	    ];
	    $breadcrumb['links'][] = [
	        'title' => $this->getTranslator()->trans('Pagos', [], 'Breadcrumb')
	    ];	    
	    return $breadcrumb;
	}
}