<?php
$central= base_url().'base/';

?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dealer ABC</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= $central?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= $central?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= $central?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= $central?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->

         <!-- DataTables -->
  <link rel="stylesheet" href="<?= $central?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?= $central?>dist/css/skins/skin-blue.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url();?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>BC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dealer</b>ABC</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            
            <ul class="dropdown-menu">
              
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                      
                        <img src="<?= $central?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
             
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            
            <ul class="dropdown-menu">
              
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                  
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            
            <ul class="dropdown-menu">
              <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
             
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?= $central?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?= $central?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce
                  
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Actualizar</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Salir</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= $central?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

<br>


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="">
          <a href="<?= base_url() ?>Clientes/Home"><i class="fa fa-link"></i> <span>Clientes</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          
        </li>
        <li class="">
          <a href="<?= base_url() ?>Empleados/Home"><i class="fa fa-link"></i> <span>Empleados</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          
        </li>
        <li class="">
          <a href="<?= base_url() ?>Modelos/Home"><i class="fa fa-link"></i> <span>Modelos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
        </li>
        <li class="">
          <a href="<?= base_url() ?>Marcas/Home"><i class="fa fa-link"></i> <span>Marcas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
        </li>
        <li class="">
          <a href="<?= base_url() ?>Vehiculos/Home"><i class="fa fa-link"></i> <span>Vehiculos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
        </li>
        <li class="">
          <a href="<?= base_url() ?>Ventas/Home"><i class="fa fa-link"></i> <span>Ventas</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
        
        </li>
        
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--<section class="content-header">
      <h1>
        Home
        <small>Grafico</small>
      </h1>
      
    </section>-->

    <!-- Main content -->
    <section class="content container-fluid">

     <?php echo $content_for_layout ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    Todos los derechos reservados.
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php 
    echo date('Y'); ?> .</strong> 
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?= $central?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= $central?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= $central?>dist/js/adminlte.min.js"></script>

<!-- DataTables -->
<script src="<?= $central?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= $central?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>



<!-- ChartJS -->
<script src="<?= $central?>bower_components/chart.js/Chart.js"></script>

<script src="<?= $central?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= $central?>dist/js/demo.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->

     <script>
  
$("#data").DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "No se encontraron resultados en su busqueda",
            "searchPlaceholder": "Buscar registros",
            "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
            "infoEmpty": "No existen registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "search": "Buscar:",
            "paginate": {
                "first": "Primero",
                "last": "�ltimo",
                "next": "Siguiente",
                "previous": "Anterior"
            },
        
        }
    });
     
</script>
</body>
</html>