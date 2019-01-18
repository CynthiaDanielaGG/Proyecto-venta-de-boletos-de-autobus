<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Costaline | Modificar Chofer </title>
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
            <a href="registraChofer.php"><i class="fa fa-circle-o"></i>Registrar</a></li>
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
            <a href="agregarCorridas.php"><i class="fa fa-circle-o"></i>Registrar-Modificar-Eliminar</a></li>

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
        <li><a href="modificarCliente.php"><i class="fa fa-dashboard"></i>Modificar</a></li>
        <li><a href="modificarCliente.php"><i class="fa fa-dashboard"></i>Chofer</a></li>
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
              <h3 class="box-title">Introduce el "nombre de usuario" del chofer a modificar</h3>
            </div>
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="buscarName">
                        <span class="input-group-btn">
                          <button type="submit" name= "buscar" class="btn btn-info btn-flat">buscar</button>
                        </span>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!--Fin del formulario para buscar-->
          <?php
require_once("conexionbd.php");
if(isset($_REQUEST['buscar'])){
  $searchName =$_REQUEST['buscarName'];
  if ($searchName !="") {
    $conexion = mysqli_connect($host,$user,$pw,$base);
    if (mysqli_connect_errno()) {
      echo "Problemas de conexion";
    }else{
      $consulta=mysqli_query($conexion,"SELECT * FROM usuario where nombreUsuario='".$searchName."' AND tipo='chofer'");
      $row = $consulta->fetch_array(MYSQLI_NUM);
      if ($row[1]==$searchName) {
        $sql1="SELECT * FROM usuario where nombreUsuario='".$searchName."' AND tipo='chofer'";
        $consultaDatos=mysqli_query($conexion,$sql1);
        $row1 = $consultaDatos->fetch_array(MYSQLI_NUM);

        $sql2="SELECT * FROM datospersonales where id_usuario=".$row1[0]."";
        $consultaDatos2=mysqli_query($conexion,$sql2);
        $row2 = $consultaDatos2->fetch_array(MYSQLI_NUM);

        $sql3="SELECT * FROM tarjeta where id_cliente=".$row1[0]."";
        $consultaDatos3=mysqli_query($conexion,$sql3);
        $row3 = $consultaDatos3->fetch_array(MYSQLI_NUM);

        echo '  <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Datos del Cliente</h3>
            </div>
            <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombrephp" value="'.$row2[1].'">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Apellido Paterno</label>
                  <input type="text" class="form-control" id="apellidoPat" name="apellidoPatphp" value="'.$row2[2].'">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Apellido Materno</label>
                  <input type="text" class="form-control" id="apellidoMat" name="apellidoMatphp" value="'.$row2[3].'">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Fecha de nacimiento</label>
                  <input type="text" class="form-control" id="fechaNac" name="fechaNacphp" value="'.$row2[4].'">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre de usuario</label>
                  <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuariophp" value="'.$row[1].'">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Contraseñia</label>
                  <input type="text" class="form-control" id="contrasenia" name="contraseniaphp" value="'.$row[2].'">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Numero de Tarjeta</label>
                  <input type="text" class="form-control" id="numtarjeta" name="numtarjetaphp" value="'.$row3[0].'">
                </div>
                <div class="box-footer">
                  <button type="submit" name="modificar" class="btn btn-primary pull-right">Modificar</button>
                </div>
              </div>
            </form>
          </div>';
      }else{
        echo '<script type="text/javascript">
          alert("¡CHOFER NO EXISTENTE!");
        </script>';
      }
    }

  }else{
    echo '<script type="text/javascript">
      alert("¡CAMPO VACIO!");
    </script>';
  }
//modificar
//si se desea modificar algun dato del cliente
if (isset($_POST['modificar'])) {
  $conexion = mysqli_connect($host,$user,$pw,$base);
  if (mysqli_connect_errno()) {
    echo "Problemas de conexion";
  }else{
  //obtenermos el valor de los input text
$nombreAct = $_REQUEST['nombrephp'];
$apellidoPAct = $_REQUEST['apellidoPatphp'];
$apellidoMAct = $_REQUEST['apellidoMatphp'];
$fechaNAct = $_REQUEST['fechaNacphp'];
$userNameAct = $_REQUEST['nombreUsuariophp'];
$passAct = $_REQUEST['contraseniaphp'];
$numTajertaAct = $_REQUEST['numtarjetaphp'];

$actualizacionUsuario = "UPDATE usuario SET nombreUsuario='".$userNameAct."', contrasenia='".$passAct."' WHERE idusuario=".$row1[0]."";
$actualizacionDatos = "UPDATE datospersonales SET nombre='".$nombreAct."', apellidoPaterno='".$apellidoPAct."', apellidoMaterno='".$apellidoMAct."', fechaNacimiento='".$fechaNAct."' WHERE id_usuario=".$row1[0]."";
$actualizacionTarjeta = "UPDATE tarjeta SET numeroTarjeta=".$numTajertaAct." WHERE id_cliente=".$row1[0]."";

$result1=mysqli_query($conexion,$actualizacionUsuario);
$result2=mysqli_query($conexion,$actualizacionDatos);
$result3=mysqli_query($conexion,$actualizacionTarjeta);
if ($result1 && $result2 && $result3) {
  echo '<script type="text/javascript">
    alert("¡DATOS ACTUALIZADOS EXITOSAMENTE!");
    window.location.href="modificarCliente.php";
  </script>';

}else {
  echo '<script type="text/javascript">
    alert("¡ERROR AL ACTUALIZAR DATOS!");

  </script>';
      }
    }
  }
}
           ?>

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
