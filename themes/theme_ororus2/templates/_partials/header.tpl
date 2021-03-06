{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{block name='header_top'}
  <div class="header-top">
    <div class="container">
       <div class="row">
		<div class="header_logo col-left col col-lg-2 col-md-12 col-xs-12">
		  <a href="{$urls.base_url}">
			<img class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
		  </a>
		</div>
		<div class="col-right col col-xs-12 col-lg-10 col-md-12 display_group">
			<div class="seach-cart col-md-12">
				<div class="row">
				{hook h='displayTop'}
				</div>
			</div>
		</div>
      </div>
    </div>
  </div>
	<div class="header-bottom">
		{if false}
		<div class="alert alert-danger text-center" style="margin-bottom: 55px;" role="alert"><h2>Estamos en etapa de pruebas, lo que se haga durante este período no tendrá validez.</h2></div>
		{/if}
		<div class="container">
			{hook h='displaymegamenu'}
		</div>
	</div>
  {hook h='displayNavFullWidth'}
{/block}
