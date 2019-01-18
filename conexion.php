<?php
	$conexion = new mysqli("localhost", "cynthia", "123", "terminal");

	if (!$conexion) {
		echo "alert('Error en la conexion con la base de datos');";
	}

	const HOST = 'localhost';
	const USER = 'cynthia';
	const PASS = '123';
	const DBSA = 'terminal';

	//CONEXIÓN
	@$conexao_db = mysqli_connect(HOST,USER,PASS,DBSA);
	@$con = $conexao_db;

	if($conexao_db):
		//echo 'Conexion exitosa';
	else:
		echo 'No conectado: '.mysqli_connect_error();
	endif;

?>
