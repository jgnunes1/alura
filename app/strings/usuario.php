<?php

$usuario = 'Jorge Oliveira';
$email = 'jgnunes@gmail.com';
$senha = 'abc@123';

if (mb_strlen($senha) < 8){
    echo 'senha insegura' . PHP_EOL;
} else{
    echo 'senha criada com sucesso!'   .  PHP_EOL;
};

echo mb_strtoupper($usuario) . PHP_EOL;

echo substr($email) . PHP_EOL;


//tirar espaços vazios
echo ltrim($email) . PHP_EOL;




?>