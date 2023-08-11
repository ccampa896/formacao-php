<?php

echo "Números ímpares de 1 a 100:" . PHP_EOL;

for ($contador = 1; $contador <= 100; $contador++) {
    if ($contador % 2 != 0) {
        echo "# $contador" . PHP_EOL;
    }
}