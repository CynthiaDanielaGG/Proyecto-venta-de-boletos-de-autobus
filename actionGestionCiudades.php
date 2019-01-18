<?php

	include('conexion.php');

	$patternNombre = "/^(([a-zA-ZñÑ]){1,2}(\s?[a-zA-ZñÑ]+)+)$/";

	if (isset($_POST['buttonBuscarCiudad'])) {
		$idBuscar = $_POST['id_ciudad_buscar'];
		header('Location: agregarCiudades.php?c='.$idBuscar);

	} else
	if (isset($_POST['buttonRegistrarCiudad'])) {


		$nombreCiudad = $_POST['nombre_ciudad'];


		if ((preg_match($patternNombre, $nombreCiudad))) {

		if (strlen($nombreCiudad) <= 45) {

			$query = "INSERT INTO ciudad(idciudad,nombreCiudad) VALUES('0','$nombreCiudad')";
			$resultado = $conexion->query($query);

			if ($resultado) {
                header('Location: agregarCiudades.php?reg=1');

			} else {
			}
		} else { //Else cuando el total de caracteres del nombre es mayor de 45
			header('Location: agregarCiudades.php?reg=3');
			}
		} else { //Else cuando el nombre no cumple con el patron solicitado
            header('Location: agregarCiudades.php?reg=2');
		}
	} else
	if (isset($_POST['buttonModificarCiudad'])) {
		if (isset($_POST['idCiudadActual'])) {

			$nombreCiudad = $_POST['nombre_ciudad'];

			$idCiudadActual = $_POST['idCiudadActual'];

			$registrosMoificados = "a";

            if ((preg_match($patternNombre, $nombreCiudad))) {

                $queryNombre = "UPDATE ciudad SET nombreCiudad = '$nombreCiudad' WHERE idciudad = '$idCiudadActual'";
                $resultadoNombre = $conexion->query($queryNombre);
                $registrosMoificados = "1";
            }

			header('Location: agregarCiudades.php?mod='.$registrosMoificados);

		} else {
			header('Location: agregarCiudades.php?mod=0');
		}
	} else
	if (isset($_POST['buttonEliminarCiudad'])) {
		if (isset($_POST['idCiudadActual'])) {
			$idCiudadActual = $_POST['idCiudadActual'];

			$query = "DELETE FROM ciudad WHERE idciudad='$idCiudadActual'";
			$resultado = $conexion->query($query);

			if ($resultado) {
				header('Location: agregarCiudades.php?drop=1');
			} else {

			}
		} else {
			header('Location: agregarCiudades.php?drop=0');
		}
	}


?>
