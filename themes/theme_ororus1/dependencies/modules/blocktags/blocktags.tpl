{*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- Block tags module -->

<div class="tags_block links footer_block">
	  <h3 class=" tab hidden-sm-down">{l s='Hot Tags' mod='blocktags'}</h3>
      <div class="title clearfix hidden-md-up" data-target="#tags_block" data-toggle="collapse">
        <h3>{l s='Popular Tags' mod='blocktags'}</h3>
        <span class="float-xs-right">
          <span class="navbar-toggler collapse-icons">
            <i class="material-icons add">keyboard_arrow_down</i>
            <i class="material-icons remove">keyboard_arrow_up</i>
          </span>
        </span>
      </div>
      <div id="tags_block" class="footer_list collapse">
		{if isset($tags) && $tags}
			{foreach from=$tags item=tag name=myLoop}
				<a href="{$link->getPageLink('search', true, NULL, "tag={$tag.name|urlencode}")|escape:'html'}" title="{l s='More about' mod='blocktags'} {$tag.name|escape:html:'UTF-8'}" class="{$tag.class} {if $smarty.foreach.myLoop.last}last_item{elseif $smarty.foreach.myLoop.first}first_item{else}item{/if}">{$tag.name|escape:html:'UTF-8'}</a>
			{/foreach}
		{else}
			{l s='No tags have been specified yet.' mod='blocktags'}
		{/if}
	</div>
</div>

<!-- /Block tags module -->
