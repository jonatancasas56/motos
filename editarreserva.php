<?php 
include "includes/sesion.php";
include "includes/sesionadministrador.php";
include "includes/conexion.php";
$id_reserva = $_POST["id_reserva"];
$sql = "SELECT * FROM reservas WHERE id_reserva = $id_reserva";
$query = mysqli_query($conexion, $sql);
//te fijas si existe el id_reserva
if (mysqli_num_rows($query) == 0) {
    header("Location: verreservas.php");
}
$reserva = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Editar reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
<body>
    <div class="container">
        <?php include "includes/menu1.php"?>
        <h1 class="mt-4">Mi Panel / Editar reserva</h1>
        <?php include "includes/menu2.php"?>
        <div class="row">
            <input type="hidden" id="id_reserva" value="<?php echo $reserva["id_reserva"]?>"/>
            </div>
            <div class="col-6 mt-2 px-4 rounded-5 border border-light">
                <div class="formulario">
                    <h4 class="mt-3">Editar usuario:</h4>
                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Editar Usuario" value="<?php echo $reserva["mail"]?>">
                </div>
                <select id="moto_seleccionada" class="form-select form-select-lg mb-1 mt-4" aria-label="Large select example" style="width: 335px;" value="<?php echo $reserva["moto"]?>">
                    <option selected>Editar moto reservada</option>
                    <option value="1">Gilera Smash 110cc.</option>
                    <option value="2">Motomel Blitz 110cc.</option>
                    <option value="3">Honda Wave 110cc.</option>
                    <option value="4">Honda Twister 250cc.</option>
                    <option value="5">Honda Tornado 250cc.</option>
                    <option value="6">Yamaha Xtz 125cc.</option>
                </select>
                <div onclick="editar_reserva()" class="btn mt-3 mb-3" style="width: 20%; background-color: black; color: white">Editar</div>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    function editar_reserva() {
                        var moto_seleccionada = $('#moto_seleccionada').val();
                        var id = $('#id_reserva').val();
                        var usuario = $('#usuario').val();
                        //obtener valores

                        $.ajax({
                            url: 'api/editarreserva.php',
                            data: { id_reserva: id,
                                    moto: moto_seleccionada,
                                    usuario: usuario,   
                            },
                            type: 'post',
                            success: function(response) {
                                alert('Reserva editada correctamente.');
                            },
                            error: function(xhr, status, error) {
                                alert('Error al editar la reserva.');
                            }
                        });
                    }
                </script>
            </div>
        </div>
    </div>
</body>
</html>