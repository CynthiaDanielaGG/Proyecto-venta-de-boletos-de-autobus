<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Costaline | Gestion de Autobus </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->

      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Panel</b>Administrador</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->


      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">


        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar2.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Jazmin Hernandez Garcia</p>
          <a href="#"><i class="fa fa-circle text-success"></i> En linea</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">

        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENÚ</li>
        <li >
          <a href="#">
            <i class="fa fa-users"></i> <span>Cliente</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

              <li><a href="eliminarCliente.php"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
        <li >
          <a href="#">
            <i class="fa fa-bus"></i> <span>Autobús</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active">
              <a href="agregarAutobus.php"><i class="fa fa-circle-o"></i>Agregar-Modificar-Eliminar</a></li>

          </ul>
        </li>
        <li >
          <a href="#">
            <i class="fa fa-user"></i> <span>Chofer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active">
            <a href="index.html"><i class="fa fa-circle-o"></i>Registrar</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>Modificar</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
        <li >
          <a href="#">
            <i class="fa fa-building-o"></i> <span>Ciudades</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <a href="agregarCiudades.php"><i class="fa fa-circle-o"></i>Agregar-Modificar-Eliminar</a></li>

          </ul>
        </li>
        <li >
          <a href="#">
            <i class="fa fa-sort-amount-asc"></i> <span>Corridas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active">
            <a href="index.html"><i class="fa fa-circle-o"></i>Registrar</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>Modificar</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>Eliminar</a></li>
          </ul>
        </li>
        <li >
          <a href="logout_admin.php">
            <i class="fa fa-times"></i> <span>Cerrar Sesion</span>
            <span class="pull-right-container">
              </i>
            </span>
          </a>

        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Panel de control
      </h1>
      <ol class="breadcrumb">
        <li><a href="modificarCliente.php"><i class="fa fa-dashboard"></i>Gestion</a></li>
        <li><a href="modificarCliente.php"><i class="fa fa-dashboard"></i>Autobus</a></li>
        <li><a href="opcionesAdministrador.php"><i class="fa fa-dashboard"></i>Pagina del Administrador</a></li>

      </ol>
    </section>

    <!-- Main content -->

    <section class="content">

      <div class="row ">

        <div class="col-lg-6 ">
          <!--inicio del formulario para buscar-->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Introduce los datos del Autobús</h3>
            </div>

              <div class="box-body">
                <div class="form-group">
                  <div class="cajaFondoAutobus">

                  <form role="form" action="actionGestionAutobus.php" method="post" enctype="multipart/form-data">
                      <table class="tableFondo" width="500" height="300" >
                          <tr>
                              <td colspan="2">
                                  <p><br>
                                      CLAVE:
                                      <input type="text" class="form-control" name="clave" class="inputClave">

                                      <input class="btn btn-info btn-flat" type="submit" name="buttonBuscarAutobus" value="B U S C A R">
                                  </p>
                                  <br>
                                  <?php
                                  require_once('conexion.php');

                                  $errorIdAutobus = false;
                                  $errorcapacidadAutobus = false;
                                  $consulta = false;
                                  $idAutobusBuscado;

                                  if(isset($_GET['pi'])){
                                      $idAutobusBuscado = true;
                                  }
                                  if(isset($_GET['pr'])){
                                      $idAutobusBuscado = true;
                                  }else
                                  //Muestra los errores de la opcion registrar autobus
                                  if(isset($_GET['reg'])){
                                      if($_GET['reg']==1){
                                          echo "<script>
                                              alert ('El autobus fue registrado correctamente.');
                                              </script>";
                                      } else
                                      if($_GET['reg']==2){
                                              echo "<script>
                                              alert ('El autobus no se registro porque este campo solo acepta letras');
                                              </script>";
                                      } else
                                      if($_GET['reg']==3){
                                          echo "<script>
                                              alert ('El autobus no se registro porque este campo solo acepta dos digitos');
                                              </script>";
                                      } else
                                      if($_GET['reg']==4){
                                          echo "<script>
                                              alert ('El autobus no se registro por que no se selecciono un Tipo');
                                              </script>";
                                      }
                                  } else
                                      //Muestra los resultados arrojados de la opcion modificar producto
                                  if(isset($_GET['mod'])){
                                      if($_GET['mod']=="1"){
                                           echo "<script>
                                              alert ('El autobus fue modificado correctamente');
                                              </script>";
                                      } else
                                      if($_GET['mod']=="a"){
                                          echo "<script>
                                              alert ('No modifico ningun campo del autobus seleccionado');
                                              </script>";
                                      } else
                                      if($_GET['mod']==0){
                                          echo "<script>
                                              alert ('No ha seleccionado ningun autobus para actualizar');
                                              </script>";
                                      }
                                  } else
                                  //Muestra los resultados arrojados de la opcion buscar Autobus
                                  if(isset($_GET['auto'])){
                                      $idAutobusBuscado = $_GET['auto'];

                                      $query = "SELECT capacidad,tipo FROM autobus WHERE idautobus=$idAutobusBuscado";
                                      $resultado = $conexion->query($query);
                                      $res = $conexion->query($query);

                                      if(($res->fetch_assoc())!=null){
                                          $consulta = true;

                                          while($row = $resultado->fetch_assoc())
                                          {
                                              $resCapacidad = $row['capacidad'];
                                              $resTipo = $row['tipo'];
                                          }
                                      } else {
                                          $consulta = false;
                                          echo "<script>
                                              alert ('No se encontro el autobus ".$idAutobusBuscado.".');
                                              </script>";
                                      }
                                  } else
                                  //Mustra los resultados arrojados de la opcion Eliminar Producto
                                  if(isset($_GET['drop'])) {
                                      if ($_GET['drop']==1) {
                                          echo "<script>
                                              alert ('El Autobus fue eliminado correctamente.');
                                              </script>";
                                      } else
                                      if ($_GET['drop']==0) {
                                          echo "<script>
                                              alert ('No ha seleccionado ningun producto para eliminar.');
                                              </script>";
                                      }

                                  }


                                  ?>
                                  <?php

                                  if($consulta){
                                      ?>
                                      CLAVE DEL AUTOBUS BUSCADO:
                                      <input type="text" name="idAutobusActual" value="<?php echo $idAutobusBuscado; ?>" readonly="readonly" class="inputClaveB">
                                      <br><br>
                                      <?php
                                  }
                                  ?>
                                  <hr>
                              </td>
                          </tr>
                          <tr>
                          <td>
                          <br>
                          <p>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CAPACIDAD:&nbsp;&nbsp;&nbsp;
                              <input type="text" name="capacidad" class="inputCapacidad form-control"

                                     <?php
                                          if($consulta) {
                                              echo 'value="'.$resCapacidad.'"';
                                          }
                                      ?>
                                     >
                              </p>
                              <br>
                              <p>
                              TIPO DE SERVICIO:&nbsp;&nbsp;
                              <select name="tipoS" id="tipoS" class="form-control">
                                  <?php
                                      if($consulta){
                                          echo '<option value='.$resTipo.'">'.$resTipo.'</option>';
                                          if($resTipo!="Economico"){
                                              echo '<option value="Economico">Economico</option>';
                                          }
                                          if($resTipo!="Primera"){
                                              echo '<option value="Primera">Primera</option>';
                                          }
                                          if($resTipo!="Lujo"){
                                              echo '<option value="Lujo">Lujo</option>';
                                          }
                                          if($resTipo!="Plus"){
                                              echo '<option value="Plus">Plus</option>';
                                          }
                                          } else {
                                          ?>
                                          <option>Economico</option>
                                          <option>Primera</option>
                                          <option>Lujo</option>
                                          <option>Plus</option>
                                          <?php
                                          }
                                          ?>
                                      </select>
                              </p>
                              <br>
                          </td>
                          </tr>
                          <tr>
                          <td colspan="2">
                              <hr>
                              <br>
                              <p>
                                  <input type="submit" class="btn btn-block btn-success " value="R E G I S T R A R" name="buttonRegistrarAutobus">

                                  <input type="submit" value="A C T U A L I Z A R" class="btn btn-block btn-info" name="buttonModificarAutobus">

                                  <input type="submit" value="E L I M I N A R" class="btn btn-block btn-danger" name="buttonEliminarAutobus">
                              </p><br>
                              </td>
                          </tr>
                      </table>

                      <?php

                      if($consulta) {
                          ?>
                          <input type="hidden" name="capacidadActual" value="<?php echo $resCapacidad; ?>">
                          <input type="hidden" name="tipoSActual" value="<?php echo $resTipo; ?>">
                      <?php
                      }
                      ?>
                  </form>


                  </div>


                </div>
              </div>

          </div>
          <!--Fin del formulario para buscar-->

        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->

  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
