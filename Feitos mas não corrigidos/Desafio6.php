<?php
    $host = 'localhost';
    $dbname = 'desafio5';
    $user = 'root';
    $password = '';

    if(isset($_POST['submit'])) {
        $conn = new mysqli($host, $user, $password, $dbname);

        $fullname = $_POST['fullname'];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];
        $pass1 = $_POST['pass1'];
        $pass2 = $_POST['pass2'];

        if($pass1 === $pass2) {
            $sql = "
                INSERT INTO
                    users (`name`,`password`,`email`,`birthdate`)
                VALUES
                    ('$fullname','$pass1','$email','$birthdate')
            ";

            if($conn->query($sql) === TRUE) {
                echo 'Dados salvos com sucesso!';
            } else {
                echo 'Erro!' . $sql . '<br>' .$conn->error;
            }
        }

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