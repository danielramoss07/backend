<?php

//Criando a Array Cadastro
$cadastro = [];

//Criando uma array Usuario, dentro da Array Cadastro
$cadastro ['usuario'] = ['João', 'Maria', 'Pedro'];
//Criando uma array Senha, dentro da Array Cadastro
$cadastro ['senha'] = ['1234', 'abcd', '5678'];

echo "<pre>";
print_r ($cadastro);
echo "</pre>";

?>