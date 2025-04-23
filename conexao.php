<?php
    $hostname = "localhost";
    $bancodedados = "se_bank";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

    // Se exixtir um erro, vai mostrar nessa conexão
    // Connect_erro, significa connect error Number (irá retornar o número do erro)
    // if ($mysqli->connect_error) {
    //     echo "Falha ao conectar";
    // } else {
    //     echo "Conectado com sucesso!";
    // }
?>