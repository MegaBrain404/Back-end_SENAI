<?php
$playlist = ["Join me in death", "The killing moon", "Love will tear us apart", "Boys don't cry", "Lullaby", "Pictures of you"];

foreach ($playlist as $musica){
  echo $musica . "<br>";
  count($playlist);
}
echo "Sua playlist tem " . count($playlist) . " músicas.";
?>