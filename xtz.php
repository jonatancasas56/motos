<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta de Motos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"></link>
    <style>
        .contorno {
            background-color: white;
            color: black;
            border: 2px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php include "includes/menu1.php"?>
        <?php include "includes/menu3.php"?>
        <div class="row">
            <div class="col-6 contorno">
                <div class="image-container">
                    <img src="assets/xtz.jpg" class="img-fluid"/>
                </div>
            </div>
            <div class="col-6 contorno">
                <div class="text-container">
                    <p>Características de la moto:</p>
                        <ul>
                            <li>Motor:	Monocilíndrico, 4 tiempos, 2 válvulas, SOHC, refrigerado por aire</li>
                            <li>Cilindrada:	124 cc</li>
                            <li>Potencia máxima:	10 cv @ 7.500 rpm</li>
                            <li>Velocidad máxima:	90 km/h</li>
                            <li>Alimentación:	Carburador</li>
                            <li>Encendido:	TCI</li>
                            <li>Arranque:	Eléctrico y pedal</li>
                            <li>Transmisión:	5 velocidades</li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

