<?php
//Aqui mostra as funções do seu salario e horas de trabalho
$salario = 2000;
$horas_extras = 23;

if (horas < 2000 and $horas_extras > 10){
    $total = $salario = 1.2;
    echo "Esse e o valor total do seu salario com o bonus de 20%: $total";
//Aqui seja caso seja o salario de 2000 ou mais e sendo mais que 5 horas que gera 10% de desconto
}

elseif($salario >= 2000 and $horas_extras > 5 ){
    $total = $salario * 1.1;
    echo "Esse é o salario total com o bonus de 10%: $total";
}
//Aqui seria se não tivesse nenhum dos itens anteriores voce não ganha nenhum bonus
else{
    echo "Voce não recebeu bonus nenhum";
}