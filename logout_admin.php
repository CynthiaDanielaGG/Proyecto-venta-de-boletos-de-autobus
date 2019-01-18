<?php
//Este archivo lo utilizo para cerrar la sesion del administrador
session_start();
unset($_SESSION['session_admin']);
session_destroy();
header("location:index.html");
?>
