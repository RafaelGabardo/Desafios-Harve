<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Log in/Sign in</title>
</head>
<body>
    <form method="$_POST" action="DbConnDesafio6.php">
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