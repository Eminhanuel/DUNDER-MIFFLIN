<?php

require('./config/dbconfig.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $celular = mysqli_real_escape_string($conn, trim($_POST['celular']));
    $cep = mysqli_real_escape_string($conn, trim($_POST['cep']));
    $uf = mysqli_real_escape_string($conn, trim($_POST['uf']));
    $cidade = mysqli_real_escape_string($conn, trim($_POST['cidade']));
    $numero = mysqli_real_escape_string($conn, trim($_POST['numero']));
    $complemento = mysqli_real_escape_string($conn, trim($_POST['complemento']));
    $pagamento = mysqli_real_escape_string($conn, trim($_POST['forma_pagamento']));

    $senha = mysqli_real_escape_string($conn, trim($_POST['senha']));



    $sql = "INSERT INTO `cliente` (`nome`, `email`, `celular`, `senha`, `cep`, `uf`, `cidade`, `numero`, `complemento`, `pagamento`) VALUES ('$nome', '$email', '$celular', '$senha',
'$cep', '$uf', '$cidade', '$numero', '$complemento', '$pagamento')";



if (mysqli_query($conn, $sql)) {
    echo "Cadastro conluído com sucesso!";
    print "<script>location.href='../public/view/index.php';</script>";
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conn);
} 


}