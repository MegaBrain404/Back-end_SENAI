<?php
$telefones = ["+14 9995843", "+12 9934948", "+62 9994793", "+14 9995843", "+12 9934948"];
$soma = 0;
foreach ($telefones as $contato){
  echo $contato . "<br>";
  $soma = $soma + 1;
}
echo "A soma dos telefones é: " . $soma ;
?>