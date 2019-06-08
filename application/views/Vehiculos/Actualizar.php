<form class="form-horizontal" method="post"   action="<?php echo base_url('Vehiculos/actualizar'); ?>" enctype="multipart/form-data">
      <div class="form-group">
      <?php 

foreach($vehiculos as $vehiculo)
{
  
?>
<input type="hidden" name="id" id="" value="<?= $vehiculo->cars_id;?>">
    <label for="inputMatricula" class="col-sm-2 control-label">Matricula</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputMatricula" placeholder="Matricula" name="matricula" value="<?= $vehiculo->registration_car;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPlaca" class="col-sm-2 control-label">Placa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPlaca" placeholder="Placa" name="placa" value="<?= $vehiculo->placa;?>">
    </div>
  </div>

    <div class="form-group">
    <label for="inputColor" class="col-sm-2 control-label">Color</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputColor" placeholder="Color" name="color" value="<?= $vehiculo->color;?>">
    </div>
  </div>

    <div class="form-group">
    <label for="inputSexo" class="col-sm-2 control-label">Modelo</label>
    <div class="col-sm-10">
    <select class="form-control" name="modelo">
    <option value="<?= $vehiculo->models_id;?>"><?= $vehiculo->models_id;?></option>
<?php

   foreach($modelos as $modelo)
   {
?>
  <option value="<?=$modelo->models_id;?>"><?php echo $modelo->name;?></option>
   <?php }?>
</select>
    </div>
  </div>

      <div class="form-group">
    <label for="inputSexo" class="col-sm-2 control-label">Marca</label>
    <div class="col-sm-10">
    <select class="form-control" name="marcas">
    <option value="<?= $vehiculo->brands_id;?>"><?= $vehiculo->brands_id;?></option>
<?php

   foreach($marcas as $marca)
   {
?>
  <option value="<?=$marca->brands_id;?>"><?php echo $marca->name;?></option>

<?php }?>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputFechaNacimiento" class="col-sm-2 control-label">Año</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputFechaNacimiento" placeholder="FechaNacimiento" name="ano" value="<?= $vehiculo->year;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPrecioVentas" class="col-sm-2 control-label">Precio Ventas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrecioVentas" placeholder="Precio de Ventas" name="precioVentas" value="<?= $vehiculo->sale_price;?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPrecioCompra" class="col-sm-2 control-label">Precio Compra</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrecioCompra" placeholder="Precio de Compras" name="precioCompra" value="<?= $vehiculo->buy_price;?>">
    </div>
  </div>
  
      

  <div class="form-group">
    <label for="inputDescripcion" class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-10">
      <textarea type="file" class="form-control" id="inputDescripcion" placeholder="Descripcion" name="descripcion" value="<?= $vehiculo->description;?>"><?= $vehiculo->description;?></textarea>
    </div>
  </div>
  <?php }?>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Actualizar Vehiculo</button>
    </div>
  </div>
</form>

