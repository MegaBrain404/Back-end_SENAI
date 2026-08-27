<?php

$email = "jp@gmail.com";
$senha = "1234";
$status == "desativado";

echo "Bem vindo ao Facebook <br>";

if ( $email == "jp@gmail.com" && $senha == "1234" && $status == "ativa"){
  echo "Acesso Liberado <br>";
  header("Location: http://www.facebook.com");
}
else{
  echo "Email ou senha inválido!";
}
?>