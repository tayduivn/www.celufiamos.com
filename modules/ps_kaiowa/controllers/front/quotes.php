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
class ps_kaiowaQuotesModuleFrontController extends ModuleFrontController
{
	public $auth = true;
    public $authRedirection = 'my-account';
    public $ssl = true;

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{
		parent::initContent();
		$this->context->smarty->assign(array(
			'url_saldo' => $this->context->link->getModuleLink('ps_kaiowa', 'balance'),
			'url_status' => $this->context->link->getModuleLink('ps_kaiowa', 'status'),
			'url_payment' => $this->context->link->getModuleLink('ps_kaiowa', 'paymentlist'),
			'url_contact' => $this->context->link->getPageLink('contact')
		));
		$this->setTemplate('module:'.$this->module->name.'/views/templates/front/quotes.tpl');
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
    return $breadcrumb;
	}	
}
