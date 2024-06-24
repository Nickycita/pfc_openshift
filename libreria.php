<?php

function welcome(){
    if (
    isset($_SESSION['user']) && !empty($_SESSION['user']) && $_SESSION['user'] != "" &&
    isset($_SESSION['pass']) && !empty($_SESSION['pass']) && $_SESSION['pass'] != ""
) {
    echo "<p>Bienvenid@ " . $_SESSION['user'] . "</p>";
    echo "<form action='logout.php' method=POST>
        <input type='submit' name='logout' value='Cerrar Sesión'>
        </form>";
    echo "<br>";
}
};

$productos = array(
    array('Platinum', 'img/1.jpg', 'AMD Ryzen 7 5800X3D/32GB/1TB SSD/RX 7900 XT', '2659,74'),
    array('Gold Élite', 'img/2.jpg', 'AMD Ryzen 5 5600X/16GB/1TB SSD/RX 6700', '1681,05'),
    array('Bronze', 'img/3.jpg', 'AMD Ryzen 5 5600G/16GB/500GB SSD', '729,06'),
);

function tabla($array)
{
    for ($x = 0; $x < count($array); $x++) {
        echo "<div class='celda'>";
        echo "<p>" . $array[$x][0] . " </p>";
        echo "<img src='" . $array[$x][1] . "'";
        echo "<br><br>";
        echo "<span>" . $array[$x][2] . "</span>";
        echo "<br><br>";
        echo "<span>" . $array[$x][3] . "</span>";
        echo "<br><br>";
        echo "</div>";
    }
};

function tablasegura($array)
{
    for ($x = 0; $x < count($array); $x++) {
        echo "<div class='celda'>";
        echo "<p>" . $array[$x][0] . " </p>";
        echo "<img src='" . $array[$x][1] . "'";
        echo "<br><br>";
        echo "<span>" . $array[$x][2] . "</span>";
        echo "<br><br>";
        echo "<span>" . $array[$x][3] . "</span>";
        echo "<br><br>";
        echo "<form action='personal.php' method=POST>
                <input type='hidden' name='prod' value='".$array[$x][0]."'>
                <input type='submit' name='comprar' value='Comprar'>
                </form>";
        echo "<br>";
        echo "</div>";
    }
};
