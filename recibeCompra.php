
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
               <label>Nombre:</label>
               <input type="text" class="form-control" name="nombreBoleto">
             </div>
             <div class="form-group">
               <label>Tipo:</label>
               <select class="form-control" name="tipo">
                 <option value="Adulto">Adulto</option>
                 <option value="Estudiante">Estudiante</option>
                 <option value="Maestro">Maestro</option>
                 <option value="Tercera">Tercera Edad</option>
               </select>
             </div>
             <div class="">
               <h1>Selecciona tu Asiento</h1>
     					<div align="center">
     						<table>
     							<tr>
     								<h3>Autobus</h3>

     							</tr>

     							<?php require_once("conexionbd.php"); ?>
     							<?php
                  $variable=$_GET['corrida'];
                  $conexion = mysqli_connect($host,$user,$pw,$base);
                  if (mysqli_connect_errno()) {
                    echo "Problemas de conexion";
                  }
                  $consulta="SELECT capacidad FROM autobus INNER JOIN corrida ON idautobus = id_autobus Where idcorrida=".$variable."";
                  $result=mysqli_query($conexion,$consulta);
                  $num=mysqli_fetch_row($result);
     								//Se crea la tabla
     							    	for ($i=1; $i <= $num[0]; $i++) {
     							    		# code...

     							    		echo "<tr>";

     							    		echo "<td>";
     							    		echo "<button id='".$i."' name='boton' value='".$i."'>".$i."</button>";
     							    		$i++;
     							    		echo "<button id='".$i."' name='boton' value='".$i."'>".$i."</button>";
     							    		echo "</td>";
     							    		$i++;
     							    		echo "<td>";
     							    		echo "<button id='".$i."' name='boton' value='".$i."'>".$i."</button>";
     							    		$i++;
     							    		echo "<button id='".$i."' name='boton' value='".$i."'>".$i."</button>";
     							    		echo "</td>";

     							    		echo "</tr>";
     							    	}

     								$result = mysqli_query($conexion,"SELECT numeroAsiento FROM boleto INNER JOIN corrida ON id_corrida = idcorrida WHERE idcorrida=".$variable."");
     								$numrows=mysqli_num_rows($result);
     								if($numrows!=0)
     							    {
     							    	while ($fila = mysqli_fetch_assoc($result)){
     							    		echo "<script>document.getElementById(".$fila['numeroAsiento'].").style.backgroundColor='#F44336' </script>";
     							    		echo "<script>document.getElementById(".$fila['numeroAsiento'].").disabled=true </script>";

             							}

     							    }


     							 ?>

     						</table>
                <?php
                if(isset($_POST["boton"])){

                  $numero_asiento = $_POST['boton'];
              echo '<br><br>No.Asiento:<input type="text" name="numero" size="20" value='.$numero_asiento.' disabled >';
            }
                 ?>
     						<br><br>

     					</div>
             </div>
             <?php
             $variable=$_GET['corrida'];
             $conexion = mysqli_connect($host,$user,$pw,$base);
             if (mysqli_connect_errno()) {
               echo "Problemas de conexion";
             }
      $sql = mysqli_query($conexion,"SELECT * FROM ciudad INNER JOIN corrida
             ON idciudad = id_origen WHERE idcorrida=".$variable."");
             $lineaOrigen = mysqli_fetch_array($sql);


              ?>
             <div class="form-group">
               <label>Origen:</label>
               <input type="text" class="form-control" name="origen" <?php echo "value='".$lineaOrigen['nombreCiudad']."'"; ?> disabled>
             </div>
             <?php
             $sql2 = mysqli_query($conexion,"SELECT * FROM ciudad INNER JOIN corrida
                    ON idciudad = id_destino WHERE idcorrida=".$variable."");
                    $lineaDestino = mysqli_fetch_array($sql2);
              ?>
             <div class="form-group">
               <label>Destino:</label>
               <input type="text" class="form-control" name="destino" <?php echo "value='".$lineaDestino['nombreCiudad']."'"; ?> disabled>
             </div>
             <?php
             $sql3 = mysqli_query($conexion,"SELECT * FROM  corrida WHERE idcorrida=".$variable."");
             $hora = mysqli_fetch_array($sql3);
              ?>
             <div class="form-group">
               <label>Hora Salida:</label>
               <input type="text" class="form-control" name="horaSalida" <?php echo "value='".$hora['hora_salida']."'"; ?> disabled>
             </div>
             <?php
             $sql4 = mysqli_query($conexion,"SELECT * FROM  corrida WHERE idcorrida=".$variable."");
             $costo = mysqli_fetch_array($sql4);
              ?>
             <div class="form-group">
               <label>Costo:</label>
               <input type="text" class="form-control" name="costo" <?php echo "value='".$hora['costo']."'"; ?> disabled>
             </div>
             <div class="form-group">
               <label>¿Llevará Equipaje?</label><br>

               SI<input type="radio"  name="equipaje" value="si" onclick="mostrar()">
               NO<input type="radio" name="equipaje" value="no" onclick="noMostrar()">
             </div>
            <div id="radio">

            </div>
             <script type="text/javascript">
               function mostrar(){
                 html='<div class="form-group"><label>Peso</label><input type="text" class="form-control" name="peso"></div><div class="form-group"><label>Color</label><input type="text" class="form-control" name="color" ></div><div class="form-group"><label>Tamaño</label><br>chico<input type="radio" class="" name="equipaje" value="chico">mediano<input type="radio" class="" name="equipaje" value="mediano">grande<input type="radio" class="" name="equipaje" value="grande"></div>';
                 document.getElementById("radio").innerHTML=html;
               }
               function noMostrar(){
                 html='';
                 document.getElementById("radio").innerHTML=html;
               }
             </script>



             <div class="center-content">
             <input type="submit" name="comprar" value="Comprar" class="btn btn-success">
             </div>
            <!--</div>-->
        </form>
<br>

      </div>
    </div>

    <?php
require_once("conexionbd.php");
$conexion = mysqli_connect($host,$user,$pw,$base);
if (mysqli_connect_errno()) {
  echo "Problemas de conexion";
}else{
  if (isset($_POST['comprar'])) {
    $nombre=$_REQUEST['nombre'];
    $tipo=$_REQUEST['tipo'];
    $numero_asiento = $_POST['boton'];

  }
}
     ?>



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
