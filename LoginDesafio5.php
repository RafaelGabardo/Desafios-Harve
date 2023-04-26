<?php
    // Começando o código
    if(isset($_POST['submit'])) {
        //Declarando variáveis
        $fullname = $_POST['fullname'];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        // Fazendo o tal do "query"
        $sql = "
            SELECT
                *
            FROM
                users
            WHERE
                name = :name AND birthdate = :birthdate AND email = :email AND password = :pass
        ";

        // Garantindo/Assegurando que esttará tudo correto
        $ensure = [$fullname=>':name', $birthdate=>':birthdate', $email=>':email', $pass=>':pass'];

        // Terminando o serviço
        if($sql == $ensure) {
            require('LoginDesafio5.php');
        } else {
            require('Desafio5.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Foi Enganado</title>
</head>
<body>
    <h1>Você foi Enganado!!!!! kkkkkkkkkkkkkkkkkkkkk</h1>
</body>
</html>