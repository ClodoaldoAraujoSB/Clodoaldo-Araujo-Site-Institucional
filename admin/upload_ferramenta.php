<?php

include('../bd/bd.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST["nome"];

    $sql_verifica_nome = $conn->query("SELECT nome FROM ferramentas WHERE nome = '" . $nome . "'");

    if ($sql_verifica_nome->num_rows <= 0) {
        $nome_arquivo = $_POST["nome_arquivo"];

        // Configurações para o upload do arquivo
        $diretorioDestino = "../ferramentas/";
        $diretorioDestino_img = "../ferramentas/img/";
        $caminhoCompleto_arquivo = $diretorioDestino . basename($_FILES["arquivo"]["name"]);
        $caminhoCompleto_imagem = $diretorioDestino_img . basename($_FILES["imagem"]["name"]);

        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $caminhoCompleto_arquivo)) {
            move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminhoCompleto_imagem);

            $diretorioDestino = "ferramentas/";
            $diretorioDestino_img = "ferramentas/img/";
            $caminhoCompleto_arquivo = $diretorioDestino . basename($_FILES["arquivo"]["name"]);
            $caminhoCompleto_imagem = $diretorioDestino_img . basename($_FILES["imagem"]["name"]);

            $query = "INSERT INTO ferramentas (nome, imagem, arquivo, nome_arquivo) VALUES ('$nome', '$caminhoCompleto_imagem', '$caminhoCompleto_arquivo', '$nome_arquivo')";
            $conn->query($query);
            // Lembre-se de ajustar os detalhes da conexão e da consulta conforme necessário
            header("Location: ferramentas.php");


        } else {
            echo '<script> ferramentaRecusada() </script>';
        }
    }
}

?>