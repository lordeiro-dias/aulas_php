<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }
        
        body{
        background-color: pink;
        color: white;
        text-align: center;
        }

        h1{
            padding: 20%

        }

    </style>
<body>

    <?php

    $nome = $_POST['nome'];

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $media = ( $nota1 + $nota2 + $nota3 ) / 3;

    echo "<h1>O(A) Aluno(a) ".$nome. " com as notas " .$nota1. " , " .$nota2. " , " .$nota3. " tirou uma média de " .$media. "</h1>";

    ?>    

</body>
</html>


