<?php
//Aqui sera o laço dos numeros de 1 a 10
for ($i = 1; $i <= 10; $1++) {

//Aqui sera a classificação dos numeros utilizando o swith
$categoria = " ";
    switch (true) {
        case ($i >= 1 && $i <= 3):
            $categoria = "Baixo";
            break;
        case ($i >= 4 && $i <= 7):
            $categoria = "Médio";
            break;
        case ($i >= 8 && $i <= 10):
            $categoria = "Alto";
            break;
     }
//Variavel para mostrar os numeros pares e impares
$par = ($i % 2 == 0) ? "Par" : "Impar";

//Ira mostrar todos os resultados com o echo 
echo "O numero $i é classificado como $categoria e é $par.<br>";

}