<div class="container">
<form class="form-horizontal" method="post"   action="<?php echo base_url('Clientes/actualizar'); ?>">
<?php 
foreach($datos as $dato)
{
?>
<input type="hidden" name="id" value="<?= $dato->customers_id?>">
      <div class="form-group">
    <label for="inputCedula" class="col-sm-2 control-label" >Cedula</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputCedula" value="<?= $dato->identity_number ?>" placeholder="Cedula" name="cedula">
    </div>
  </div>
  <div class="form-group">
    <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="nombre" value="<?= $dato->name ?>">
    </div>
  </div>

    <div class="form-group">
    <label for="inputApellido" class="col-sm-2 control-label">Apellido</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputApellido" placeholder="Apellido" name="apellido" value="<?= $dato->last_name ?>">
    </div>
  </div>

    <div class="form-group">
    <label for="inputSexo" class="col-sm-2 control-label">Sexo</label>
    <div class="col-sm-5">
    <select class="form-control" name="sexo">
  <option value="M">Maculino</option>
  <option value="F">Femenino</option>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputFechaNacimiento" class="col-sm-2 control-label">Fecha Nacimiento</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" id="inputFechaNacimiento" placeholder="FechaNacimiento" name="nacimiento" value="<?= $dato->birth_date?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputDireccion" class="col-sm-2 control-label">Direccion</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputDireccion" placeholder="Direccion" name="direccion" value="<?= $dato->address ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputSector" class="col-sm-2 control-label">Sector</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputSector" placeholder="Sector" name="sector" value="<?= $dato->sector ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputTelefono" class="col-sm-2 control-label">Telefono</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputTelefono" placeholder="Telefono" name="telefono" value="<?= $dato->telephone ?>">
    </div>
  </div>
      <div class="form-group">
    <label for="inputCelular" class="col-sm-2 control-label">Celular</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputCelular" placeholder="Celular" name="celular" value="<?= $dato->mobile ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email" value="<?= $dato->email ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
    </div>
  </div>
<?php }?>
</form>
</div>
