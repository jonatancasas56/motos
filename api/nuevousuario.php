<?php

session_start();
$conexion = mysqli_connect("localhost", "root", "", "base");

if(isset($_POST["email"]) && isset($_POST["password"])) {
    // Obtener valores
    $email = mysqli_real_escape_string($conexion, $_POST["email"]);
    $password = mysqli_real_escape_string($conexion, $_POST["password"]);

    // Preparar la consulta
    $sql = "INSERT INTO usuarios (email, password) VALUES ('$email', '$password')";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $sql)) {
        header("Location: ../login.php");
    } else {
        echo "Error al agregar el usuario: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
} else {
    echo "No se han proporcionado datos válidos.";
}




?>