<?php
session_start();

if(isset($_SESSION["email"])) {
    header("Location: panel.php");
    exit(); 
}
?>

<!DOCTYPE html>
<head>
    <title>Entrar</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
<body>
    <div class="container justify-content-center">
        <?php include "includes/menu1.php"?>

        <div class="row mt-2 rounded-5 border border-light" style="width: 400px;">
            <h1 class="mt-3">Ingresar</h1>
            <div class=>
                <div class="input-group mt-3">
                    <div class="input-group-text" style="background-color: gray;">
                        <img src="assets/username-icon.svg" alt="username-icon" style="height: 1rem"/>
                    </div>
                    <input id="email" class="form-control bg-light" type="text" placeholder="Ingrese su mail">             
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-text" style="background-color: gray;">
                        <img src="assets/password-icon.svg" alt="password-icon" style="height: 1rem"/>
                    </div>
                    <input id="password" class="form-control bg-light" type="password" placeholder="Ingrese su password">             
                </div>
                <div>
                <div onclick="enviar_login()" class="btn mt-3" style="width: 30%; background-color: black; color: white">Entrar</div>
                </div>
                <div>
                    <div class="d-flex gap-2 mt-3 mb-2">
                        <div>¿No tenés cuenta?</div>
                        <a href="registro.php" class="text-decoration-none fw-semibold" style="color: black;">Registrarse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>

    function enviar_login() {
        var email = $("#email").val();
        var password = $("#password").val();
        if (email == "") {
            alert("Por favor ingrese un email");
            return;
        }
        if (password == "") {
            alert("Por favor ingrese un password")
            return;
        }
        $.ajax({
            "url":"api/login.php",
            "datatype":"json",
            "type":"post",
            "data":{
                "email":email,
                "password":password,
            },
                "success": function(resultado) {
                    if (resultado.error == 0) {
                        location.href = "panel.php";
                    } else {
                        alert ("Usuario o contraseñas incorrectos");             
                    }
            }
        })
    }
</script>

</html>