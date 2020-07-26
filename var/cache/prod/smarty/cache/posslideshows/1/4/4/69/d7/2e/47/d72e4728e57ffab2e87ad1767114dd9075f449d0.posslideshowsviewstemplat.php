<?php
/* Smarty version 3.1.33, created on 2020-07-10 12:49:52
  from 'module:posslideshowsviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f08aa40eedd12_72165436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b99bba41e0a582d22b4fe8c3f409f941620b8b0e' => 
    array (
      0 => 'module:posslideshowsviewstemplat',
      1 => 1560994343,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_5f08aa40eedd12_72165436 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col col-lg-7 col-md-12 col-xs-12">
	<div class="slideshow_container">
		<div class="pos-slideshow">
			<div class="flexslider ma-nivoslider">
				<div class="pos-loading"></div>
				<div id="pos-slideshow-home" class="slides">
					
																<a href="/iniciar-sesion?create_account=1" title="" ><img style="display:none" src="https://www.celufiamos.com/modules/posslideshows/images/0666d9c7817981cb7b5597a150752cca5d620a97_Celufiamos_registrate.png"  data-thumb="https://www.celufiamos.com/modules/posslideshows/images/0666d9c7817981cb7b5597a150752cca5d620a97_Celufiamos_registrate.png"  alt="" title="#htmlcaption11"  /> </a>
				   						<a href="/iniciar-sesion?create_account=1" title="" ><img style="display:none" src="https://www.celufiamos.com/modules/posslideshows/images/3c97f4ade5558583fd806d09a59245e9970bff09_celufiamos-registrate.png"  data-thumb="https://www.celufiamos.com/modules/posslideshows/images/3c97f4ade5558583fd806d09a59245e9970bff09_celufiamos-registrate.png"  alt="" title="#htmlcaption12"  /> </a>
				   				</div>
							</div>
		</div>
	</div>
</div>

 <script type="text/javascript">
 $(document).ready(function() {
	//Function to animate slider captions 
	function doAnimations( elems ) {
		//Cache the animationend event in a variable
		var animEndEv = 'webkitAnimationEnd animationend';
		
		elems.each(function () {
			var $this = $(this),
				$animationType = $this.data('animation');
			$this.addClass($animationType).one(animEndEv, function () {
				$this.removeClass($animationType);
			});
		});
	}
	//Variables on page load 
	var $myCarousel = $('.ma-nivoslider'),
		$firstAnimatingElems = $myCarousel.find('.nivo-caption').find("[data-animation ^= 'animated']");
	//Animate captions in first slide on page load 
	doAnimations($firstAnimatingElems);

});
</script><?php }
}
