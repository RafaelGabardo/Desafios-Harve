<?php
    // Declarando variáveis para conexão com o banco de dados
    $host = 'localhost';
    $dbname = 'desafio5';
    $user = 'root';
    $password = '';

    // Começando a validação do formulário HTML
    if(isset($_POST['submit'])) {
        // Fazendo conexão com banco de dados
        $conn = new mysqli($host, $user, $password, $dbname);

        // Declarando variáveis com método $_POST
        $fullname = $_POST['fullname'];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        // Conferindo se as senhas são iguais
        if($pass1 === $pass2) {
            // Fazendo o "Query"
            $sql = "
                INSERT INTO
                    users (`name`,`password`,`email`,`birthdate`)
                VALUES
                    ('$fullname','$pass1','$email','$birthdate')
            ";

            // Fazendo a verificação se os dados foram inseridos com sucesso
            if($conn->query($sql) === TRUE) {
                echo 'Dados salvos com sucesso!';
            } else {
                echo 'Erro!' . $sql . '<br>' .$conn->error;
            }
        } else {
            echo 'Ambas as senhas devem ser iguais';
        }

        // Fechando a conexão com o banco de dados
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Log in/Sign in</title>
</head>
<body>
    <form method="POST" action="Desafio6.php">
        <label for="fullname">Digite seu nome completo:</label> <br>
        <input type="text" name="fullname"> <br><br>
        <label for="birthDate">Digite sua data de nascimento:</label> <br>
        <input type="date" name="birthdate"> <br><br>
        <label for="email">Digite seu e-mail:</label> <br>
        <input type="email" name="email"> <br><br>
        <label for="password">Digite sua senha:</label> <br>
        <input type="password" name="pass1"> <br><br>
        <label for="password">Confirme sua senha:</label> <br>
        <input type="password" name="pass2"> <br>
        <input type="submit" value="Enviar" name="submit">
    </form>
</body>
</html>