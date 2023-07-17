<?php

//array_key_exists = verifica se a chave existe
//in_array = verifica se o valor exite 
//isset = verifica se a chave existe e não é nula.

$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' =>10,
    'Roberto' => 7,
    'Maria' => 9,
];

krsort(&array:$notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas));

foreach ($notas as aluno => $nota) {
    if ($aluno === 'Vinicius') 
        return true;
    }

    array_key_exists(key:'Vinicius', $notas)

    echo 'Vinciuns fez a prova' . PHP_EOL;

    var_dump(isset($notas['Vinicus']));-

    echo 'Quem tirou 10?'. PHP_EOL;
    // vai exibir a chave Ana que tirou a nota 10.
    echo  array_search(needle:10, $notas);

