<div class="container m-5">
   <!-- Large modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">
  Agregar Empleado
</button>

</div>
<br>
<br>
<div class="container-fluid">
<table class="table table-hover datatable " id="data">
  <thead class="">
    <tr>
      <th scope="col">Cédula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Sexo</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Celular</th>
      <th scope="col">Correo</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

foreach ($empleados as $empleado) {
    $editURL = base_url("Empleados/edit/{$empleado->employes_id}");
    $delURL = base_url("Empleados/delete/{$empleado->employes_id}");
    $editURL= base_url("Empleados/detalle_empleados/{$empleado->employes_id}");
      echo <<<LINEA
      <th scope="row">{$empleado->identity_number}</th>
      <td>{$empleado->name_employes}</td>
      <td>{$empleado->last_nameemplyes}</td>
      <td>{$empleado->sex}</td>
      <td>{$empleado->telephone}</td>
      <td>{$empleado->mobile}</td>
      <td>{$empleado->email}</td>
      <td>
          <a href="{$editURL}"  class="btn btn-success">Modificar</a>

          <a href="{$delURL}" class="btn btn-danger">Eliminar</a>

          <a href="{$editURL}" class="btn btn-warning">Detalle</a>
      </td>
    </tr>
LINEA;
  } ?>
  </tbody>
</table>

</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar nuevo Empleado</h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="post"   action="<?php echo base_url('Empleados/insertar_empleado'); ?>">
      <div class="form-group">
    <label for="inputCedula" class="col-sm-2 control-label">Cedula</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputCedula" placeholder="Cedula" name="cedula">
    </div>
  </div>
  <div class="form-group">
    <label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="nombre">
    </div>
  </div>

    <div class="form-group">
    <label for="inputApellido" class="col-sm-2 control-label">Apellido</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputApellido" placeholder="Apellido" name="apellido">
    </div>
  </div>

    <div class="form-group">
    <label for="inputSexo" class="col-sm-2 control-label">Sexo</label>
    <div class="col-sm-10">
    <select class="form-control" name="sexo">
  <option value="M">Maculino</option>
  <option value="F">Femenino</option>
</select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputFechaNacimiento" class="col-sm-2 control-label">Fecha Nacimiento</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputFechaNacimiento" placeholder="FechaNacimiento" name="nacimiento">
    </div>
  </div>
  <div class="form-group">
    <label for="inputDireccion" class="col-sm-2 control-label">Direccion</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputDireccion" placeholder="Direccion" name="direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputSector" class="col-sm-2 control-label">Sector</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputSector" placeholder="Sector" name="sector">
    </div>
  </div>
  <div class="form-group">
    <label for="inputTelefono" class="col-sm-2 control-label">Telefono</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputTelefono" placeholder="Telefono" name="telefono">
    </div>
  </div>
      <div class="form-group">
    <label for="inputCelular" class="col-sm-2 control-label">Celular</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputCelular" placeholder="Celular" name="celular">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar Cliente</button>
    </div>
  </div>
</form>
      </div>
  </div>
</div>