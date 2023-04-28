<?php
    // Não estou conseguindo fazer funcionar, diz que o erro está na última função if, mas não sei o que

    // Fazendo o requerimento da conexão com o banco de dados que está em outro arquivo
    require('C:/laragon/www/Desafios-Harve/Desafio6CrudConnection.php');

    // Usando a função "se" para identificar quando apertam o botão de deletar
    if(isset($_POST['delete'])) {
        // Declarando a variável para armazenar os dados inserido no input
        $deleteName = $_POST['deleteName'];

        // Armazenando o "Query" na variável $sql
        $sql = "
            DELETE FROM
                users
            WHERE
                `name` = $deleteName
        ";
        
        // Preparando e executando o "Query"
        $pdoQuery = $pdoConnection->prepare($sql);

        $pdoQuery->execute();
    }

    // Exibindo a mensagem de sucesso ou de falha na tela
    if($pdoQuery) {
        echo 'Dados deletados com sucesso!';
    } else {
        echo 'Erro ao deletar! <br>';
    }
?>