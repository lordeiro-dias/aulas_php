<?php

    $grau = $_POST['graus'];
    $escolha = $_POST['num1'];

    function celsius($y){
        $conta = ($y - 32) * 5 / 9;

        echo "O valor convertido de Farenheit para Celsius é $conta";
    }

    function farenheit($x){
        $convert = $x * 9 / 5 + 32;

        echo "O valor convertido de Celsius para Farenheit é $convert";

    }
    

    if($escolha > 1){
        celsius($grau);
    }

    else{
        farenheit($grau);
    }

?>