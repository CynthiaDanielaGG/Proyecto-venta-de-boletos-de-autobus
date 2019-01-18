<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Costaline | Gestion de Corridas </title>
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
            <li class="active">
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
              <a href="agregarCorridas.php"><i class="fa fa-circle-o"></i>Agregar-Modificar-Eliminar</a></li>

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
        <li><a href="agregarCorridas.php"><i class="fa fa-dashboard"></i>Gestion</a></li>
        <li><a href="agregarCorridas.php"><i class="fa fa-dashboard"></i>Corridas</a></li>
        <li><a href="opcionesAdministrador.php"><i class="fa fa-dashboard"></i>Pagina del Administrador</a></li>

      </ol>
    </section>
    <!--php-->
    <?php

    include('conexion.php');

    $consulta = false;
    $idCoorridaBuscada;
    $arrayIdCiudad;
    $arrayNombreCiudad;
    $arrayIdAutobus;
    $arrayIdChofer;

    //Para extraer el nombre de la ciudad de la tabla ciudad y agregarlas en el select
    $queryCiudad = "SELECT * FROM ciudad";
    $resultadoCiudad = $conexion->query($queryCiudad);
    $resCiudad = $conexion->query($queryCiudad);

    if (($resCiudad->fetch_assoc())!=null) {
        $datosCiudades = true;
        $arrayContadorCiudad = 0;

        while ($row = $resultadoCiudad->fetch_assoc()) {
            $arrayIdCiudades[$arrayContadorCiudad] = $row['idciudad'];
            $arrayNombreCiudades[$arrayContadorCiudad] = $row['nombreCiudad'];
            $arrayContadorCiudad++;
        }
    }
    //Para extraer los id de los autobuses de la tabla autobus y agregarlas al select
    $queryAutobus = "SELECT * FROM autobus";
    $resultadoAutobus = $conexion->query($queryAutobus);
    $resAutobus = $conexion->query($queryAutobus);

    if (($resAutobus->fetch_assoc())!=null) {
        $datosAutobuses = true;
        $arrayContadorAutobus = 0;

        while ($row = $resultadoAutobus->fetch_assoc()) {
            $arrayIdAutobus[$arrayContadorAutobus] = $row['idautobus'];
            $arrayContadorAutobus++;
        }
    }

    //Para extraer los id de los choferes de la tabla chofer y agregarlas al select
    $queryChofer = "SELECT * FROM usuario WHERE tipo='chofer'";
    $resultadoChofer = $conexion->query($queryChofer);
    $resChofer = $conexion->query($queryChofer);

    if (($resChofer->fetch_assoc())!=null) {
        $datosChoferes = true;
        $arrayContadorChofer = 0;

        while ($row = $resultadoChofer->fetch_assoc()) {
            $arrayIdChofer[$arrayContadorChofer] = $row['idusuario'];
            $arrayContadorChofer++;
        }
    }


    if (isset($_GET['ei'])) {
        $idCorridaBuscada = true;
    } else
    if (isset($_GET['en'])) {
        $idCorridaBuscada = true;
    } else
    //Muestra los resultados arrojados de la opcion Registrar Ciudad
    if (isset($_GET['reg'])) {
        if ($_GET['reg']==1) {
            echo "<script>
                alert ('La Corrida fue registrada correctamente.');
                </script>";
        } else
        if ($_GET['reg']==2) {
            echo "<script>
                alert ('La corrida no se registro :C');
                </script>";
        } else
        if ($_GET['reg']==3) {
            echo "<script>
                alert ('El nombre de la ciudad de origen no cumple con los parametros requeridos.');
                </script>";
        }
    }
    ?>
    <!--fin de php-->

    <!-- Main content -->

    <section class="content">

      <div class="row ">

        <div class="col-lg-6 ">
          <!--inicio del formulario para buscar-->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos de las corridas</h3>
            </div>

              <div class="box-body">
                <div class="form-group">
                  <form action="actionGestionCorrida.php" method="post" role="form">
                      <table class="tableFondo3" width="500" height="300" border="0">
                          <tr>
                          <td colspan="2">
                              <p>
                                  CLAVE DE LA CORRIDA:
                                  &nbsp;&nbsp;
                                  <input type="text" class="form-control" name="id_corrida_buscar">
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <input type="submit" class="btn btn-info" name="buttonBuscarCorrida" value="B U S C A R">
                              </p>
                              <br>
                              <?php

                              if ($consulta) {
                                  ?>
                                  Id de la corrida buscada:
                                  <input type="text" class="form-control" name="idCorridaActual" value="<?php echo $idCorridaBuscada; ?>" readonly="readonly">
                                  <br>
                                  <?php
                              }

                              ?>
                              <hr>

                          </td>
                          </tr>
                          <tr>
                          <td width="360">

                              <br>
                              <p>
                                  ORIGEN:
                               <?php
                              if ($datosCiudades) {
                                  echo '<select name="origen">';
                                  for ($iCiudad = 0; $iCiudad < count($arrayIdCiudades); $iCiudad++) {
                                      echo '<option value="'.$arrayIdCiudades[$iCiudad].'">'.$arrayNombreCiudades[$iCiudad].'</option>';
                                  }
                                  echo '</select>';
                              } else {
                                  echo "No hay ciudades registradas";
                              }
                              ?>
                          <br><br>
                          DESTINO:
                           <?php
                          if ($datosCiudades) {
                              echo '<select name="destino">';
                              for ($iCiudad = 0; $iCiudad < count($arrayIdCiudades); $iCiudad++) {
                                  echo '<option value="'.$arrayIdCiudades[$iCiudad].'">'.$arrayNombreCiudades[$iCiudad].'</option>';
                              }
                              echo '</select>';
                          } else {
                              echo "No hay ciudades registradas";
                          }
                          ?>
                                  <br><br>
                                  HORA DE SALIDA :
                                  <input type="time"  name="horaSalida">
                                  <br><br>
                                  HORA DE LLEGADA:
                                  <input type="time" name="horaLlegada">
                                  <br><br>
                                  Costo:
                                  <input type="text" name="costo">
                                  <br><br>
                                  FECHA:
                                  <input type="date"  name="fecha">
                                  <br><br>
                                  CLAVE DEL AUTOBUS:
                                  <?php
                                  if ($datosAutobuses) {
                                      echo '<select name="idAutobus">';
                                      for ($iAutobus = 0; $iAutobus < count($arrayIdAutobus); $iAutobus++) {
                                          echo '<option value="'.$arrayIdAutobus[$iAutobus].'">'.$arrayIdAutobus[$iAutobus].'</option>';
                                      }
                                      echo '</select>';
                                  } else {
                                      echo "No hay ciudades registradas";
                                  }
                                  ?>
                                 <br><br>
                                  CLAVE DEL CHOFER:
                                  <?php
                                  if ($datosChoferes) {
                                      echo '<select name="idChofer">';
                                      for ($iChofer = 0; $iChofer < count($arrayIdChofer); $iChofer++) {
                                          echo '<option value="'.$arrayIdChofer[$iChofer].'">'.$arrayIdChofer[$iChofer].'</option>';
                                      }
                                      echo '</select>';
                                  } else {
                                      echo "No hay choferes registrados";
                                  }
                                  ?>

                              </p>
                              <br>
                          </td>
                          </tr>
                          <tr>
                          <td colspan="2">
                              <hr>

                              <br>
                              <p>
                                  <input type="submit" name="buttonRegistrarCorrida" class="btn btn-success" value="REGISTRAR CORRIDA">
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <input type="submit" name="buttonModificarCorrida" class="btn btn-warning" value="ACTUALIZAR CORRIDA">
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <input type="submit" name="buttonEliminarCorrida" class="btn btn-danger" value="ELIMINAR CORRIDA">
                              </p>
                          </td>
                          </tr>
                          <hr>
                      </table>
                  </form>


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
