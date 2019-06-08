<form class="form-horizontal" method="post"   action="<?php echo base_url('Marcas/actualizar'); ?>">
<?php 
foreach($marcas as $marca)
{

?>
<input type="hidden" name="id" value="<?php echo $marca->brands_id;?>">
      <div class="form-group">
    <label for="inputCedula" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputCedula" placeholder="Marca" name="marca" value="<?php echo $marca->name;?>">
    </div>
  </div>
  <?php }?>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" class="btn btn-primary">Guardar Modelo</button>
    </div>
  </div>
</form>