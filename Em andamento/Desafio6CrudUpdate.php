<?php
    // Mesmo problema do arquivo com o Delete

    // Fazendo o requerimento da conexão com o banco de dados que está em outro arquivo
    require('C:/laragon/www/Desafios-Harve/Desafio6CrudConnection.php');

    // Usando a função "se" para identificar quando apertam o botão de atualizar
    if(isset($_POST['update'])) {
        // Declarando a variável para armazenar os dados inserido no input
        $updateName = $_POST['updateName'];
        $id = 1;

        // Armazenando o "Query" na variável $sql
        $sql = "
            UPDATE
                users
            SET
                `name` = $updateName
            WHERE
                $id
        ";

        // Preparando e executando o "Query"
        $pdoQuery = $pdoConnection->prepare($sql);

        $pdoQuery->execute();
    } 

    // Exibindo a mensagem de sucesso ou de falha na tela
    if($pdoQuery) {
        echo 'Dados atualizados com sucesso!';
    } else {
        echo 'Erro ao atualizar!';
    }
?>