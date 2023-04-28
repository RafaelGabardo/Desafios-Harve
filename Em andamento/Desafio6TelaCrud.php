<?php
    // Incluindo os arquivos abaixo para executarem suas funções
    include_once('Desafio6CrudConnection.php'); 
    include_once('Desafio6CrudDelete.php');
    include_once('Desafio6CrudSelect.php');
    include_once('Desafio6CrudUpdate.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tela Crud</title>
</head>
<body>
    <form action="Desafio6TelaCrud.php" method="POST">
        <input type="text" name="updateName" placeholder="Digite o nome para atualizar"> <br>
        <input type="submit" name="update" value="Atualizar"> <br><br>
        <input type="text" name="deleteName" placeholder="Digite o nome para deletar"> <br>
        <input type="submit" name="delete" value="Deletar">
    </form>
</body>
</html>