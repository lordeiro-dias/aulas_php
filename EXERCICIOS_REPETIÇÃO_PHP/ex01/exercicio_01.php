<?php
    $n1 = $_POST['n1'];
    $cubo = pow($n1, 3);

    echo "Números até o cubo de $n1 <br><br>";

    for($n1; $n1 <= $cubo; $n1++){
        echo "$n1 <br>";

    }
?>