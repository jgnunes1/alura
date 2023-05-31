
<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],

    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ],
];
//aqui constrói o ordnamento utilizano SE na nota for maior que outra
function ordenaNotas(array $nota1, array $nota2): int
{
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }

    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }

    return 0;
}


//usort ordenação do usuário, faz ornderna da nota maior para a menor.
usort($notas, 'ordenaNotas') . PHP_EOL;
var_dump($notas);
