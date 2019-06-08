
<div class="container m-5">
   <!-- Large modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">
  Agregar Vehículo
</button>

</div>
<br>
<br>
<div class="container-fluid">
<table class="table table-hover datatable " id="data">
  <thead class="">
    <tr>
      <th scope="col">Matrícula</th>
      <th scope="col">Placa</th>
      <th scope="col">Year</th>
      <th scope="col">Precio compra</th>
      <th scope="col">Precio Venta</th>
      <th scope="col">Color</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

foreach ($Vehiculos as $vehiculo) {
    
?>

      <th scope="row"><?php echo $vehiculo->registration_car;?></th>
      <td><?php echo $vehiculo->placa;?></td>
      <td><?php echo $vehiculo->year;?></td>
      <td><?php echo $vehiculo->sale_price;?></td>
      <td><?php echo $vehiculo->buy_price;?></td>
      <td><?php echo $vehiculo->color;?></td>

      <td>
          <a href="<?php echo base_url() . 'Vehiculos/edit/' .$vehiculo->cars_id ?>"  class="btn btn-success">Modificar</a>

          <a href="<?php echo base_url() . 'Vehiculos/eliminar_vehiculo/' .$vehiculo->cars_id ?>" class="btn btn-danger">Eliminar</a>

         
      </td>
    </tr>
<?php }?>
  </tbody>
</table>

</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar nuevo Vehículo</h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="post"   action="<?php echo base_url('Vehiculos/insertar_vehiculo'); ?>" enctype="multipart/form-data">
      <div class="form-group">
    <label for="inputMatricula" class="col-sm-2 control-label">Matricula</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputMatricula" placeholder="Matricula" name="matricula">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPlaca" class="col-sm-2 control-label">Placa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPlaca" placeholder="Placa" name="placa">
    </div>
  </div>

    <div class="form-group">
    <label for="inputColor" class="col-sm-2 control-label">Color</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputColor" placeholder="Color" name="color">
    </div>
  </div>

    <div class="form-group">
    <label for="inputSexo" class="col-sm-2 control-label">Modelo</label>
    <div class="col-sm-10">
    <select class="form-control" name="modelo">
    <option>Seleccione un modelo</option>
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
    <option>Seleccione una marca</option>
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
      <input type="date" class="form-control" id="inputFechaNacimiento" placeholder="FechaNacimiento" name="ano">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPrecioVentas" class="col-sm-2 control-label">Precio Ventas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrecioVentas" placeholder="Precio de Ventas" name="precioVentas">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPrecioCompra" class="col-sm-2 control-label">Precio Compra</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPrecioCompra" placeholder="Precio de Compras" name="precioCompra">
    </div>
  </div>
  <div class="form-group">
    <label for="inputFotoUno" class="col-sm-2 control-label">Foto Uno</label>

    <div class="col-sm-10">
    <?php echo form_open_multipart('Vehiculos/do_upload');?>
      <input type="file" class="form-control" id="inputFotoUno" placeholder="FotoUno" name="fotoUno">
    </div>
  </div>
      

  <div class="form-group">
    <label for="inputDescripcion" class="col-sm-2 control-label">Descripcion</label>
    <div class="col-sm-10">
      <textarea type="file" class="form-control" id="inputDescripcion" placeholder="Descripcion" name="descripcion"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar Vehiculo</button>
    </div>
  </div>
</form>
      </div>
  </div>
</div>


