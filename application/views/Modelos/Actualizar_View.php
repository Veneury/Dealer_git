<form class="form-horizontal" method="post"   action="<?php echo base_url('Modelos/actualizar'); ?>">
<?php 
foreach($modelos as $modelo)
{

?>
<input type="hidden" name="id" value="<?php echo $modelo->models_id;?>">
      <div class="form-group">
    <label for="inputCedula" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputCedula" placeholder="Modelo" name="modelo" value="<?php echo $modelo->name;?>">
    </div>
  </div>
  <?php }?>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-5">
      <button type="submit" class="btn btn-primary">Guardar Modelo</button>
    </div>
  </div>
</form>