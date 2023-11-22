<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Envio de Arquivo</title>
</head>

<style>

    body {
        background-color: #c9d6ff;
        background: linear-gradient(to right, #e2e2e2, #c9d6ff);
    }

    .file-form {
        margin-top: 100px;
        margin-left: 100px;
    }
    
    .form-field {
        margin: 12px;
    }

    input[type="submit"] {
        background-color: #BE0009;
        color: white;
    }

    input[type="submit"]:hover {
        background-color: white;
        color: #BE0009;
    }

    input[type="submit"] {width: 300px}

</style>

<body>
  <?php include("../admin/header.php"); ?>

    <h2>Envio de Arquivo</h2>

    <?php
    include('../bd/bd.php');
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os dados do formulário
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];

        // Configurações para o upload do arquivo
        $diretorioDestino = "../ferramentas/";
        $caminhoCompleto = $diretorioDestino . basename($_FILES["arquivo"]["name"]);

        // Move o arquivo para o diretório de destino
        if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $caminhoCompleto)) {
            // Agora você pode armazenar o caminho no banco de dados
            // Exemplo: Você precisa configurar a conexão com o banco de dados antes de usar a seguinte linha
            // $conexao = new mysqli("localhost", "usuario", "senha", "banco_de_dados");
            $query = "INSERT INTO ferramentas (nome, descricao, arquivo) VALUES ('$nome', '$descricao', '$caminhoCompleto')";
            $conn->query($query);
            // Lembre-se de ajustar os detalhes da conexão e da consulta conforme necessário
            echo "Arquivo enviado com sucesso!";
        } else {
            echo "Erro ao enviar o arquivo.";
        }
    }
    ?>
    <form class="file-form" method="post" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input class="form-field" type="text" name="nome" required><br>

        <label for="descricao">Descrição:</label>
        <input class="form-field" type="text" name="descricao" required><br>

        <label for="arquivo">Arquivo:</label>
        <input class="form-field" type="file" name="arquivo" required><br>

        <input type="submit" class="form-control" id="submit_form" value="Enviar">
    </form>
</body>
</html>
<?php include("../admin/footer.php"); ?>