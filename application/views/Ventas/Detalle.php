<center><h2>Detalle de ventas</h2></center>

<?php foreach($detalles as $detalle): ?>
<center><h3><?php echo $detalle->name_employes." " .$detalle->last_nameemplyes?></h3></center>
<br>
<div class="container">
<div class="row">
<div class="col col-sm-4">
<h3><strong>Cédula: </strong>

<?php echo $detalle->identity_number?>
</h3>

</div>
<div class="col col-sm-3">


<h3><strong>Sexo: </strong>
<?php if($detalle->sex =="M"){
    echo "Masculino";
}else {echo "Femenino";}?>
</h3>

</div>

<div class="col col-sm-4">
<h3><strong>Fecha Nacimiento: </strong>

<?php echo $detalle->birth_date?>
</h3>

</div>

<div class="col col-sm-4">
<h3><strong>Dirección: </strong>

<?php echo $detalle->address?>
</h3>

</div>
<div class="col col-sm-3">
<h3><strong>Sector: </strong>

<?php echo $detalle->sector?>
</h3>

</div>
<div class="col col-sm-4">
<h3><strong>Teléfono: </strong>

<?php echo $detalle->telephone?>
</h3>
</div>

<div class="col col-sm-4">
<h3><strong>Celular: </strong>

<?php echo $detalle->mobile?>
</h3>
</div>

<div class="col col-sm-4">
<h3><strong>Correo: </strong>

<?php echo $detalle->email?>
</h3>
</div>

<div class="col col-sm-4">
<h3><strong>Tipo pago: </strong>

<?php echo $detalle->type_pay?>
</h3>
</div>

<div class="col col-sm-4">
<h3><strong>Nombre del empleado: </strong>

<?php echo $detalle->name_employes. 
" ". $detalle->last_nameemplyes ?>
</h3>
</div>

<div class="col col-sm-4">
<h3><strong>Itbis: </strong>

<?php echo $detalle->itebis?>
</h3>
</div>

<div class="col col-sm-4">
<h3><strong>Sub-Total: </strong>

<?php echo $detalle->sub_total?>
</h3>
</div>

<div class="col col-sm-4">
<h3><strong>Descuento: </strong>

<?php echo $detalle->discount?>
</h3>
</div>

<div class="col col-sm-4">
<h3><strong>Total: </strong>

<?php echo $detalle->total?>
</h3>
</div>


</div>

</div>

<?php endforeach;?>