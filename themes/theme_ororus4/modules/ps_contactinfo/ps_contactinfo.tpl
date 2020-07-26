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

<div class="block-contact-info col-xs-12 col-md-6 col-lg-3 links footer_block">
	<h3 class="hidden-sm-down">{l s='Store information' d='Shop.Theme.Global'}</h3>
	<div class="title clearfix hidden-md-up" data-target="#block_contact_infos" data-toggle="collapse">
	<h3>{l s='Store information' d='Shop.Theme.Global'}</h3>
	<span class="float-xs-right"> <span class="navbar-toggler collapse-icons"> <i class="material-icons add">keyboard_arrow_down</i> <i class="material-icons remove">keyboard_arrow_up</i> </span> </span></div>
	<ul id="block_contact_infos" class="footer_list collapse">
	  <li>
       <i class="fa fa-map-marker"></i>{$contact_infos.address.formatted nofilter}
	   </li>
      {if $contact_infos.phone}
        <li>
        {* [1][/1] is for a HTML tag. *}
        <i class="fa fa-phone"></i>{l s='Call us: [1]%phone%[/1]'
          sprintf=[
          '[1]' => '<span>',
          '[/1]' => '</span>',
          '%phone%' => $contact_infos.phone
          ]
          d='Shop.Theme.Global'
        }
		</li>
      {/if}
	  
      {if $contact_infos.fax}
        <li>
        {* [1][/1] is for a HTML tag. *}
        <i class="fa fa-fax"></i>{l
          s='Fax: [1]%fax%[/1]'
          sprintf=[
            '[1]' => '<span>',
            '[/1]' => '</span>',
            '%fax%' => $contact_infos.fax
          ]
          d='Shop.Theme.Global'
        }
		</li>
      {/if}
      {if $contact_infos.email}
        <li>
        {* [1][/1] is for a HTML tag. *}
        <i class="fa fa-envelope-o"></i>{l
          s='Email us: [1]%email%[/1]'
          sprintf=[
            '[1]' => '<a href="mailto:'|cat:$contact_infos.email|cat:'" class="dropdown">',
            '[/1]' => '</a>',
            '%email%' => $contact_infos.email
          ]
          d='Shop.Theme.Global'
        }
		</li>
      {/if}
	  <li>
		{hook h='displayBlockFooter1'}
	  </li>
	</ul>
</div>
