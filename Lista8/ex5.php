<?php 

  $contador = 0;

  for ($i = 1; $i <= 50; $i++) {

    if ($i % 3 == 0) {
      echo "O número $i é múltiplo de 3 <br>";
      $contador++;
    }

 
  }
    echo "<br>";
  echo "quantidade de múltiplos de 3: $contador <br>";
  ?>