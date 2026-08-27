<?php

$altura = 1.70;
$peso = 70;
$IMC = ($peso)/($altura*$altura);

if ($IMC >= 19 && $IMC<25){
  echo "Você está no peso ideal";
  echo $IMC;
}
elseif ($IMC >= 25 && $IMC<30){
  echo "Você está sobrepeso";
}
elseif ($IMC >= 30  && $IMC<35){
  echo "Você está com obesidade grau 1";
}
elseif ($IMC >= 35  && $IMC<40){
  echo "Você está com obesidade grau 2";
}
elseif ($IMC >= 40){
  echo "Você está com obesidade grau 3";
}
?>