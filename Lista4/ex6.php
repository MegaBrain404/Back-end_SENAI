<?php

  $idade = 67;
  $deficiente = "sim";
  $gestante = "sim";

  if ($idade >= 60 || $deficiente == "sim" || $gestante == "sim"){
    echo "Atendimento prioritário";
  }
  else{
    echo "Atendimento normal";
  }