<?php

    // INCLUIR O ARQUIVO DE CONEXÃO SEMPRE QUE PRECISAR ACESAR O SGBD
    include "conecta.php";

    // CONSULTA EM SQL QUE SERA EXECUTADO NA BASE DE DE DADOS
    $sql = "SELECT * FROM alunos";

    // ARMAZENA O RESULTADO DA CONSULTA
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        // SAIDA DE DADOS DE CADA LINHA DA TABELA
        while($linha = mysqli_fetch_Assoc($resultado)) {
            echo "id: " . $linha["id"] . "<br>";
            echo "Nome: " . $linha["nome"] . "<br>";
            echo "Curso: " . $linha["curso"] . "<br>";
            echo "Idade: " . $linha["idade"] . "<br><br>";
        }
    } 

    else {
        echo "0 resultados";
    }

    // FECHAR A CONEXÃO
    mysqli_close($conexao);

?>