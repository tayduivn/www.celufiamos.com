<div class="row">
  <div class="col-md-3">
    <div class="form-group">
      <input type="text" autocomplete="off" class="form-control" maxlength="50" name="filter-fini" id="filter-fini" placeholder="Fecha inicio" required="">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <input type="text" autocomplete="off" class="form-control" maxlength="50" name="filter-ffin" id="filter-ffin" placeholder="Fecha fin" required="">
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <select class="form-control" name="filter-type" id="filter-type">
        <option value="1">Ordenes</option>
        <option value="2">Pagos</option>
      </select>
    </div>
  </div>
  <div class="col-md-3">
    <button type="button" id="filter-sells" class="btn btn-success col-md-12">BUSCAR</button>
  </div>
</div>

<div class="search-result" id="search-result">
  <div class="alert alert-info" role="alert">
    No se encontraron registros
  </div>
</div>