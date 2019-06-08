<?php
var_dump($ventas); 
?>

<form class="form-horizontal" method="post"   action="<?php echo base_url('Ventas/insertar_ventas'); ?>">
<?php foreach($ventas as $venta):?>
      <div class="form-group">
    <label for="inputCedula" class="col-sm-2 control-label">Cliente</label>
    <div class="col-sm-10">
    <select class="form-control" name="cliente">
  <option value="<?php echo $venta->id_customers?>"><?php echo $venta->id_customers?></option>
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

   <option value="<?php echo $venta->id_employes?>"><?php echo $venta->id_employes?></option>
 <?php foreach($empleados as $empleado) {?>
 <option value="<?php echo $empleado->employes_id?>"><?php echo $empleado->name_employes?></option>
 <?php } ?>
</select>
    </div>
  </div>

<div class="form-group">
<label for="inputCedula" class="col-sm-2 control-label">Place Carro</label>
<div class="col-sm-10">
<select class="form-control" name="carro">
<option value="<?php echo $venta->card_id?>"><?php echo $venta->card_id?></option>
<?php foreach($carros as $carro) {?>
 <option value="<?php echo $carro->cars_id?>"><?php echo $carro->placa?></option>
 <?php } ?>
</select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputFechaNacimiento" class="col-sm-2 control-label">Fecha Venta</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="inputFechaNacimiento" placeholder="FechaNacimiento" name="fecha_venta" value=<?php echo $venta->sale_date?>>
    </div>
  </div>

  <input type="text" name="precio" id="" value="<?php echo $venta->buy_price?>">



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
<?php endforeach;?>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Actualizar Venta</button>
    </div>
  </div>
</form>

