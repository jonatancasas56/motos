<?php
session_start();

if(isset($_SESSION["email"])) {
    header("Location: panel.php");
    exit(); 
}
?>

<!DOCTYPE html>
<head>
    <title>Nuevo Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
<body>
    <div class="container justify-content-center">
        <?php include "includes/menu1.php"?>

        <div class="row mt-2 rounded-5 border border-light" style="width: 400px;">
            <h1 class="mt-3">Crear Usuario</h1>
            <form action="api/nuevousuario.php" method="POST">
                <div class="input-group mt-3">
                    <div class="input-group-text" style="background-color: gray;">
                        <img src="assets/username-icon.svg" alt="username-icon" style="height: 1rem"/>
                    </div>
                    <input id="email" name="email" class="form-control bg-light" type="text" placeholder="Ingrese su mail">             
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-text" style="background-color: gray;">
                        <img src="assets/password-icon.svg" alt="password-icon" style="height: 1rem"/>
                    </div>
                    <input id="password" name="password" class="form-control bg-light" type="password" placeholder="Ingrese su password">             
                </div>
                <div>
                <button class="btn mb-3 mt-3" style="width: 30%; background-color: black; color: white">Crear</button>
                </div>
            </form>
        </div>
    </div>
</body>



</html>