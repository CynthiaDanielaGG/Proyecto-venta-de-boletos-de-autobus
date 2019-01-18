<?php

    include('conexion.php');

    $patternOrigen = "/^(([a-zA-ZñÑ]){0,25}$/";

if(isset($_POST['buttonRegistrarCorrida'])) {
     $origen = $_POST['origen'];
     $destino = $_POST['destino'];
     $horaSalida = $_POST['horaSalida'];
    //$horaSalida = time();
    $hora_Llegada = $_POST['horaLlegada'];
    $costo=$_POST['costo'];
    //$horaLLegada = time();
     $fecha = $_POST['fecha'];
     $idAutobus = $_POST['idAutobus'];
     $idChofer = $_POST['idChofer'];

    if(strlen($origen) <= 45) {

            $query = "INSERT INTO corrida(id_origen,id_destino,hora_salida,hora_llegada,costo,fecha_salida,id_autobus,id_chofer) VALUES(".$origen.",".$destino.",'".$horaSalida."','".$hora_Llegada."',".$costo.",'".$fecha."',".$idAutobus.",".$idChofer.")";
            $resultado = $conexion->query($query);

			if ($resultado) {
                header('Location: agregarCorridas.php?reg=1');

			} else {
			header('Location: agregarCorridas.php?reg=2');
			}

        } else {
			header('Location: agregarCorridas.php?reg=3');
    }
    }
?>
