<?php
session_start();

// Destruir todas las variables de sesión
session_unset();
session_destroy();

// Redirigir al usuario a la página de inicio o a donde desees después de cerrar sesión
header("Location: ../login.php");
exit();
?>