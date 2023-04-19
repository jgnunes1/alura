<?php

// o arrey é colocado em colchetes - a lista fica de elementos parecidos.

$idadeList = [21, 23, 19, 25, 30, 41, 18];

list($idadeVinicius, $idadeJoao, $idadeMaria, $idadeLais) = $idadeList;
/*
unset($idadeList[4]);
*/

// o counta vai contar os elementos da lista e autualiza-los automaticamente
for ($i = 0; $i < count ($idadeList); $i++) {

    echo $idadeList[$i] . PHP_EOL;
}
 