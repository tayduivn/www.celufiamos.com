(function ( $ ) {
	$(document).ready(function($) {
	    if(prestashop.cart != undefined && prestashop.cart.products_count >= 1) {
	      	$('.add').parent().addClass('cart-disabled');
	      	$('.add').find('input, button').attr('disabled',true);
	    }
	    console.log('veme');
	    console.log(prestashop.modules.ps_kaiowa.cuota+' ' +$('.current-price span').attr('content'));
	    if ((prestashop.modules.ps_kaiowa.cuota < $('.current-price span').attr('content'))) {
	    	console.log('entre');
	    	$('.add').parent().addClass('cart-disabled');
	      $('.add').find('input, button').attr('disabled',true);
	    }

	    if (!prestashop.modules.ps_kaiowa.availability) {
	    	$('#PlataformDisabled').modal({keyboard: false, backdrop: 'static'});
	    }

	    if($('#Noallow').size() > 0) {
	    	$('#Noallow').modal();
	    }

	    if($('input[data-module-name=ps_kaiowa]').length > 0){
				$( "#checkout-payment-step input[data-module-name=ps_kaiowa]" ).change(function() {
					if($(this).prop("checked") == true) {
						var checkout = new WidgetCheckout(prestashop.modules.ps_kaiowa.wompi);
						$button = $('#payment-confirmation button');
						$button.attr('type','button');
						$button.on('click',function(e) {
							$('#payment-form').submit(function(e) {
								e.preventDefault();
							});
							e.preventDefault();
							checkout.open(function(result) {
							  $.ajax({
							  	type: "POST",
							  	url: result.transaction.redirectUrl,
							  	data: result,
			  					success: function(data) {
			  							window.location.replace(prestashop.modules.ps_kaiowa.redirect);
			  					},
			  					fail: function(data) {
			  							window.location.replace(prestashop.modules.ps_kaiowa.redirect);
			  					},
							  });
							});
						});
					}
				});
	    }
	    $('input[name="birthday"], input[name="f_exped"]').attr('readonly',true);
	    $('input[name="birthday"]').attr('readonly',true).datepicker({
	    	dateFormat: 'yy-mm-dd',
	    	monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
				monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
				dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
	    	changeMonth: true,
      	changeYear: true,
      	yearRange: '-110:-18',
      	maxDate: '-18y',
        minDate: '-110y',
        onSelect: function () {
        	var selected = new Date(Date.parse($('input[name="birthday"]').val()));
        	var year = selected.getFullYear();
			    var month = selected.getMonth();
			    var day = selected.getDate();
			    var newdate = new Date(year + 18, month, day);
			    $('input[name="f_exped"]').datepicker('destroy');
        	$('input[name="f_exped"]').attr('readonly',true).datepicker({
				    	dateFormat: 'yy-mm-dd',
				    	monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
							monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
							dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
				    	changeMonth: true,
			      	changeYear: true,
			      	maxDate: '-1',
			      	yearRange: newdate.getFullYear() + ':' + new Date().getFullYear() ,
			    });
        }
	    });



	    $('#infoModal').on('show.bs.modal', function (event) {
	      var id = $(event.relatedTarget).attr('id'),
		  			modal = $(this),
		  			credits = JSON.parse(prestashop.modules.ps_kaiowa.parsecredits);
			  $.each(credits.datos.cuposaldo.creditos_vigentes, function( index, value ) {
			  	modal.find('#d_estado_cartera').html(credits.datos.cuposaldo.d_estado_cartera);
			  		if(value.id_obligacion == id) {
			  			modal.find('.modal-body').html(value.historial);
			  		}
			  });
			  modal.find('.modal-title').text('Ref. #' + id)
			})

			$('#infoPayment').on('show.bs.modal', function (event) {
					var id = $(event.relatedTarget).attr('id'),
		  			modal = $(this),
		  			credits = JSON.parse(prestashop.modules.ps_kaiowa.credits);

		  		$.each(credits.datos.cuposaldo.creditos_vigentes, function( index, value ) {
		  				if(value.id_obligacion == id) {
		  					$('#paymentQuotes option').remove();
		  					for (i = 1; i <= value.cuotas_pendientes; i++) {
		  						$('#paymentQuotes').append('<option value="'+i+'">'+i+' Cuota</option>').attr('data-id',id);
		  					}
		  					$('#total-consig').html(value.wompi.amountOriginal);
		  				}
		  		})
			});

			$('#paymentQuotes').on('click', function(e){
				$('#consignation').removeClass('hidden');
			});

			$('#paymentQuotes').on('change',function(e){
				var quotes = $('#infoPayment #paymentQuotes').val(),
						id = $('#infoPayment #paymentQuotes').attr('data-id'),
						original = JSON.parse(prestashop.modules.ps_kaiowa.credits);
				$.each(original.datos.cuposaldo.creditos_vigentes, function( index, value ) {
  				if(value.id_obligacion == id) {
  					$('#total-consig').html(value.wompi.amountOriginal * quotes);
  				}
	  		});			
			})

			$('#infoPayment .payment-wompi').on('click',function(e) {
				var quotes = $('#infoPayment #paymentQuotes').val(),
						id = $('#infoPayment #paymentQuotes').attr('data-id'),
						credits = JSON.parse(prestashop.modules.ps_kaiowa.credits);
	  		$.each(credits.datos.cuposaldo.creditos_vigentes, function( index, value ) {
  				if(value.id_obligacion == id) {
  					if(quotes > 1) {
  						value.wompi.amountInCents = value.wompi.amountInCents * quotes;	
  					}
  					$('body').css('overflow','auto');
  					var checkout = new WidgetCheckout(value.wompi);
  					checkout.open(function(result) {
  						console.log(result);
  						$.ajax({
						  	type: "POST",
						  	url: window.location.href,
						  	data: {
						  		ajax: true,
						  		action: 'save-payment',
						  		form: result,
						  		cuotas: quotes
						  	},
		  					success: function(data) {
		  						console.log(data);
		  					},
		  					fail: function(data) {
		  						alert('Error al registrar el pago, contacte al administrador');
		  					},
						  });


  						//window.location.reload();
						});
  				}
	  		})
			})
	});
}( jQuery ));