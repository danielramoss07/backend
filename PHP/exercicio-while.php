<?php

$numero = 1000;
$contador = 0;
/*coletar os dados*/
if ($numero >= 0){/*para ver se ele é maior ou igual a zero*/
    while ($contador <= $numero){/*ver se o numero é maior que o contador */
        if($contador  % 2 == 0){/*ver se o numero e par*/
             echo "$contador<br>";
        
        }
        $contador++;
    }
}

else{
    echo"Esse número não é par ou positivo";/*ver se o numero é impar*/
}








?>