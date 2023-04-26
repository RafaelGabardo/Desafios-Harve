<?php
    // $host = 'localhost';
    // $dbname = 'desafio5';
    // $user = 'root';
    // $password = 'root';

    // if(isset($_POST['submit'])) {
    //     $pdoOptions = [
    //         PDO::ATTR_PERSISTENT => TRUE,
    //         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    //     ];

    //     try {
    //         $pdoConnect = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $password, $pdoOptions);
    //     } catch(PDOException $exc) {
    //         echo $exc->getMessage();
    //         exit;
    //     }

    //     $fullname = $_POST['fullname'];
    //     $birthdate = $_POST['birthdate'];
    //     $email = $_POST['email'];
    //     $pass1 = $_POST['pass1'];
    //     $pass2 = $_POST['pass2'];

    //     if($pass1 === $pass2) {
    //         $pass2 = $pass1;

    //         $pdoQuery = 'INSERT INTO `users`(`name`,`birthdate`,`email`,`password`) VALUES (:fullname,:birthdate,:email,:pass1)';

    //         $pdoResult = $pdoConnect->prepare($pdoQuery);

    //         $pdoEnsure = [':fullname'=>$fullname,':birthdate'=>$birthdate,':email'=>$email,':pass1'=>$pass1];

    //         $pdoExec = $pdoResult->execute($pdoEnsure);

    //         if($pdoExec) {
    //             echo 'Dados salvos';
    //         } else {
    //             echo 'Erro!';
    //         }
    //     }
    // }

    // $host = 'localhost';
    // $user = 'root';
    // $password = '';
    // $dbname = 'desafio5';

    // $conn = new mysqli($host, $user, $password, $dbname);

    // if($conn->connect_error) {
    //     die('Erro de conexão: ' . $conn->connect_error);
    // }

    // if(isset($_POST['submit'])) {
    //     $fullname = $_POST['fullname'];
    //     $birthdate = $_POST['birthdate'];
    //     $email = $_POST['email'];
    //     $pass1 = $_POST['pass1'];
    //     $pass2 = $_POST['pass2'];

    //     if($pass1 === $pass2) {
    //         $sql = "
    //             INSERT INTO
    //                 users (`name`,`password`,`email`,`birthdate`)
    //             VALUES
    //                 (:fullname,:pass1,:email,:birthdate)
    //         ";

    //         $ensure = [':fullname'=>$fullname,':pass1'=>$pass1,':email'=>$email,':birthdate'=>$birthdate];

    //         $toghether = array_merge($sql, $ensure);

    //         if($conn->query($toghether) === TRUE) {
    //             echo 'Novos dados salvos';
    //         } else {
    //             echo 'ERRO: ' . $sql . '<br>' . $conn->error;
    //         }
    //     }
    // }

    // $conn->close();
?>