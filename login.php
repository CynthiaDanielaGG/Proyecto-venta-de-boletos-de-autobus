<html>
   <head>
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="estilos.css">
   </head>
   <body background="imagenes/principal.jpg">
      <div id="login">
        <center><h3>INICIO DE SESION</h3></center>
         <form  method="post">
            <label>Usuario: </label>
            <input type="text" name="user"/><br>
            <label>Contraseña: </label>
            <input type="password" name="password"/><br><br>
            <input type="submit" name="entrar" value="Entrar"/><br>
            <center>¿Aun no tienes una cuenta?<br>
            <a href="registro.php">Registrate</a><br><br></center>
            <center><a href="index.html">Regresar</a></center>

         </form>
      </div>
   </body>
</html>
<?php
SESSION_START();
 ?>
<?php
include("conexionbd.php");

if(isset($_SESSION["session_usuario"])){
//// en caso de cerrarse la sesion se manda a la pagina principal
	header("Location: opcionesClientes.php");
}
if(isset($_SESSION["session_admin"])){
//// en caso de cerrarse la sesion se manda a la pagina principal
	header("Location: opcionesAdministrador.php");
}
if(isset($_SESSION["session_chofer"])){
// en caso de cerrarse la sesion se manda a la pagina principal
	header("Location: opcionesChofer.html");
}
if (isset($_POST['entrar'])) {
  $conexion = mysqli_connect($host,$user,$pw,$base);
  if (mysqli_connect_errno()) {
    echo "Problemas de conexion";
  }

  $nombreUsuario=$_POST['user'];
  $contrasenia=$_POST['password'];
  if ($nombreUsuario!="" && $contrasenia!="") {
      //leemos el archivo para verificar si el usuario existe
      $consultaAdmin=mysqli_query($conexion,"SELECT * FROM usuario WHERE nombreUsuario ='".$nombreUsuario."' AND contrasenia = '".$contrasenia."'");
      $fila=mysqli_fetch_row($consultaAdmin);
 if($nombreUsuario=="admin" && $contrasenia="123"){
    $_SESSION['session_admin']=$nombreUsuario;
    header("Location: opcionesAdministrador.php");
}else{
  $consultaCliente = mysqli_query($conexion,"SELECT * FROM usuario WHERE nombreUsuario='".$nombreUsuario."' AND contrasenia='".$contrasenia."' AND tipo='cliente'");
  $row=mysqli_fetch_row($consultaCliente);
  if ($row[1]==$nombreUsuario && $row[2]==$contrasenia) {
    $_SESSION['session_usuario']=$nombreUsuario;
    header("Location: opcionesClientes.php");

    //en caso de no ser admin ni cliente, verificamos que sea chofer
  }else{
    $consultaChofer = mysqli_query("SELECT * FROM usuario WHERE nombreUsuario='".$username."' AND contrasenia='".$password."' AND tipo='chofer'");
    $row = mysqli_fetch_array($consultaChofer);

      if($nombreUsuario == $row[1] && $contrasenia == $row[2]){
        $_SESSION['session_chofer']=$nombreUsuario;
        header("Location: opcionesChofer.html");
      }
    else{
      echo '<script type="text/javascript">
        alert("¡Nombre de usuario o contraseña invalida!");
      </script>';
    }
  }
}
}else{
  echo '<script type="text/javascript">
    alert("¡CAMPOS VACIOS!");
  </script>';
}
}

 ?>
