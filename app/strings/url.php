<?php

$url = 'https://uerj.br';

if (str_starts_with($url, needle: 'https')) {
    echo "é uma url segura";
}else{
    echo 'não é uma url segura';
    }


echo PHP_EOL;

    if (str_ends_with($url, needle: '.br')) {
        echo "essa página é brasileira";
    } else {
        echo "está página não é brasileira";
    }

 echo PHP_EOL;