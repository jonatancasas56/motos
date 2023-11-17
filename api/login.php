<?php

session_start();

$email = $_POST["email"];
$password = $_POST["password"];

// Creamos una conexion de base de datos

include "../includes/conexion.php";

if (!$conexion) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password' ";

$resultado = mysqli_query($conexion, $sql);

$cantidadRegistros = mysqli_num_rows($resultado);

header('Content-Type: application/json');

if ($cantidadRegistros == 0) {
    // json_encode transforma un array de PHP en un objeto JSON
    echo json_encode(array(
        "error" => 1
    ));   
} else {
    // El usuario se logueo
    $_SESSION["email"] = $email;
    echo json_encode(array(
        "error" => 0
    ));
}


?>