<?php
$regexp = '~(\d\d)(\w)~';

$alvo = '12a34b56c';
$match = array();
$achou = preg_match($regexp, $alvo, $match);

if ($achou) {
echo $match[0][0] . "\n";
echo $match[1][0] . "\n";
echo $match[2][0] . "\n";
}

$string = '31-12-2007';

$string = 'Dezembro 31';
$regex = '~(\w+)\s(\d+)~';
$novoTexto = '$2 de $1';

$resultado = preg_replace($regex, $novoTexto, $string);
echo $resultado . PHP_EOL; // 21 de Setembro

$regexp = '/<(a)\s+href="(.+)"(?:>(.*)<\/\1>)/';

$alvo = '<a href="https://www.example.com">Link</a>';
$match = array();

$achou = preg_match($regexp, $alvo, $match);

if ($achou) {
    $tagCompleta = $match[0]; // <a href="https://www.example.com">Link</a>
    $tagNome = $match[1]; // a
    $url = $match[2]; // https://www.example.com
    $texto = $match[3]; // Link

    echo "Tag completa: " . $tagCompleta . "\n";
    echo "Nome da tag: " . $tagNome . "\n";
    echo "URL: " . $url . "\n";
    echo "Texto: " . $texto . "\n";
}