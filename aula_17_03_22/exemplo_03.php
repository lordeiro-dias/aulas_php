<?php

$idade = 18;
$habilitacao = TRUE;
    //APROVADO SE NOTA MAIOR QUE 6
    //REPROVADO SE NOTA MENOR QUE 5
    //RECUPERAÇÃO ENTRE 5 E 6

    if ($idade >= 18){
        if ($habilitacao <> FALSE){
            echo "VOCE PODE DIRIGIR, É MAIOR DE 18 ANOS E POSSUI HABILITAÇÃO";
        }

        else{
            echo "VOCE NAO PODE DIRIGIR, É MAIOR DE 18 ANOS, POREM NAO POSSUI HABILITAÇÃO";
        }

    }

    else{
        echo "VOCE NAO PODE DIRIGIR, É MENOR DE IDADE";
    }
    
?>