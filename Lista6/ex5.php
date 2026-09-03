<?php

$opcao=2;
echo"Bem vindo a ALARES INTERNET<br>";
echo "1- Jogar <br>";
echo "2- Ver personagens<br>";
echo "3- Ver ranking <br>";
echo "4- config <br>";
echo "5- sair <br>";

switch ($opcao) {
    case 1:

        echo "BEM VINDO AO JOGO da LEITOA!<br><br>";
        echo "Se prepare para seu maior desafio!<br>";
        break;

    case 2:
        echo "Você escolheu Ver personagens:";
        echo "Leitoa, porquinho, porco, porquinho da índia,
        porco espinho, porco do mato, porco do mar, porco do céu,
        porco do inferno, porco do espaço, porco do tempo, porco do vento,
        porco do fogo, porco do gelo, porco do raio, porco do trovão,
        porco do relâmpago, porco do trovão e relâmpago.";
        break;

    case 3:
        echo"O ranking dos melhores jogadores é: <br><hr>";
        echo"1. Sónamão <br>";
        echo"2. Leitoa Natalina <br>";
        echo"3. Menduim <br>";
        break;

    case 4:
        echo "Configurações do jogo: <br>";
        echo "1. Configurações de áudio <br>";
        echo "2. Configurações de vídeo <br>";
        echo "3. Configurações de controles <br>";
        break;
    case 5:
        echo "Você escolheu sair do jogo. Até a próxima!";
        break;
    default:
    echo"Opção Inválida!";
}
?>