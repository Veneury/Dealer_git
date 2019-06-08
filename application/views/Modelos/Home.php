<div class="container m-5">
   <!-- Large modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">
  Agregar Modelo
</button>

</div>
<br>
<br>
<div class="container-fluid">
<table class="table table-hover datatable " id="data">
  <thead class="">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

foreach ($modelos as $modelo) {
    
?>
      <th scope="row"><?php echo $modelo->models_id;?></th>
      <td><?php echo $modelo->name;?></td>
      <td>
          <a href="<?php echo base_url() . 'Modelos/edit/' .$modelo->models_id ?>"  class="btn btn-success">Modificar</a>

          <a href="<?php echo base_url() . 'Modelos/delete/' .$modelo->models_id?>" class="btn btn-danger">Eliminar</a>

          
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
        <h4 class="modal-title" id="myModalLabel">Agregar nuevo Modelo</h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="post"   action="<?php echo base_url('Modelos/insertar_modelo'); ?>">
      <div class="form-group">
    <label for="inputCedula" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputCedula" placeholder="Modelo" name="modelo">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar Modelo</button>
    </div>
  </div>
</form>
      </div>
  </div>
</div>