<div class="container m-5">
   <!-- Large modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">
  Agregar Marcas
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

foreach ($marca as $marca) {
    
?>
      <th scope="row"><?php echo $marca->brands_id;?></th>
      <td><?php echo $marca->name;?></td>
      <td>
          <a href="<?php echo base_url() . 'Marcas/edit/' .$marca->brands_id ?>"  class="btn btn-success">Modificar</a>

          <a href="<?php echo base_url() . 'Marcas/delete/' .$marca->brands_id?>" class="btn btn-danger">Eliminar</a>

        
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
      <form class="form-horizontal" method="post"   action="<?php echo base_url('Marcas/insertar_marca'); ?>">
      <div class="form-group">
    <label for="inputCedula" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputCedula" placeholder="Marca" name="marca">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar Marca</button>
    </div>
  </div>
</form>
      </div>
  </div>
</div>