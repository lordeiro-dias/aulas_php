<?php
    //Função sem retorno e sem parametro

    function teste (){
        echo "Ezaleide";
    }

    for($x = 0; $x < 1; $x++){
        teste();
        echo "<br>";
    }


    
    //Função sem retorno e com parametro

    function teste2($a){
        $soma = $a + 1;
        echo $soma;
    }
    //a variavel $a tem escopo local
    teste2(10);
    echo "<br>";



    //Função com retorno e sem parametro

    function teste3(){
        $b = "Isaias";
        return $b;
    }

    $resultado = teste3();
    echo $resultado;
    echo "<br>";



    //Função com retorno e com parametro

    function teste4($z, $y){
        $soma = $z + $y;
        return $soma;
    }

    $num1 = 10;
    $num2 = 15;

    $result = teste4($num1, $num2);
    echo $result;

?>
