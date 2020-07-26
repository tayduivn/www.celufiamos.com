<?php
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