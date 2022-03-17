<?php

$sigla = "MG";

switch ($sigla){
    case "SP":
        echo "Você escolheu São Paulo";
        break;
    case "RJ":
        echo "Você escolheu Rio de Janeiro";    
        break;
    case "MG";
        echo "Você escolheu Minas Gerais";
        break;
    default:
        echo "NÃO ENCONTREI A SIGLA EM MINHA BASE DE DADOS!";
        break;
}
    
?>