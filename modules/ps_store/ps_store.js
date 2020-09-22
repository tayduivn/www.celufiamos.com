(function($){
	$(document).ready(function($) {
		var $body = $('body');

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
			if (window.confirm("¿Desea generar la orden para "+product+" ?")) { 
				$.ajax({
				  	type: "POST",
				  	url: window.location.href ,
				  	data: {
				  		ajax: true,
				  		action: 'create-order',
				  		form: {
				  			id_product: id_product,
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