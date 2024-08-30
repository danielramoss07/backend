<?php
$corEscolhida = "vermelh0";

swith ($corEscolhida) {
    case "vermelho":
        echo "Voce escoljheu a cor vermelha.";
        break;
    
     case "azul":
        echo "Voce escoljheu a cor azul.";
        break;

    case "verde":
        echo "Voce escoljheu a cor verde.";
        break;

    default:
        echo "Cor não disponivel.";
        break;
}
?> 