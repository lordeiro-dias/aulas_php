<?php

    $vet = [];

    for($x = 0; $x < 5; $x++){

        $num = rand(1,10);
        $vet [$x] = $num;

    };

    $result = count($vet);
    
    for($i = 0; $i < $result; $i++){
        echo "$vet[$i] <br>";   

    };

?>