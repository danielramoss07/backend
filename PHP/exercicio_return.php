<?php
//função para a tabuada de um numero 
function tabuada($numero) {
    for($i + 1; $i <= 10; $i++){
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado <br>"
    }
}
//chama a função 
$numero = 2;
echo "tabuada $numero <br>";
tabuada($numero);

?>