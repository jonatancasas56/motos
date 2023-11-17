<?php
session_start();
include "../includes/conexion.php";

$moto_seleccionada = $_POST['moto'];
$mail = $_SESSION["email"];

$query = "INSERT INTO reservas (moto, mail) VALUES ('$moto_seleccionada', '$mail')";

if (mysqli_query($conexion, $query)) {
    echo "Moto reservada correctamente.";
} else {
    echo "Error al reservar moto: " . mysqli_error($conexion);
}

mysqli_close($conexion);

?>