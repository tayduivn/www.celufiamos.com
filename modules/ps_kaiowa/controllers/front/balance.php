<?php
class ps_kaiowaBalanceModuleFrontController extends ModuleFrontController
{
	public $auth = false;
    public $authRedirection = 'my-account';
    public $ssl = true;

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{
		
		$ws_response = Hook::exec('actionWSKaiowa', array('type' => 'balance'), null, true);
		$balance = $ws_response['ps_kaiowa'];
		$cuota = $balance->cuota;
		$cats = Category::getAllCategoriesName();
		foreach ($cats as $category) {
			if(is_numeric($category['name'])) {
				$price = (int)str_replace('.','',$category['name']);
				if($price <= $cuota) {
					$category['link'] = Context::getContext()->link->getCategoryLink($category['id_category']);
					$allowCategory[] = $category;	
				}
			}
		}
		$this->context->smarty->assign(array(
			'balance' => $balance,
			'has_errors' => (isset($balance->err_code) && $balance->err_code!=0),
			'cuota' => Tools::displayPrice($cuota),
			'unparsecuota' => $cuota,
			'categories' => $allowCategory 
		));
		$this->setTemplate('module:'.$this->module->name.'/views/templates/front/balance.tpl');
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