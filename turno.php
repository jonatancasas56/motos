<?php 
include "includes/sesion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Turno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
<body>
    <div class="container">
        <?php include "includes/menu1.php"?>
        <h1 class="mt-4">Mi Panel / Turno</h1>
        <?php include "includes/menu2.php"?>

        <div class="row">
            <div class="col-6 mt-2 rounded-5 border border-light">
                <div class="container mt-3">
                    <h2>Pedir un turno:</h2>
                    <div class="d-flex align-items-center">
                        <input type="text" id="datepicker" class="form-control mr-2">
                    </div>
                </div>
                <div class="d-flex px-3">
                    <div onclick="pedir_turno()" class="btn mt-3 mb-3" style="width: 20%; background-color: black; color: white">Pedir</div>
                </div>

            
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>




                <script>
                    $(document).ready(function() {
                        $('#datepicker').datepicker({
                            format: 'dd/mm/yyyy', // Establecer formato de fecha
                            autoclose: true // Cierra el datepicker cuando selecciono una fecha
                        });
                    });

                    function pedir_turno() {
                        var fechaSeleccionada = $('#datepicker').val(); // Obtener fecha seleccionada
                        $.ajax({
                            url: 'api/guardarturno.php',
                            data: { fecha: fechaSeleccionada },
                            type: 'post',
                            success: function(response) {
                                alert('Turno pedido correctamente.');
                            },
                            error: function(xhr, status, error) {
                                alert('Error al pedir el turno.');
                            }
                        });
                    }
                </script>

            </div>
        </div>

    </div>
</body>
</html>