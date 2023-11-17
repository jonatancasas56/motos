<?php 
include "includes/sesion.php";
include "includes/conexion.php";
include "includes/sesionadministrador.php";
$query = "SELECT * FROM reservas";
$lista = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ver Reservas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
<body>
    <div class="container">
        <?php include "includes/menu1.php"?>
        <h1 class="mt-4">Mi Panel / Ver reservas</h1>
        <?php include "includes/menu2.php"?>
        <div class="row">
            <h1>Reservas:</h1>
            <table>
                <thead>
                    <tr>
                        <th>Email del cliente:</th>
                        <th>Moto reservada:</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($fila = mysqli_fetch_array($lista)){ ?>
                        <tr>
                            <td><?php echo $fila["mail"] ?></td>
                            <td><?php if ($fila["moto"] == 1) {
                                echo "Gilera Smash 110cc.";
                            } elseif ($fila["moto"] == 2) {
                                echo "Motomel Blitz 110cc.";
                            } elseif ($fila["moto"] == 3) {
                                echo "Honda Wave 110cc.";
                            } elseif ($fila["moto"] == 4) {
                                echo "Honda Twister 250cc.";
                            } elseif ($fila["moto"] == 5) {
                                echo "Honda Tornado 250cc.";
                            } elseif ($fila["moto"] == 6) {
                                echo "Yamaha Xtz 125cc.";
                            } ?></td>
                            <td>
                                <form action="api/eliminarreserva.php" method="post">
                                    <input type="hidden" name="id_reserva" value="<?php echo $fila['id_reserva']; ?>">
                                    <button class="btn" style="background-color: black; color: white" type="submit">Eliminar</button>
                                </form>
                            </td>
                            <td>
                                <form action="editarreserva.php" method="post">
                                    <input type="hidden" name="id_reserva" value="<?php echo $fila['id_reserva']; ?>">
                                    <button class="btn" style="background-color: black; color: white" type="submit">Editar</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>