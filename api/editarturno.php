<?php
session_start();
include "../includes/conexion.php";

$id_turno = $_POST["id_turno"];
$mail = $_POST["usuario"];
$fecha = $_POST["fecha"];

// Convertir el formato de fecha
$fechaObj = DateTime::createFromFormat('d/m/Y', $fecha);
$fechaFormateada = $fechaObj->format('Y-m-d');


$query = "UPDATE `turnos` SET ";
$query .= " `mail` = '$mail', "; 
$query .= " `fecha` = '$fechaFormateada' ";
$query .= " WHERE `id_turno` = $id_turno";


if (mysqli_query($conexion, $query)) {
    echo "Turno editado correctamente.";
} else {
    echo "Error al editar turno: " . mysqli_error($conexion);
}


header("Location: ../verturnos.php");
?>