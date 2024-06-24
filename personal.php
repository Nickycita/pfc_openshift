<?php
session_start();
require("libreria.php");
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
            welcome();
            ?>
            <div class="clear">
            </div>
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
            <?php
            echo "<h1>Bienvenido a tu área personal, " . $_SESSION['user'] . "</h1>";
            ?>
        </div>
        <div class="clear">
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