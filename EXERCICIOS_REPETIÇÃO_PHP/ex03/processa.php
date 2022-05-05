<?php

    $n1 = $_POST['n1'];
    $cont = 1;
    echo "Tabuada do $n1 <br>";

        for($cont; $cont <=10; $cont++){
            $conta = $n1 * $cont;

            echo "$n1 X $cont = $conta<br>";
        }

?>