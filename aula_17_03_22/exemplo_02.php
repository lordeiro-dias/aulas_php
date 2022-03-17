<?php

$nota = 5.1;
    //APROVADO SE NOTA MAIOR QUE 6
    //REPROVADO SE NOTA MENOR QUE 5
    //RECUPERAÇÃO ENTRE 5 E 6

    if ($nota > 6){
        echo "APROVADO";

    }
    elseif($nota < 5){
        echo "REPROVADO";

    }

    else{
        echo "RECUPERAÇÃO";

    }

?>