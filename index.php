<?php
session_start();
require("libreria.php");

if (
    isset($_POST['user']) && !empty($_POST['user']) && $_POST['user'] != "" &&
    isset($_POST['pass']) && !empty($_POST['pass']) && $_POST['pass'] != ""
) {
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['pass'] = $_POST['pass'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>NICKY TECH</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <div class="head">
        <div class="logo">
            <img src="img/logo.png"></img>
        </div>
        <div class="login">
            <?php
            if (
                isset($_SESSION['user']) && !empty($_SESSION['user']) && $_SESSION['user'] != "" &&
                isset($_SESSION['pass']) && !empty($_SESSION['pass']) && $_SESSION['pass'] != ""
            ) {
                welcome();
            } else {
                echo '<form action="index.php" method="POST">
                <div>
                    <span>Bienvenid@</span>
                </div>
                <div class="clear">
                </div>
                <div>
                    <input type="text" name="user" placeholder="Usuario" size="40">
                </div>
                <div class="clear">
                </div>
                <div>
                    <input type="password" name="pass" placeholder="Contraseña" size="40">
                </div>
                <div class="clear">
                </div>
                <div>
                    <input type="submit" name="enviar" value="Acceder">
                </div>
                <div class="clear">
                </div>
            </form>';
            }
            ?>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="menu">
        <div class='menulist'>
            <a href='index.php'>Inicio</a>
        </div>
        <div class="menulist">
            <a href="producto.php">Productos</a>
        </div>
        <?php
        if (
            isset($_SESSION['user']) && !empty($_SESSION['user']) && $_SESSION['user'] != "" &&
            isset($_SESSION['pass']) && !empty($_SESSION['pass']) && $_SESSION['pass'] != ""
        ) {
            echo "<div class='menulist'>
            <a href='personal.php'>Área Personal</a>
        </div>";
        }
        ?>
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="cuerpo">
        <br><br>
        <div class="celdacentro">
            <br>
            <h1>Hola Juan y Aida</h1>
        </div>
    </div>
    <div class="clear">
    </div>
    <div class="footer">
        <div>
            <span>Diseñado por Ana Estébanez Aláiz</span>
        </div>
    </div>


</body>

</html>
