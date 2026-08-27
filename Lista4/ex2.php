<?php

$cortesia = "sim";
$ingresso = "nao";

echo "Bem vindo ao Camarote da Fapin 🐎<br>";

if ( $cortesia == "sim" || $ingresso == "sim"){
  echo "Pode entrar e curtir a night";
}
else{
  echo "sem ingresso ou cortesia";
}
?>