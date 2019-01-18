<html>
   <head>
      <title>REGISTRO</title>
      <link rel="stylesheet" type="text/css" href="estilos.css">
   </head>
   <body background="imagenes/playa3.jpg">
      <div id="login">
      <center><h3>REGISTRO</h3></center>
         <form method="post">
           <label>Nombre:</label>
           <input type="text" name="nombre"><br>
           <label>Apellido Paterno:</label>
           <input type="text" name="apellidoP"><br>
           <label>Apellido Materno:</label>
           <input type="text" name="apellidoM"><br>
           <label>Fecha nacimiento:</label>
           <input type="date" name="fechaNac"><br>
            <label>Usuario: </label>
            <input type="text" name="user"/><br>
            <label>Contraseña: </label>
            <input type="password" name="password"/><br>
            <label>Numero de tarjeta: </label>
            <input type="text" name="numtarjeta" placeholder="introduce 8 digitos"/><br>
            <input type="submit" name="registrar" value="Registrar"/><br>
            <center>  ¿Ya tienes una cuenta?<br>
            <a href="login.php">Inicia sesion</a></center>

         </form>
      </div>
   </body>
</html>

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
  $numeroTarjeta=$_POST['numtarjeta'];

  //
  echo '<script type="text/javascript">
    alert("'.$nombre.','.$apellidoP.','.$apellidoM.','.$fecha.','.$usuario.','.$contrasenia.','.$numeroTarjeta.'");
  </script>';
//condicion
if($nombre !="" && $apellidoP !="" && $apellidoM !=""
&& $usuario !="" && $contrasenia !="" && $numeroTarjeta!=""){
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

      $sql1="INSERT INTO usuario(nombreUsuario,contrasenia,tipo) VALUES ('".$usuario."','".$contrasenia."','cliente')";
      $sql2="INSERT INTO datospersonales(nombre,apellidoPaterno,apellidoMaterno,fechaNacimiento,id_usuario) VALUES ('".$nombre."','".$apellidoP."','".$apellidoM."','".$fecha."',".$nuevo_id[0].")";
      $sql3="INSERT INTO tarjeta(numeroTarjeta,id_cliente,deuda) VALUES (".$numeroTarjeta.",".$nuevo_id[0].",0)";
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
