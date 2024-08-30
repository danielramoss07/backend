<?php

//Criando a Array lista_coisas
$lista_coisas = [];

//Criando uma array frutas, dentro da Array lista_coisas
$lista_coisas ['frutas'] = ['Banana', 'Maçã', 'Morango', 'Uva'];

//Criando uma array pessoas, dentro da Array lista_coisas
$lista_coisas ['pessoas'] = ['João', 'José', 'Maria'];

//Alterando o terceiro valor da Array FRUTAS
$lista_coisas ['frutas'][2] = 'Abacaxi';

//Alterando o segundo valor de Array PESSOAS
$lista_coisas ['pessoas'][1] = 'Carlos';

echo "O terceiro valor da array FRUTAS agora é: ";
echo $lista_coisas ['frutas'][2];

echo "<hr>";

echo "O segundo valor da array PESSOAS agora é: ";
echo $lista_coisas ['pessoas'][1];

?>