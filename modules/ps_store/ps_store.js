(function($){
	$(document).ready(function($) {
		var $body = $('body');

		$body.on('click','#open-payment',function(e) {
			e.preventDefault();
			$body.find('#save-payment*').attr('data-reference', $(this).attr('data-reference'));
		});

		$('#modal-combination').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget);
			  var combinations = JSON.parse(button.attr('data-combination'));
			  var id_product = button.attr('data-id');
			  var product_name = button.attr('data-product');
			  var modal = $(this);
				var html = '';
				$.each(combinations, function( index, value ) {
				  html+= '<label><input class="select-combination" type="radio" name="'+id_product+'" value="'+index+'"> <p>'+value+'</p></label>';
				});
			  
			  modal.find('.modal-title').text('Seleccione la combinación');
			  modal.find('.modal-body').html(html);
			  modal.find('.modal-select').attr('disabled', true).removeClass('choose-product').attr('data-product', product_name);
		})

		$body.on('click', '.select-combination', function(e) {
			var id_attribute = $('.select-combination:checked').val();
			var id_product = $('.select-combination:checked').attr('name');
			if(id_attribute) {
				$body.find('.modal-select').removeAttr('disabled').attr({
					'data-id': id_product,
					'data-id-attribute': id_attribute
				}).addClass('choose-product');
			}
		});

		$body.on('show.bs.modal', '#paymentSave', function (event) {
			var id = $(event.relatedTarget).attr('id'),
  			modal = $(this),
  			order_reference = $(event.relatedTarget).attr('data-reference'),
  			credits = JSON.parse(prestashop.modules.ps_kaiowa.credits);

  			if(order_reference) {
  				$('#save-payment').attr('data-reference', order_reference);
  				$('#register-payment').attr('data-reference', order_reference);
  			}
		});


		$body.on('click','#register-payment',function(e) {
			e.preventDefault();
			var reference = $(this).attr('data-reference');
			var quotas = $body.find('#quotes').val();
			if (window.confirm("¿Desea registrar el pago de "+quotas+" cuota(s) para esta orden?")) { 
				$.ajax({
				  	type: "POST",
				  	url: window.location.href,
				  	data: {
				  		ajax: true,
				  		action: 'register-payment',
				  		form: reference,
				  		cuotas: quotas
				  	},
						success: function(data) {
							data = JSON.parse(data);
							if (data.haserrors) {
								alert(data.message);

							} else {
								console.log(data);
								alert(data.message);
								$('#open-payment').remove();
								$('#print').html('DESCARGAR COMPROBANTE').removeClass('hidden').attr('onclick', 'javascript:window.open(\''+data.info.factura+'\')');
								$('button.close, #search-pay-customer').click();
								window.open(data.info.factura);
							}
						},
						fail: function(data) {
							alert('Error: No pudo encontrarse el documento, contacte al administrador');
						},
				});
			}
		});	

		$body.on('click','#save-payment',function(e) {
			e.preventDefault();
			var reference = $(this).attr('data-reference');
			var quotas = $body.find('#quotes').val();
			if (window.confirm("¿Desea registrar el pago de "+quotas+" cuota(s) para esta orden?")) { 
				$.ajax({
				  	type: "POST",
				  	url: window.location.href,
				  	data: {
				  		ajax: true,
				  		action: 'save-payment',
				  		form: reference,
				  		cuotas: quotas
				  	},
						success: function(data) {
							data = JSON.parse(data);
							if (data.haserrors) {
								alert(data.message);
							} else {
								alert(data.message);
								$body.find('button[data-dismiss=modal]').click();
								$body.find('#cancel-payment').remove();
								$body.find('#date-payment').html(data.info.date);
								$body.find('#payment-cuotas').html(data.info.quotas);
								$body.find('#total-payment').html(data.info.total);
								$body.find('#payment-approved').removeClass('hidden');
								$body.find('#print').removeClass('hidden');
								$body.find('#open-payment').remove();
							}
						},
						fail: function(data) {
							alert('Error: No pudo encontrarse el documento, contacte al administrador');
						},
				});
			}
		});		

		$body.on('click','#cancel-payment',function(e) {
			e.preventDefault();
			var reference = $(this).attr('data-reference');
			if (window.confirm("¿Desea cancelar esta orden?")) { 
				$.ajax({
				  	type: "POST",
				  	url: window.location.href,
				  	data: {
				  		ajax: true,
				  		action: 'cancel-order',
				  		form: reference
				  	},
						success: function(data) {
							data = JSON.parse(data);
							if (data.haserrors) {
								alert(data.message);
							} else {
								alert(data.message);
								window.location.href = window.location.origin + window.location.pathname; 
							}
						},
						fail: function(data) {
							alert('Error: No pudo encontrarse el documento, contacte al administrador');
						},
				});
			}
		});

		$body.on('click','#search-pay-customer',function(e) {
			e.preventDefault();
			var doc = $body.find('#search_pay_custmer').val();
			if(!doc) {
				alert('Ingrese un documento');
			} else {
				$.ajax({
				  	type: "POST",
				  	url: window.location.href ,
				  	data: {
				  		ajax: true,
				  		action: 'search-payments-customer',
				  		form: {
				  			document: doc
				  		}
				  	},
  					success: function(data) {
  						data = JSON.parse(data);
  						if (data.haserrors) {
  							alert(data.message)
  						} else {
  							$body.find('#result-orders').html(data.message); 
  						}
  					},
  					fail: function(data) {
  						alert('Error: No pudo encontrarse el documento, contacte al administrador');
  					},
				});				
			}
		});
		$body.on('click','.choose-product',function(e) {
			let id_product = $(this).attr('data-id');
			let product = $(this).attr('data-product');
			let id_attribute = $(this).attr('data-id-attribute');
			if (window.confirm("¿Desea generar la orden para "+product+" ?")) { 
				$.ajax({
				  	type: "POST",
				  	url: window.location.href ,
				  	data: {
				  		ajax: true,
				  		action: 'create-order',
				  		form: {
				  			id_product: id_product,
				  			id_product_attribute: id_attribute,
				  			customer: window.location.href,
				  		}
				  	},
  					success: function(data) {
  						data = JSON.parse(data);
  						if (data.haserrors) {
  							alert(data.message)
  						} else {
  							window.location.href = data.message; 
  						}
  					},
  					fail: function(data) {
  						alert('Error: No pudo encontrarse el documento, contacte al administrador');
  					},
				});
			}
		});

		$body.on('click','#search-customer',function(e){
			var input = $body.find('#search_document').val();
			if(!input) {
				alert('Ingrese un documento');
			} else {
				$.ajax({
				  	type: "POST",
				  	url: window.location.href ,
				  	data: {
				  		ajax: true,
				  		action: 'search-user',
				  		form: input
				  	},
  					success: function(data) {
  						data = JSON.parse(data);
  						if (data.haserrors) {
  							alert(data.message)
  						} else {
  							window.location.href = data.message; 
  						}
  					},
  					fail: function(data) {
  						alert('Error: No pudo encontrarse el documento, contacte al administrador');
  					},
				});				
			}
		});
		$body.on('click', '#new-customer, #cancel-new-customer', function(event) {
			$('#new-customer-form').slideToggle('slow',function(e){
				$(this).find('input').val('');
			});
		});

		$body.on('submit', '#new-customer-form form', function(event) {
			event.preventDefault();
			var form = {};
			$body.find('input, select').each(function(index, el) {
				if($(el).val() != '') {
					form[$(el).attr('id')] = $(el).val();
				}
			});
			if($body.find('#new-customer-form input[required], #new-customer-form  select[required]').size() <= Object.keys(form).length) {
				$.ajax({
				  	type: "POST",
				  	url: window.location.href ,
				  	data: {
				  		ajax: true,
				  		action: 'create-new-user',
				  		form: form
				  	},
  					success: function(data) {
  						data = JSON.parse(data);
  						if (data.haserrors) {
  							alert(data.message)
  						} else {
  							alert('¡Cliente Creado!, Complete el proceso de solicitud de cupo en la ventana kaiowa');
  							window.open(data.message,"_self");
  						}
  					},
  					fail: function(data) {
  						alert('Error: no puede crearse el usuario en este momento, contacte al administrador');
  					},
				  });
			} else {

			}
			/* Act on the event */
		});

	  $('input[name="birthday2"]').datepicker({
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
	    	var selected = new Date(Date.parse($('input[name="birthday2"]').val()));
	    	var year = selected.getFullYear();
		    var month = selected.getMonth();
		    var day = selected.getDate();
		    var newdate = new Date(year + 18, month, day);
		    $('input[name="f_exped2"]').datepicker('destroy');
	    	$('input[name="f_exped2"]').datepicker({
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
	});  
}(jQuery));