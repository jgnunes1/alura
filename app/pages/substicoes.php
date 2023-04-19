<?php

$texto = 'texto com qualquer, poxa coisa e caramba';
str_replace(
['poxa', 'caramaba'],
['p', 'c'], 
 $texto
 ) . PHP_EOL;

 echo strtr($texto, 'poxa', '***@') . PHP_EOL;
 echo strtr($texto ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL;