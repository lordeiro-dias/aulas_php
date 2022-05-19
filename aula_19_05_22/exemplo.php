<?php
    //vetores
    //$numeros = array(1, 5, 12);
    $num = [1, 12, 50, 1.2];
    $result = count($num);
    $total = 0;

    echo "Meu vetor tem: $result de posições <br><br>";


    for($x = 0; $x < $result; $x++){
        echo "indice = $x ==> $num[$x] <br>";
        $total += $num[$x];
    };

    echo "<br>A soma dos números do vetor é igual a $total <br>";
    $media = $total / $result;
    echo "A média é $media";

?>