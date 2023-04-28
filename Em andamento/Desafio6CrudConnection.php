<?php
    // Declarando as variáveis para a conexão com o banco de dados
    $host = 'localhost';
    $user = 'root';
    $dbname = 'desafio5';
    $password = '';

    $pdoOptions = [
        PDO::ATTR_PERSISTENT => TRUE,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    ];

    // Usando a função "tente" para fazer a conexão, caso falhe exibe uma mensagem de erro
    try {
        $pdoConnection = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $password, $pdoOptions);
    } catch(Exception $e) {
        switch($e->getCode()) {
            case 1049: 
                echo 'Algo está errado, verifique novamente.';
                break;

            default:
                echo 'Deu B.O., vai arrumar';
                break;
        }
    }
?>