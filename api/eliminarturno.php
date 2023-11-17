<?php
$conexion = mysqli_connect("localhost", "root", "", "base");
$id = $_POST["id_turno"];



$sql = "DELETE FROM turnos WHERE id_turno = $id";
mysqli_query($conexion, $sql);

header("Location: ../verturnos.php");
?>