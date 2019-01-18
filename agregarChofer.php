<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Costaline | Agregar Chofer </title>
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
            <li><a href="modificarChofer.php"><i class="fa fa-circle-o"></i>Modificar</a></li>
            <li><a href="eliminarChofer.phph"><i class="fa fa-circle-o"></i>Eliminar</a></li>
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
        <li><a href="agregarChofer.php"><i class="fa fa-dashboard"></i>Agregar</a></li>
        <li><a href="agregarChofer.php"><i class="fa fa-dashboard"></i>Chofer</a></li>
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
              <h3 class="box-title">Introduzca los datos del chofer</h3>
            </div>
            <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" name="nombre">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellidoP">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Apellido Materno</label>
                    <input type="text" class="form-control" name="apellidoM">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" name="fechaNac">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de usuario:</label>
                    <input type="text" class="form-control" name="user">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Contraseña</label>
                    <input type="text" class="form-control" name="password">
                  </div>
                  <div class="box-footer">
                    <button type="submit" name="registrar" class="btn btn-primary pull-right">Agregar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <!--Fin del formulario para buscar-->
          <?php
          include("conexionbd.php");

          if (isset( $_POST['registrar'])){

            //leemos los registros de una base de datos
            $conexion = mysqli_connect($host,$user,$pw,$base);
            if (mysqli_connect_errno()) {
              echo "Problemas de conexion";
            }

            $nombre = $_POST['nombre'];
            $apellidoP = $_POST['apellidoP'];
            $apellidoM = $_POST['apellidoM'];
            $fecha = date('Y-m-d', strtotime($_POST['fechaNac']));
            $usuario = $_POST['user'];
            $contrasenia = $_POST['password'];
            //
            
          //condicion
          if($nombre !="" && $apellidoP !="" && $apellidoM !=""
          && $usuario !="" && $contrasenia !=""){
            //Escribimos en la base de datos
            $conexion = mysqli_connect($host,$user,$pw,$base);
            if (mysqli_connect_errno()) {
              echo "Problemas al insertar los datos";
            }else{
              $query=mysqli_query($conexion,"SELECT * FROM usuario WHERE nombreUsuario ='".$usuario."'");
              $numrows=mysqli_num_rows($query);
              if($numrows==0){
                //nuevo ID
                $id_cliente = mysqli_query($conexion,"SELECT max(idusuario) + 1 from usuario");
                $nuevo_id = mysqli_fetch_array($id_cliente);

                $sql1="INSERT INTO usuario(nombreUsuario,contrasenia,tipo) VALUES ('".$usuario."','".$contrasenia."','chofer')";
                $sql2="INSERT INTO datospersonales(nombre,apellidoPaterno,apellidoMaterno,fechaNacimiento,id_usuario) VALUES ('".$nombre."','".$apellidoP."','".$apellidoM."','".$fecha."',".$nuevo_id[0].")";
                $sql3="INSERT INTO tarjeta(numeroTarjeta,id_cliente,deuda) VALUES ('0000000000000000',".$nuevo_id[0].",0)";
              $result1=mysqli_query($conexion,$sql1);
              $result2=mysqli_query($conexion,$sql2);
              $result3=mysqli_query($conexion,$sql3);

              if ($result1 && $result2 && $result3) {
                echo '<script type="text/javascript">
                  alert("¡REGISTRO EXITOSO!");
                </script>';
              }
            }else {
              echo '<script type="text/javascript">
                alert("¡ESTE USUARIO YA EXISTE!");
              </script>';
            }
            }


          }else{
            //mensaje de Error
          echo '<script type="text/javascript">
            alert("¡ERROR! Existen campos vacios!!");
          </script>';

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
