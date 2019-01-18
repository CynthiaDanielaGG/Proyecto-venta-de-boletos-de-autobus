
<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <title>Comprar Boleto</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="apple-touch-icon" href="apple-touch-icon.png">

<link rel="stylesheet" href="fonts/stylesheet.css">
<link rel="stylesheet" href="cssCliente/font-awesome.min.css">

<link rel="stylesheet" href="cssCliente/bootstrap.min.css">
<!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


<!--For Plugins external css-->
<link rel="stylesheet" href="cssCliente/plugins.css" />

<!--Theme custom css -->
<link rel="stylesheet" href="cssCliente/style.css">
<link rel="stylesheet" href="cssCliente/customicon.css">
<link rel="stylesheet" href="cssCliente/linearicons.css">

<!--Theme Responsive css-->
<link rel="stylesheet" href="cssCliente/responsive.css" />

<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>

<header id="header" class="navbar-fixed-top">
    <div class="container">
        <div class="main_menu">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                  <img src="imagenes/inicio.png" alt="">
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="opcionesClientes.php">inicio</a></li>
                            <li><a href="aboutus.html">Cancelar Boleto</a></li>
                            <li><a href="pricing.html">Ver Deuda</a></li>
                            <li><a href="logout_cliente.php" style="background:rgb(181, 42, 6);color:#fff;border-radius:2px;padding:5px 10px;margin-top:10px;">Cerrar Sesion</a></li>

                              </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </div>
    </div>
</header>
<!--Home page style-->

<!-- Google Maps Sections -->
<section id="google_map" class="">
<div class="container-fullwidth">
<div style="width:100%;height:50px;" ></div>
<!---->
<div class="container">


<div class="row">
  <div class="messsage_contant">
    <div class="col-md-7 col-sm-7">
      <div class="single_message_left">
        <form action="" method="post" id="formid">
            <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->

             <div class="form-group">
               <label>ORIGEN:</label>
               <select class="form-control" name="origen">
                 <?php
                 include("conexionbd.php");
                 $conexion = mysqli_connect($host,$user,$pw,$base);
                 if (mysqli_connect_errno()) {
                   echo "Problemas de conexion";
                 }
                 $tabla = mysqli_query($conexion,"SELECT * FROM ciudad");
                 while($depto = mysqli_fetch_array($tabla)) {
                 echo "<option value='".$depto['idciudad']."'>".$depto['nombreCiudad']."</option>";
                 }

                 ?>
               </select>
             </div>
             <div class="form-group">
               <label>DESTINO:</label>
               <select class="form-control" name="destino">
                 <?php
                 include("conexionbd.php");
                 $conexion = mysqli_connect($host,$user,$pw,$base);
                 if (mysqli_connect_errno()) {
                   echo "Problemas de conexion";
                 }
                 $tabla = mysqli_query($conexion,"SELECT * FROM ciudad");
                 while($depto = mysqli_fetch_array($tabla)) {
                 echo "<option value='".$depto['idciudad']."'>".$depto['nombreCiudad']."</option>";
                 }

                 ?>
               </select>
             </div>

              <div class="center-content">
              <input type="submit" name="buscar" value="Buscar" class="btn btn-success">
              </div>

            <!--</div>-->
        </form>
<br>
        <div class=" form-group">

        <table class="table table-condensed">
          <tr>
            <td>Origen</td><td>Destino</td><td>Hora de salida</td><td>Costo</td><td></td>
          </tr>
        <?php
        if (isset($_POST['buscar'])) {
          include("conexionbd.php");
          $conexion = mysqli_connect($host,$user,$pw,$base);
          if (mysqli_connect_errno()) {
            echo "Problemas de conexion";
          }
        $selectOrigen = $_POST['origen'];
        $selectDestino = $_POST['destino'];

        $consulta = mysqli_query($conexion,"SELECT * FROM corrida WHERE id_origen=".$selectOrigen." AND id_destino=".$selectDestino."");
        $linea = mysqli_fetch_array($consulta);
        $numrows=mysqli_num_rows($consulta);

        if ($linea['id_origen'] == $selectOrigen && $linea['id_destino']==$selectDestino) {

        $sql=mysqli_query($conexion,"SELECT nombreCiudad FROM ciudad INNER JOIN corrida ON idciudad = id_origen");
        $sql2=mysqli_query($conexion,"SELECT nombreCiudad FROM ciudad INNER JOIN corrida ON idciudad = id_destino");
        $sql3=mysqli_query($conexion,"SELECT * FROM corrida WHERE id_origen=".$selectOrigen." AND id_destino=".$selectDestino." ");
        $lineaOrigen = mysqli_fetch_array($sql);
        $lineaDestino = mysqli_fetch_array($sql2);
        //$lineaHoraSalida = mysqli_fetch_array($sql3);

        while ($lineaHoraSalida = mysqli_fetch_array($sql3)){
        echo "
          <tr>
            <td>".$lineaOrigen['nombreCiudad']."</td><td>".$lineaDestino['nombreCiudad']."</td><td>".$lineaHoraSalida['hora_salida']."</td><td>$".$lineaHoraSalida['costo'].".00</td><td><a href=recibeCompra.php?corrida=".$lineaHoraSalida['idcorrida'].">Comprar</a></td>
          </tr>";
        }
        }else{

          echo "<script>alert('no se encontraron corridas')";
        }


        }
         ?>
         </table>
         </div>
      </div>
    </div>



  </div> <!-- End of messsage contant-->
</div>
</div>
<!---->
</div>
</section>





<!--Footer-->
<footer id="footer">
    <div class="container">

<!-- End footer bottom -->
    </div>
</footer>


<script src="js/vendor/jquery-1.11.2.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>


</body>
</html>
