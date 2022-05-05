<?php

    $n1 = $_POST['n1'];
    $cubo = pow($n1, 3);

    echo "Mostrando apenas os números ímpares de $n1 até o seu cubo <br><br>";

    for($n1; $n1 <= $cubo; $n1++){
        $impar = $n1 % 2;
        if($impar == 1){
            echo "$n1 <br>";   
        }
    }

?>