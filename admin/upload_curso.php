<?php

include('../bd/bd.php');

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST["nome"];

    $sql_verifica_nome = $conn->query("SELECT nome FROM curso WHERE nome = '" . $nome . "'");

    if ($sql_verifica_nome->num_rows <= 0) {
        $ambiente = $_POST["ambiente"];
        $preco_antigo = $_POST["preco_antigo"];
        $preco_atual = $_POST["preco_atual"];

        if ($preco_antigo == 0 || $preco_antigo == "0") {
            $preco_antigo = "";
        }

        // Configurações para o upload do arquivo
        $diretorioDestino_img = "../cursos/";
        $caminhoCompleto_imagem = $diretorioDestino_img . basename($_FILES["imagem"]["name"]);

        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminhoCompleto_imagem)) {

            $diretorioDestino_img = "../cursos/";
            $caminhoCompleto_imagem = $diretorioDestino_img . basename($_FILES["imagem"]["name"]);

            $query = "INSERT INTO curso (nome, imagem, ambiente, preco_antigo, preco_atual) VALUES ('$nome', '$caminhoCompleto_imagem', '$ambiente', '$preco_antigo', '$preco_atual')";
            $conn->query($query);
            // Lembre-se de ajustar os detalhes da conexão e da consulta conforme necessário
            header("Location: cursos.php");


        } else {
            echo '<script> cursoRecusado() </script>';
        }
    }
}

?>