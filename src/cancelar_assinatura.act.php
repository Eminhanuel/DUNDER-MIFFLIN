<?php
require('./config/dbconfig.php');

$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$senha = mysqli_real_escape_string($conn, trim($_POST['senha']));



$sqllogin = "SELECT COUNT(id) as linhas FROM `cliente` WHERE `email` = '$email' AND  `senha` = '$senha'";
$result = mysqli_query($conn, $sqllogin);


while ($linha = mysqli_fetch_array($result)) {
    
    if ($linha['linhas'] > 0) {
        

        $sql = "DELETE FROM `cliente` WHERE `email` = '$email'";
        if ($conn->query($sql) === TRUE) {
            echo "Assinatura cancelada!";

        }

    } else{
        echo "email ou senha incorreta!";

    }
}



