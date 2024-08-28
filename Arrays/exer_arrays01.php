<?php
$numeros = array(1,2,3,4,5,6,7,8,9,10);
//Exiba a array original

echo '<pre>';
print_r ($numeros);
echo "$numero[0]<br>";
echo "$numero[4]<br>";
echo "$numero[9]<br>";
//Altere os valores nas posições especificas
echo $numero[0] = 100;
echo $numero[4] = 500;
echo $numero[9] = 1000;

echo '<pre>';
//Alterando o valor 0 -> Banana para Melancia
$lista_fruta[0] = "Melancia";
print_r ($lista_fruta);
echo "<br>";

echo $lista_fruta[0];



?>