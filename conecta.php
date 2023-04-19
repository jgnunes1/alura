<?php

//------------------------------------------------------------------------------
//  Conecta com o SYBASE com login p/consulta no RH
//------------------------------------------------------------------------------
function conectar_bd_rh(&$connection)
  {
        //prod
        //$connection = sybase_connect("sybasedb.prod.uerj.br:4100","rhweb","conrh2000viaweb","cp850","ProfOnline") or die ("<P><b>** O Servidor de Banco de Dados est� congestionado! Favor tentar mais tarde.</b></P>"); 
        //desenv
        $connection = sybase_connect("sybasedb.desenv","rhweb","hg987JHgfr","cp850","ProfOnline") or die ("<P><b>** O Servidor de Banco de Dados est� congestionado! Favor tentar mais tarde.</b></P>"); 
        $db = sybase_select_db("db_rh", $connection) or die ("Conexão recusada. Tente mais tarde.");
  }
 /* 
// Verifica o status atual do servidor.
$current_status =  ping($server, $port, 10);

if ($current_status == "down"): echo "Servidor indisponível!";
else: echo "Servidor online! ";
endif;
*/
?>