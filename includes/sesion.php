<?php 
session_start();

//Si no existe sesion
if (!isset($_SESSION["email"])) {
    header("Location: ./login.php");
    // Lo mando al login
}

?>