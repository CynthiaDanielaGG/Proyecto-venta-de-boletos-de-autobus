<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Costaline | Ver Chofer </title>
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

              <li><a href="modificarCliente.php"><i class="fa fa-circle-o"></i>Modificar</a></li>
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
            <a href="agregarChofer.php"><i class="fa fa-circle-o"></i>Registrar</a></li>
            <li><a href="modificarChofer.php"><i class="fa fa-circle-o"></i>Modificar</a></li>
            <li><a href="eliminarChofer.php"><i class="fa fa-circle-o"></i>Eliminar</a></li>
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
        <li><a href="verChofer.php"><i class="fa fa-dashboard"></i>Visualizar</a></li>
        <li><a href="verChofer.php"><i class="fa fa-dashboard"></i>CHofer</a></li>
        <li><a href="opcionesAdministrador.php"><i class="fa fa-dashboard"></i>Pagina del Administrador</a></li>

      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
<center>
      <div class="row ">

        <div class="col-lg-12 ">
          <!--inicio del formulario para buscar-->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Choferes Registrados</h3>
            </div>

          </div>
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">DATOS</h3>

              </div>
              <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Numero de registro</th>
                      <th>Nombre</th>
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>
                      <th>Fecha Nacimiento</th>
                      <th>Nombre de Usuario</th>
                      <th>Contraseñia</th>

                    </tr>
                    <?php
                    require_once("conexionbd.php");
                    $conexion = mysqli_connect($host,$user,$pw,$base);
                    if (mysqli_connect_errno()) {
                      echo "Problemas de conexion";
                    }else{
                    $consulta = mysqli_query($conexion,"SELECT idusuario,nombre,apellidoPaterno,apellidoMaterno,fechaNacimiento,nombreUsuario,contrasenia FROM usuario INNER JOIN datospersonales ON idusuario = id_usuario  WHERE tipo='chofer'");

                    while ($linea = mysqli_fetch_array($consulta)){
                    echo "
                      <tr>
                        <td>".$linea['idusuario']."</td><td>".$linea['nombre']."</td><td>".$linea['apellidoPaterno']."</td><td>".$linea['apellidoMaterno']."</td><td>".$linea['fechaNacimiento']."</td><td>".$linea['nombreUsuario']."</td><td>".$linea['contrasenia']."</td>
                      </tr>";
                    }
}
                     ?>
                  </table>
              </div>
            </div>
          </div>

          <!--Fin del formulario para buscar-->


        </div>
      </div></center>
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
