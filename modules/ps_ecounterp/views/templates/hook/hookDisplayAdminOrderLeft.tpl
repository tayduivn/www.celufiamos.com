<div class="panel">
  <div class="panel-heading">
    <i class="icon-shopping-cart"></i>
      Ecount ERP <span class="badge">1</span>
  </div>
  <div class="panel-body">
  {foreach from=$log item=foo}
    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{$foo.id}">{$foo.method} - {$foo.url}</a>
    <div id="collapse{$foo.id}" class="panel-collapse collapse out">
    <br>
      {base64_decode($foo.log)}
    </div>
    <hr>
  {/foreach}
  </div>
</div>
