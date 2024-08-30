<?php
//Aqui mostra as variaveis das 3 notas e a função da média para calcular as notas
$nota_1 = 6;
$nota_2 = 9;
$nota_3 = 6;

$media = $nota_1 + $nota_2 + $nota_3 /3;
//Aqui mostra os 3 valores das notas 
echo "Nota da primeira prova: $nota_1 <br>";
echo "Nota da segunda prova: $nota_2 <br>";
echo "Nota da terceira prova: $nota_3 <br>";
//Aqui mostra o resultado da média a partir das notas e mostrando a média de cada uma delas (menor que 7 REPROVADO) (maior ou igual a 7 APROVADO)
echo "Média das notas três provas: $media <br>";

if ($media < 7){
    echo 'O aluno foi REPROVADO';
}
else{
    echo 'O aluno foi APROVADO';
}

?>