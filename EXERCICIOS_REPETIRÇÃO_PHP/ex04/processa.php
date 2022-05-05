<?php

    $n1 = $_POST['n1'];
    $n2 = 1;
    $n3 = $n1;

    for($n2; $n2 <= $n1 - 1; $n2++){
        $n3 = $n3 * $n2;

    }
        echo "O fatorial de $n1 é igual a $n3";

?>