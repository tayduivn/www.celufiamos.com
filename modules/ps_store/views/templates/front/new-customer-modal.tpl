<div id="new-customer-form" class="row hidden">
<form class="js-customer-form" method="post">
<hr class="col-md-12">
		<div class="col-md-4">
	    <div class="form-group">
		    <select class="form-control" name="id_gender" id="id_gender">
		      {foreach from=$genders item=gender}
		      	<option value="{$gender.id_gender}">{$gender.name}</option>
		    	{/foreach}
		    </select>
		  </div>
	  </div>
		<div class="col-md-4">
		  <div class="form-group">
		    <select class="form-control" name="document_type" id="document_type" required>
		      <option value="1">Cedula de Ciudadania</option>
		    </select>
		  </div>
	  </div>
		<div class="col-md-4">
		  <div class="form-group">
		    <input type="number" class="form-control" maxlength="10" name="document" id="document" placeholder="Documento*" required>
		  </div>
	  </div>
	  <div class="col-md-6">
		  <div class="form-group">
		    <input type="text" class="form-control" maxlength="50" name="firstname" id="firstname" placeholder="Primer Nombre*" required>
		  </div>
	  </div>
	  <div class="col-md-6">
		  <div class="form-group">
		    <input type="text" class="form-control" maxlength="50" name="firstname2" id="firstname2" placeholder="Segundo nombre">
		  </div>
	  </div>
	  <div class="col-md-6">	  
		  <div class="form-group">
		    <input type="text" class="form-control" maxlength="50" name="lastname" id="lastname" placeholder="Primer Apellido*" required>
		  </div>
	  </div>
	  <div class="col-md-6">
		  <div class="form-group">
		    <input type="text" class="form-control" maxlength="50" name="lastname2" id="lastname2" placeholder="Segundo apellido">
		  </div>
	  </div>
	  <div class="col-md-6">	  
		  <div class="form-group">
		    <input type="number" class="form-control" maxlength="11" name="mobile" id="mobile" placeholder="Celular*" required>
		  </div>
	  </div>
	  <div class="col-md-6">	  
		  <div class="form-group">
		    <input type="email" class="form-control" maxlength="100" name="email" id="email" placeholder="Correo electrónico" required>
		  </div>
	  </div>
	  <div class="col-md-6">	  
		  <div class="form-group">
		    <input type="text" class="form-control" id="birthday2" name="birthday2" placeholder="Fecha de nacimiento" required>
		  </div>
	  </div>
	  <div class="col-md-6">	  
		  <div class="form-group">
		    <input type="text" class="form-control" id="f_exped2" name="f_exped2" placeholder="Fecha de expedición de la cédula
" required>
		  </div>
	  </div>
	  <div class="col-md-12">	  
		  <div class="form-group">
		    <input type="text" class="form-control" maxlength="200" id="address1" name="address1" placeholder="Dirección" required>
		  </div>
	  </div>
	  <div class="col-md-6">
		  <div class="form-group">
		    <select class="form-control" name="state" id="state" required>
		      <option value="">Departamento</option>
		      {foreach from=$states item=state}
		      	<option value="{$state.id_state}">{$state.name}</option>
		    	{/foreach}
		    </select>
		  </div>
		</div>
	  <div class="col-md-6">	  
		  <div class="form-group">
		    <input type="text" class="form-control" maxlength="100" id="city" name="city" placeholder="Ciudad*" required>
		  </div>
	  </div>			  	  
	  <div class="col-md-12" style="text-align: right">
	  	<button type="button" id="cancel-new-customer" class="btn btn-light">CANCELAR</button>
			<button type="submit" id="create-new-customer" class="btn btn-secondary">CREAR</button>
	  </div>
	<hr class="col-md-12">
	</form>
</div>
