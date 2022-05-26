<?php

    $vetor = [10, 2, 6, 32, 18, 43];

    function soma_vet($x){
        $total = 0;
        
        for($i = 0; $i<count($x);$i++){
            $total += $x[$i];

        }

        echo "A soma é $total";
    }

    soma_vet($vetor);
?>