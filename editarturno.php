<?php 
include "includes/sesion.php";
include "includes/sesionadministrador.php";
include "includes/conexion.php";
$id_turno = $_POST["id_turno"];
$sql = "SELECT * FROM turnos WHERE id_turno = $id_turno";
$query = mysqli_query($conexion, $sql);
//te fijas si existe el id_reserva
if (mysqli_num_rows($query) == 0) {
    header("Location: verturnos.php");
}
$turno = mysqli_fetch_array($query);


?>
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editar turno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
<body>
    <div class="container">
        <?php include "includes/menu1.php"?>
        <h1 class="mt-4">Mi Panel / Editar turno</h1>
        <?php include "includes/menu2.php"?>

        <div class="row">
            <input type="hidden" id="id_turno" value="<?php echo $turno["id_turno"]?>"/>
            <div class="col-6 mt-2 rounded-5 border border-light">
                <div class="container mt-3">
                    <h4>Editar usuario:</h4>
                    <div class="formulario">
                        <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Editar Usuario" value="<?php echo $turno["mail"]?>"/>
                    </div>
                    <h4 class="mt-3">Editar turno:</h4>
                    <div class="d-flex align-items-center">
                        <input type="text" id="datepicker" class="form-control mr-2">
                    </div>
                </div>
                <div class="d-flex px-3">
                    <div onclick="editar_turno()" class="btn mt-3 mb-3" style="width: 20%; background-color: black; color: white">Editar</div>
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

                    function editar_turno() {
                        var fechaSeleccionada = $('#datepicker').val(); // Obtener fecha seleccionada
                        var id = $('#id_turno').val();
                        var usuario = $('#usuario').val();
                        //obtener valores
                        $.ajax({
                            url: 'api/editarturno.php',
                            data: { 
                                id_turno: id,
                                usuario: usuario,
                                fecha: fechaSeleccionada,
                            },
                            type: 'post',
                            success: function(response) {
                                alert('Turno editado correctamente.');
                            },
                            error: function(xhr, status, error) {
                                alert('Error al editar turno.');
                            }
                        });
                    }
                </script>

            </div>
        </div>

    </div>
</body>
</html>