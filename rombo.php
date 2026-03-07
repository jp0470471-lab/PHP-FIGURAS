<?php

$tamano = 5;

// Parte superior
for ($i = 1; $i <= $tamano; $i++) {

    for ($j = $i; $j < $tamano; $j++) {
        echo "&nbsp; ";
    }

    for ($k = 1; $k <= (2*$i-1); $k++) {
        echo "* ";
    }

    echo "<br>";
}

// Parte inferior
for ($i = $tamano-1; $i >= 1; $i--) {

    for ($j = $tamano; $j > $i; $j--) {
        echo "&nbsp; ";
    }

    for ($k = 1; $k <= (2*$i-1); $k++) {
        echo "* ";
    }

    echo "<br>";
}
?>