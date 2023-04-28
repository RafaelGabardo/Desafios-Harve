<?php
    // Estou com dificuldade em saber onde está o erro nesse código. Tento fazer as atualizações mas parece que não conecta no banco de dados,
    // porém não aparece mensagem de erro

    // Declarando a classe
    class Crud
    {
        // Declarando as variáveis
        private $host = 'localhost';
        private $user = 'root';
        private $dbname = 'desafio5';
        private $password = '';

        // Declarando a função para conectar com o banco de dados
        public function __construct()
        {
            // Declarando as opções da classe PDO
            $pdoOptions = [
                PDO::ATTR_PERSISTENT => TRUE,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
            ];

            // Tentando conexão com o banco de dados, caso não dê, encerra o código
            try {
                $pdoConnection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->user, $this->password, $pdoOptions);
             } catch(PDOException $e) {
                die('Erro ao conectar! ' . $e->getMessage());
            }

            // Retorna a conexão? (to meio perdido)
            return $pdoConnection;
        }

        // Declarando a função para listar todos os elementos da tabela "users"
        public function sqlListAll($pdoConnection)
        {
            // Fazendo a função "se" para caso o botão com nome "crud" seja clicado
            if(isset($_POST['crud'])) {
                // Declarando o "Query" na variável $sql
                $sql = "
                    SELECT
                        *
                    FROM
                        users
                ";

                // Fazendo a preparação e execução do "Query"
                $pdoQuery = $pdoConnection->prepare($sql);

                $pdoQuery->exec();

                $pdoResult = $pdoQuery->fetchAll();
            }

            // Retornando o resultado do "Query"
            return $pdoResult;

            // Exibindo o resultado do "Query" (não sei se funciona)
            echo $pdoResult;
        }

        // Declarando a função para atualizar o nome
        public function sqlUpdate($pdoConnection)
        {
            // Fazendo a função "se" para caso o botão com nome "update" seja clicado
            if(isset($_POST['update'])) {
                // Declarando as variáveis necessárias para o "Query"
                $updateName = $_POST['updateName'];
                $id = 1;

                // Declarando o "Query" na variável $sql
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

                $pdoQuery->exec();
            } 

            // Retornando o "Query"
            return $pdoQuery;

            // Fazendo a função "se" para caso o "Query" dê certo, exiba uma mensagem, se não, exiba outra
            if($pdoQuery) {
                echo 'Dados atualizados com sucesso!';
            } else {
                echo 'Erro ao atualizar!';
            }
        }

        // Declarando a função para deletar algum nome
        public function sqlDelete($pdoConnection)
        {
            // Fazendo a função "se" para caso o botão com nome "delete" seja clicado
            if(isset($_POST['delete'])) {
                // Declarando a variável necessária para o "Query"
                $deleteName = $_POST['deleteName'];

                // Declarando o "Query" na variável $sql
                $sql = "
                    DELETE FROM
                        users
                    WHERE
                        `name` = $deleteName
                ";
                
                // Preparando e executando o "Query"
                $pdoQuery = $pdoConnection->prepare($sql);

                $pdoQuery->exec();
            }

            // Retornando o "Query"
            return $pdoQuery;

            // Fazendo a função "se" para caso o "Query" dê certo, exiba uma mensagem, se não, exiba outra
            if($pdoQuery) {
                echo 'Dados deletados com sucesso!';
            } else {
                echo 'Erro ao deletar!';
            }
        }
    }
?>