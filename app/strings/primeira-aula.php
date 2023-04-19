<?php

$nome = 'Vinicius Dias';

$ehDaMinhaFamilia = tr_contains($nome, needle: 'Dias');

if ($ehDaMinhaFamilia){
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}

