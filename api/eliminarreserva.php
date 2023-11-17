<?php
$conexion = mysqli_connect("localhost", "root", "", "base");
$id = $_POST["id_reserva"];



$sql = "DELETE FROM reservas WHERE id_reserva = $id";
mysqli_query($conexion, $sql);

header("Location: ../verreservas.php");
?>