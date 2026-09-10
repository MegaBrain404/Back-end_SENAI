<?php
$numeros = [1,2,3,4,5,6,7,8,9,10];
$maior = 0;
foreach ($numeros as $maiornumero){
  if ($maiornumero > $maior){
    $maior = $maiornumero;
  }

}
echo "O maior número é: " . $maior;
?>