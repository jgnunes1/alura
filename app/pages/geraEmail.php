<?php

function gerarEmail()
{
    $conteudoEmail = <<<FIM
		
    Olá, $nome !
	
	Estamos entrando em contato para 
	
	{motivo do contato}
	
	{assinatura};
	
	
	echo $conteudoEmail
	
	
	FIM;
}

geraEmail(nome: 'Jorge Oliveira');
