<nav>
    <a style="color: black; text-decoration: none;" href="panel.php">Inicio</a>
    <?php if ($_SESSION["email"] == "administrador") { ?>
        <a style="color: black; text-decoration: none;" href="verreservas.php">Ver Reservas</a>
        <a style="color: black; text-decoration: none;" href="verturnos.php">Ver Turnos</a>
    <?php } else { ?>
        <a style="color: black; text-decoration: none;" href="reserva.php">Reservar</a>
        <a style="color: black; text-decoration: none;" href="turno.php">Turno</a>
    <?php } ?>
</nav>