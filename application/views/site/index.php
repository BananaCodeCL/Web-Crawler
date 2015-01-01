
<div class="col-xs-12 col-sm-9">

<?php echo form_open('inicio/crawl'); ?>

 <div class="form-group">
    <label for="exampleInputEmail1">Pagina Web</label>
    <input name="url" type="text" class="form-control" placeholder="Ingrese Sitio">
  </div>
 
  <button type="submit" class="btn btn-default">Crawl</button>


<?php echo form_close()?>


<?php echo form_open('inicio/sitemap'); ?>

 <div class="form-group">
    <label for="exampleInputEmail1">Pagina Web</label>
    <input name="url" type="text" class="form-control" placeholder="Ingrese Sitio">
  </div>
 
  <button type="submit" class="btn btn-default">Sitemap</button>


<?php echo form_close()?>
</div>
