<?php
session_start();
$conexion = mysqli_connect("localhost", "root", "", "base");

$id_reserva = $_POST['id_reserva'];
$moto_seleccionada = $_POST['moto'];
$mail = $_POST['usuario'];



$query = "UPDATE `reservas` SET ";
$query .= " `moto` = '$moto_seleccionada', "; 
$query .= " `mail` = '$mail' ";
$query .= " WHERE `id_reserva` = $id_reserva";


if (mysqli_query($conexion, $query)) {
    echo "Reserva editada correctamente.";
} else {
    echo "Error al editar reserva: " . mysqli_error($conexion);
}

mysqli_close($conexion);
header("Location: ../verreservas.php");
?>