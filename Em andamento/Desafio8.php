<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio 8</title>
    <?php
        if(isset($_POST['submit'])) {
            $address = $_POST['address'];

            if(!preg_match('/^[0-9]{5,5}([- ]?[0-9]{3,3})?$/', $address)) {
                die('CEP inválido');
            }

            $consult = $_GET['https://example.api.findcep.com'];

            $addressConsult = $_REQUEST[$consult];

            $correct = extract($addressConsult);

            if($address == $correct) {
                echo $address;
            }
        }
    ?>
</head>
<body>
    <form action="Desafio8.php" method="$_POST">
        <label for="address">Insira seu CEP:</label> <br>
        <input type="text" name="address"> <br><br>
        <input type="submit" value="Enviar" name="submit">
    </form>
</body>
</html>