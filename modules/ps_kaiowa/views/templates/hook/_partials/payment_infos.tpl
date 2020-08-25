{*
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
*}

<p>{l s='Debes indicar el número de tu cédula y el número de convenio 86553 a nombre de CELUFIAMOS, esta forma de pago solo te permite hacer el abono exacto al valor de tu cuota adeudada.' d='Modules.Wirepayment.Shop'}</p>
<dl>
    <dt>{l s='Amount' d='Modules.Wirepayment.Shop'}</dt>
    <dd id="total-consig">{$total}</dd>
    <dt>{l s='Name of account owner' d='Modules.Wirepayment.Shop'}</dt>
    <dd>{$bankwireOwner}</dd>
    <dt>{l s='Convenio' d='Modules.Wirepayment.Shop'}</dt>
    <dd>{$bankwireDetails nofilter}</dd>
    <dt>{l s='Bank name' d='Modules.Wirepayment.Shop'}</dt>
    <dd>{$bankwireAddress nofilter}</dd>
</dl>
