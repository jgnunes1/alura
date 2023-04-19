<?php

function geraEmail(): void
	
{

$conteudoEmail = 'Olá, Fulano(a)!
    Estamos entrando em contato paras 
    {motivo do contato} 
    {assinatura}
    FINAL';

    echo $conteudoEmail;
	
}

geraEmail();