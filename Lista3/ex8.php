<?php

$nome = "Lucas Filipe";
$senha = 99887766;
$confirmar_senha = 99887766;
$data_nasc = "21/01/2010";

  if($nome != null){
    if($senha == $confirmar_senha){
      echo $data_nasc;
    }
    else {
    echo "Senha ou nome incorretos";
    }
}

?>