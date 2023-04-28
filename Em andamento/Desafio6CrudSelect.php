<?php
    // Fazendo o requerimento da conexão com o banco de dados que está em outro arquivo
    require('C:/laragon/www/Desafios-Harve/Desafio6CrudConnection.php');

    // Armazenando o "Query" na variável $sql
    $sql = "
        SELECT
            *
        FROM
            users
    ";

    // Preparando e executando o "Query"
    $pdoQuery = $pdoConnection->prepare($sql);

    $pdoQuery->execute();

    $pdoResult = $pdoQuery->fetchAll(PDO::FETCH_ASSOC);

    // Retornando um array caso sucesso ou uma string caso falha
    if($pdoResult) {
        print_r($pdoResult);
    } else {
        echo 'Deu ruim!';
    }
?>