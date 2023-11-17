<?php 
include "includes/sesion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
<body>
    <div class="container">
        <?php include "includes/menu1.php"?>
        <h1 class="mt-4">Mi Panel / Reserva</h1>
        <?php include "includes/menu2.php"?>
        <div class="row">
            <div class="col-6 mt-2 px-4 rounded-5 border border-light">
                <select id="moto_seleccionada" class="form-select form-select-lg mb-1 mt-4" aria-label="Large select example" style="width: 335px;">
                    <option selected>Reservar moto</option>
                    <option value="1">Gilera Smash 110cc.</option>
                    <option value="2">Motomel Blitz 110cc.</option>
                    <option value="3">Honda Wave 110cc.</option>
                    <option value="4">Honda Twister 250cc.</option>
                    <option value="5">Honda Tornado 250cc.</option>
                    <option value="6">Yamaha Xtz 125cc.</option>
                </select>
                <div onclick="reservar_moto()" class="btn mt-3 mb-3" style="width: 20%; background-color: black; color: white">Reservar</div>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    function reservar_moto() {
                        var moto_seleccionada = $('#moto_seleccionada').val(); // Obtener el valor seleccionado del select

                        $.ajax({
                            url: 'api/reservarmoto.php',
                            data: { moto: moto_seleccionada },
                            type: 'post',
                            success: function(response) {
                                alert('Moto reservada correctamente.');
                            },
                            error: function(xhr, status, error) {
                                alert('Error al reservar la moto.');
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</body>
</html>