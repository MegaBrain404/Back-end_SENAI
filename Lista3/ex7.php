<?php
    
    $valor = 67;
    $valorMinimoEntrega = 7;
    $idadeCliente = 67 ;
    $idadeMinimaBebidaAlcolica = 18;
    $estoque = 87;
    $quantidadePedida = 76;
    $statusPedido = "revisão";

    if($valor >= $valorMinimoEntrega){
        echo "liberado sua entrega gratis; ";
    }
    else{
        echo"Sua entrega não é gratis será de xxxx reis; ";
    }
    if($idadeCliente >= 18){
    echo "Pode comprar bebida alcoólica; ";
    }
    else{
        echo "Não pode comprar bebida alcoólica; ";
    }
    if($quantidadePedida >= $estoque){
        echo "quantidade de produtos insuficiente no estoque, não podemos aceitar o pedido; ";
    }
    else{
        echo"Pedido aceito; ";
        $statusPedido = "pago";
    }
    if($statusPedido == "pago"){
    echo "pedido liberado para produção. ";
    }
    else{
        echo "Pedido inválido.";
    }

    ?>