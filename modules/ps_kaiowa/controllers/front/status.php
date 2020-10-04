<?php
class ps_kaiowaStatusModuleFrontController extends ModuleFrontController
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
		$this->context->smarty->assign(array(
			'status' => $status->datos->cuposaldo->creditos_vigentes,
			'has_errors' => (isset($balance->err_code) && $balance->err_code!=0),
			'json_credits' => $ws_response['ps_kaiowa']
		));
		$this->setTemplate('module:'.$this->module->name.'/views/templates/front/status.tpl');
		parent::initContent();
	}

	public function getBreadcrumbLinks()
	{
	    $breadcrumb = parent::getBreadcrumbLinks();

	    $breadcrumb['links'][] = [
	        'title' => $this->getTranslator()->trans('Mi Cuenta', [], 'Breadcrumb'),
	        'url' => $this->context->link->getPageLink('my-account')
	    ];
	    $breadcrumb['links'][] = [
	        'title' => $this->getTranslator()->trans('Mis Cuotas', [], 'Breadcrumb'),
	        'url' => $this->context->link->getModuleLink('ps_kaiowa', 'quotes')
	    ];
	    $breadcrumb['links'][] = [
	        'title' => $this->getTranslator()->trans('Estado de cuenta', [], 'Breadcrumb')
	    ];	    
	    return $breadcrumb;
	}
}