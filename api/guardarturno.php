<?php
session_start();
include "../includes/conexion.php";

$fecha = $_POST["fecha"];
$mail = $_SESSION["email"];

// Convertir el formato de fecha
$fechaObj = DateTime::createFromFormat('d/m/Y', $fecha);
$fechaFormateada = $fechaObj->format('Y-m-d');

$query = "INSERT INTO turnos (fecha, mail) VALUES ('$fechaFormateada', '$mail')";

if (mysqli_query($conexion, $query)) {
    echo "Turno pedido correctamente.";
} else {
    echo "Error al pedir el turno: " . mysqli_error($conexion);
}

mysqli_close($conexion);

?>