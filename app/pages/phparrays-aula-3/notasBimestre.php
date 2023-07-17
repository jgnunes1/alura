<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 9,
    'Roberto' => 7,

];

$alunosFaltantes = array_diff_assoc($notasBimestre1, $notasBimestre2);
var_dump(array_keys($alunosFaltantes));
