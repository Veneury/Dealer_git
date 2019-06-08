<div class="container m-5">
   <!-- Large modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">
  Agregar Venta
</button>

</div>
<br>
<br>
<div class="container-fluid">
<table class="table table-hover datatable " id="data">
  <thead class="">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre Empleado</th>
      <th scope="col">Nombre Cliente</th>
      <th scope="col">Matricula carro</th>
      <th scope="col">Color</th>
      <th scope="col">Placa</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php

foreach ($ventas as $venta) {
    //$editURL = base_url("Ventas/edit/{$venta->sale_id}");
    $delURL = base_url("Ventas/delete/{$venta->sale_id}");
    $delDet = base_url("Ventas/detalle_venta/{$venta->sale_id}");
    
      echo <<<LINEA
      <th scope="row">{$venta->sale_id}</th>
      <th scope="row">{$venta->name_employes} {$venta->last_nameemplyes}</th>
      <td>{$venta->name} {$venta->last_name}</td>
     
      <td>{$venta->registration_car}</td>
      <td>{$venta->color}</td>
      <td>{$venta->placa}</td>
      
      <td>

          <a href="{$delURL}" class="btn btn-danger">Eliminar</a>

          <a href="{$delDet}" class="btn btn-warning">Detalle</a>
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
        <h4 class="modal-title" id="myModalLabel">Agregar nueva Venta</h4>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method="post"   action="<?php echo base_url('Ventas/insertar_ventas'); ?>">
      <div class="form-group">
    <label for="inputCedula" class="col-sm-2 control-label">Cliente</label>
    <div class="col-sm-10">
    <select class="form-control" name="cliente">
  <option value="">Selecciona un cliente</option>
  <?php foreach($clientes as $cliente) :?>
  <option value="<?php echo $cliente->customers_id?>"><?php echo $cliente->name?><?php echo " "?><?php echo $cliente->last_name?></option>
<?php endforeach; ?>
</select>
    </div>
  </div>

<div class="form-group">
    <label for="inputCedula" class="col-sm-2 control-label">Empleado</label>
    <div class="col-sm-10">
    <select class="form-control" name="empleado">

  <option value="">Seleccione un empleado</option>
 <?php foreach($empleados as $empleado) {?>
 <option value="<?php echo $empleado->employes_id?>"><?php echo $empleado->name_employes?></option>
 <?php } ?>
</select>
    </div>
  </div>

<div class="form-group">
<label for="inputCedula" class="col-sm-2 control-label">Carro</label>
<div class="col-sm-10">
<select class="form-control" name="carro">
<option value="">Seleccione el carro</option>
<?php foreach($carros as $carro) {?>
 <option value="<?php echo $carro->cars_id?>"><?php echo $carro->placa?></option>
 <?php } ?>
</select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputFechaNacimiento" class="col-sm-2 control-label">Fecha Venta</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputFechaNacimiento" placeholder="FechaNacimiento" name="fecha_venta">
    </div>
  </div>

  <input type="hidden" name="precio" id="" value="<?php echo $venta->buy_price?>">



<div class="form-group">
<label for="inputCedula" class="col-sm-2 control-label">Tipo pago</label>
<div class="col-sm-10">
<select class="form-control" name="tipopago">
<option value="Cheque">Cheque</option>
<option value="Tarjeta">Tarjeta</option>
<option value="Efectivo">Efectivo</option>
</select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputDireccion" class="col-sm-2 control-label">Descuento</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputDireccion" placeholder="Direccion" name="descuento">
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar Venta</button>
    </div>
  </div>
</form>
      </div>
  </div>
</div>
