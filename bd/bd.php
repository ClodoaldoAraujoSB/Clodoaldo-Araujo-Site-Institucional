<?php

    // Dados de conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clodoaldo_site";

    // Criando uma conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    } else {
        // echo "Conexão bem-sucedida";
    }

?>
