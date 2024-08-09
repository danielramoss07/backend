<?php 

//Aqui foi declarado as variaveis com "$"
$nome = 'Anna';
$cidade = 'Cerquilho';
$escola = 'SESI Cerquilho';
$CE = 428;
$curso = 'Desenvolvimento de Sistemas';
$media = 9.5;

echo 'Olá bem vindo ao SESI-CE <br>';

//aqui usamos o echo com as variaveis para aparecer no site
//aqui eu usei o echo <br> novamente para dar mais um espacamento 
echo '<br>';

echo "$nome <br>";
echo "$escola <br>";
echo "$CE <br>";
echo "$curso <br>";
echo "$media <br>";

echo '<br>';

//aqui foi uma forma de usar as variaveis com o texto
echo "Olá $nome, bem vindo ao SESI de $cidade, sua nota no curso de $curso é: $media";

?>