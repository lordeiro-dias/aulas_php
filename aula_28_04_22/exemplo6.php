<?php
    $nomes = ["Eduardo", "Laura", "Richard"];

    //echo $nomes[0]; 
    //echo $nomes[1];
    //echo $nomes[2];     

    for($indice=0;$indice<3;$indice++){
        echo ($indice+1). "° Nome => $nomes[$indice] <br>";
    }
?>