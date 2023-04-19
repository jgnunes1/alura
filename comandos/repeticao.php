<?php

$contador = 1;

// while é enquanto o contador for menor que 15 faça 

while ($contador <= 15) {

    echo "#$contador" . PHP_EOL;

    $contador = $contador + 1;
}

// uso do for - Exibe o número até 12...

for ($contador = 1; $contador <= 15; $contador ++) {
    if ($contador == 13) {
        break;
    } 
    echo "#$contador" . PHP_EOL;
}

// Lista números pares.

for ($contador = 1; $contador <100; $contador++) {
    if ($contador % 2 == 0) {
        echo $contador . PHP_EOL;
    }
}

// Multiplicadores


$multiplicador = 3;

for ($i = 1; $i < 10; $i++) {
    echo "$multiplicador x $i = " . $multiplicador * $i . PHP_EOL;
}

// Caso você queira exibir também a multiplicação por 10, basta alterar o < por um <=:

$multiplicador = 3;

for ($i = 1; $i <= 10; $i++) {
    $resultado = $multiplicador * $i;
    echo "$multiplicador x $i = $resultado" . PHP_EOL;
}
