{extends file='customer/page.tpl'}

{block name='page_title'}
  {l s='Mis Cuotas' d='Shop.Theme.Customeraccount'}
{/block}

{block name='page_content'}
<div class="page-my-account">
	<div id="content">
		<div class="row">
	    <div id="" class="links">
	      {if false}	    
	      <a class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="identity-link" href="{$url_payment}">
	        <span class="link-item">
	          <i class="material-icons">payment</i>
	          {l s='Pagos' d='Moodules.ps_kaiowa.myaccount'}
	        </span>
	      </a>
	      <a class="col-lg-4 col-md-4 col-sm-4 col-xs-12" id="identity-link" href="{$url_status}">
	        <span class="link-item">
	          <i class="material-icons">line_weight</i>
	          {l s='Estado de cuenta' d='Moodules.ps_kaiowa.myaccount'}
	        </span>
	      </a>
	      {/if}
	      <a class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="identity-link" href="{$url_saldo}">
	        <span class="link-item">
	          <i class="material-icons">money_off</i>
	          {l s='Saldo disponible' d='Moodules.ps_kaiowa.myaccount'}
	        </span>
	      </a>
			<a class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="identity-link" href="{$url_contact}">
	        <span class="link-item">
	          <i class="material-icons">question_answer</i>
	          {l s='PQRs' d='Moodules.ps_kaiowa.myaccount'}
	        </span>
	      </a>
	    </div>
	  </div>
  </div>
</div>
{/block}
