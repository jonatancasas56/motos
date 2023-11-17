<?php
include "includes/sesion.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Panel</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
<body>
    <div class="container">
        <?php include "includes/menu1.php"?>
        <h1 class="mt-4">Mi Panel</h1>
        <?php include "includes/menu2.php"?>
        <hr>
        <h3 class="mt-3">Hola <?php echo $_SESSION["email"] ?> </h3>  
        <form action="api/logout.php" method="post">
            <button type="submit" class="btn" style="background-color: black; color: white;">Cerrar Sesión</button>
        </form>
    </body>
</html>