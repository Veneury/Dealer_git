<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">
		<h1>Conteo </h1>
		
		<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo core_conteo::numRegistros('cars');?></h3>

              <p>Vehículos</p>
            </div>
            <div class="icon">
              <i class="fa fa-car"></i>
            </div>

          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
			  <h3><?php
			 echo core_conteo::numRegistros("sales"); 
			 
			  ?><sup style="font-size: 20px"></sup></h3>

              <p>Ventas</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>

          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php
			 echo core_conteo::numRegistros("customers"); 
			 
			  ?></h3>

              <p>Clientes</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>

          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php
			 echo core_conteo::numRegistros("employes"); 
			 
			  ?></h3>

              <p>Empleados</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>

          </div>
        </div>
        <!-- ./col -->

         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php
			 echo core_conteo::numRegistros("brands"); 
			 
			  ?></h3>

              <p>Marcas</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>

          </div>
        </div>
        <!-- ./col -->

                <!-- ./col -->

         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php
			 echo core_conteo::numRegistros("models"); 
			 
			  ?></h3>

              <p>Modelos</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>

          </div>
        </div>
        <!-- ./col -->
      </div>		
</div>

</body>
</html>