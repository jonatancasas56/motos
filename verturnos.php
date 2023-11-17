<?php 
include "includes/sesion.php";
include "includes/conexion.php";
include "includes/sesionadministrador.php";
$query = "SELECT * FROM turnos";
$lista = mysqli_query($conexion, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ver Turnos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
</head>
<body>
    <div class="container">
        <?php include "includes/menu1.php"?>
        <h1 class="mt-4">Mi Panel / Ver turnos</h1>
        <?php include "includes/menu2.php"?>
        <div class="row">
            <h1>Turnos:</h1>
            <table>
                <thead>
                    <tr>
                        <th>Email del cliente:</th>
                        <th>Turno:</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($fila = mysqli_fetch_array($lista)){ ?>
                        <tr>
                            <td><?php echo $fila["mail"] ?></td>
                            <td><?php 
                                $fecha = $fila["fecha"];
                                $fechaFormateada = date('d/m/Y', strtotime($fecha));
                                echo $fechaFormateada; 
                                ?>
                            </td>
                            <td>
                                <form action="api/eliminarturno.php" method="post">
                                    <input type="hidden" name="id_turno" value="<?php echo $fila['id_turno']; ?>">
                                    <button class="btn" style="background-color: black; color: white" type="submit">Eliminar</button>
                                </form>
                            </td>
                            <td>
                                <form action="editarturno.php" method="post">
                                    <input type="hidden" name="id_turno" value="<?php echo $fila['id_turno']; ?>">
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