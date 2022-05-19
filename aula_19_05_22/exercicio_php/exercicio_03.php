<?php

    $vet = [];

    for($x = 0; $x < 10; $x++){
        $num = rand(1, 100);
        $vet[$x] = $num;

    }

    $cont = count($vet);
    $total = 0;

    echo "Números do seu vetor <br>";

    for($i = 0; $i < $cont;  $i++){
        echo "$vet[$i] <br>";
        $total += $vet[$i];

    };
    
    $media = $total / $cont;

    echo "<br> A média desses números é $media";

?>