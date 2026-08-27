<?php

$idade = 16;
$senha = "sim";

echo "Bem vindo ao CineAmor <br>";

if ($idade >= 18 && $senha == "sim"){
  echo "Pode entrar e assitir o filme";
}
else{
  echo "Idade não permitida ou sem ingresso";
}
?>