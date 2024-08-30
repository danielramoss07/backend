<?php
//Aqui mostra o dinheiro gasto pelas compras e se o cliente é vip pelo numero
$valor_compra = 80;
$cliente_vip = "sim";

if ($valor_compra > 500 or $cliente_vip == "sim"){
    echo "Cliente com desconto aplicado";
}
//Aqui caso não seja nenhum dos dois ele não sera cliente vip
else{
    echo "Cliente sem desconto";
}



?>