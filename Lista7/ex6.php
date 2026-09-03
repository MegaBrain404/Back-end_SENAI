<?php 

function calcularMedia($nota1, $nota2, $nota3){
  $media = ($nota1 + $nota2 + $nota3) / 3;
  echo "A média é: $media";
}

echo calcularMedia(4, 7, 7);