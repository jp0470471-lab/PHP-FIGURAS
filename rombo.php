<?php

$tamaño = 5;


for ($i = 1; $i <= $tamaño; $i++) {

    for ($j = $i; $j < $tamaño; $j++) {
        echo "&nbsp; ";
    }

    for ($k = 1; $k <= (2*$i-1); $k++) {
        echo "* ";
    }

    echo "<br>";
}


for ($i = $tamaño-1; $i >= 1; $i--) {

    for ($j = $tamaño; $j > $i; $j--) {
        echo "&nbsp; ";
    }

    for ($k = 1; $k <= (2*$i-1); $k++) {
        echo "* ";
    }

    echo "<br>";
}
#trabajo de Jonnathan Maldonado y Sebastian Flores
?>