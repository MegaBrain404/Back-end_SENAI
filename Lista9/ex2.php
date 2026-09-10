<?php
$seguidores = ["joaopaulozz", "JuliaCD", "maria23"];
$soma = 0;
foreach ($seguidores as $pessoa){
  echo $pessoa . "<br>";
  $soma = $soma + 1;
}
echo "A primeira posição da lista é: " . $seguidores[0] ;
?>