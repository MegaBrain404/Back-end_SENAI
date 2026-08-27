<?php

$Pessoas = [
    [
        "nome" => "João Lucas",
        "idade" => 36,
        "sexo" => "Masculino",
        "ensino" => "N"
    ],
    [
        "nome" => "Ana Barbosa",
        "idade" => 26,
        "sexo" => "Feminino",
        "ensino" => "S"
    ],
    [
        "nome" => "Mario Miguel",
        "idade" => 32,
        "sexo" => "Masculino",
        "ensino" => "S"
    ],
    [
        "nome" => "Julia Soares Roseto",
        "idade" => 45,
        "sexo" => "Feminino",
        "ensino" => "S"
    ]
];

foreach ($Pessoas as $pessoa) {
    echo "Nome: {$pessoa['nome']}, Idade: {$pessoa['idade']}, Sexo: {$pessoa['sexo']}, Ensino: {$pessoa['ensino']}<br>";
}  

?>