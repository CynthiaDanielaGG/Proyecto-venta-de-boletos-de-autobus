<?php
include('conexion.php');

$patternClave ="/^([\d]){4}$/";
$patternCapacidad="/^([\d]){2}$/";
$patternTipo="/^(([a-zA-ZñÑ]+|\s)+)$/";
$consulta = false;


if (isset($_POST['buttonBuscarAutobus'])) {
    $idBuscar = $_POST['clave'];
    header('Location: agregarAutobus.php?auto='.$idBuscar);
} else
if(isset($_POST['buttonRegistrarAutobus'])){

        $clave = $_POST['clave'];
        $capacidad = $_POST['capacidad'];
        $tipo = $_POST['tipoS'];

        if((preg_match($patternClave,$clave))) {

        if((preg_match($patternCapacidad,$capacidad))){

        if((preg_match($patternTipo,$tipo))){

            $query = "INSERT INTO autobus(idautobus,capacidad,tipo) VALUES ('$clave','$capacidad','$tipo')";
            $resultado = $conexion->query($query);

            $consultaId = "SELECT idautobus FROM autobus";
			$resultadoId = $conexion->query($consultaId);
			while ($row = $resultadoId->fetch_assoc()) {
	            $idNuevoAutobus = $row['idautobus'];
           }

            if($resultado){
                header('Location: agregarAutobus.php?reg=1');
            }

        } else {
              header('Location: agregarAutobus.php?reg=2');
            }

        } else {
              header('Location: agregarAutobus.php?reg=3');
            }
        } else {
            header('Location: agregarAutobus.php?reg=4');
           }
} else
if(isset($_POST['buttonModificarAutobus'])) {
    if(($_POST['idAutobusActual'])){
        $capacidad = $_POST['capacidad'];
        $tipo = $_POST['tipoS'];

        $idAutobusActual = $_POST['idAutobusActual'];
        $capacidadActual = $_POST['capacidadActual'];
        $tipoActual = $_POST['tipoSActual'];

        	$registrosModificados = "a";

        if($capacidadActual != $capacidad){
            $queryCapacidad = "UPDATE autobus SET capacidad='$capacidad' WHERE idautobus ='$idAutobusActual'";
            $resultadoCapacidad = $conexion->query($queryCapacidad);
            $registrosModificados = "1";
        }

        if($tipoActual != $tipo){
            $queryTipo = "UPDATE autobus SET tipo='$tipo' WHERE idautobus ='$idAutobusActual'";
            $resultadoTipo = $conexion->query($queryTipo);
            $registrosModificados = "1";
        }

        header('Location: agregarAutobus.php?mod='.$registrosModificados);

		} else {
			header('Location: agregarAutobus.php?mod=0');
		}
} else
if(isset($_POST['buttonEliminarAutobus'])){
    if(isset($_POST['idAutobusActual'])) {
        $idAutobusActual = $_POST['idAutobusActual'];

        $query = "DELETE FROM autobus WHERE idautobus='$idAutobusActual'";
        $resultado = $conexion->query($query);

        if($resultado){
            header('Location: agregarAutobus.php?drop=1');
        } else {
            echo 'No se entontro';
        }
    } else {
        header('Location: agregarAutobus.php?drop=0');
    }
}


?>
