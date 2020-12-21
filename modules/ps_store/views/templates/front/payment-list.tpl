	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Valor</th>
      <th scope="col"># de Cuotas</th>
      <th scope="col">Cliente</th>
      <th scope="col">Metodo</th>
      <th scope="col">Ref.</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>	    	
  	{foreach from=$list item=row}		    	
    <tr>
      <th scope="row">{Tools::displayPrice($row.value)}</th>
      <td>{$row.quotas}</td>
      <td>{$row.id_customer}</td>
      <td>{$row.payment_method}</td>
      <td>{$row.id_order}</td>
      <td>{$row.date}</td>
    </tr>
    {/foreach}
  </tbody>
</table>