<?php

$email = "jp@gmail.com";
$ingresso = "1234";

echo "Bem vindo ao Facebook <br>";

if ( $email == "jp@gmail.com" || $senha == "1234"){
  echo "Acesso Liberado <br>";
  header("Location: http://www.facebook.com");
}
else{
  echo "Email ou senha inválido!";
}
?>