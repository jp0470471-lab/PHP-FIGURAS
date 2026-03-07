<?php
$tamano = 5;

for ($i = 1; $i <= $tamano; $i++) {

    for ($j = $i; $j < $tamano; $j++) {
        echo "&nbsp; ";
    }

    for ($k = 1; $k <= (2*$i-1); $k++) {
        echo "* ";
    }

    echo "<br>";
}
?>