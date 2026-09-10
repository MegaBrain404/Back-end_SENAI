<?php

$senhacorreta = "123456";
$senha = "1111";
$tentativas = 0;

while ($tentativas < 3) {
  $tentativas++;
  if ($senha == $senhacorreta) {
    echo "Senha correta! Acesso permitido.";
    break;
  } else {
    echo "Senha incorreta. Tentativa $tentativas de 3.<br>";
  }
}