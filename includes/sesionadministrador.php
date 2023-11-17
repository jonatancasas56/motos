<?php if ($_SESSION["email"] != "administrador") {
    header("Location: ./login.php");
}
?>