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
        display: grid;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
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

    input[type="submit"] {width: 375px}
</style>

    <script>

        function ferramentaAceita() {
            alert("Ferramenta adicionada");
        }

        function ferramentaRecusada() {
            alert("Ferramenta não adicionada");
        }

    </script>

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

            $query = "INSERT INTO ferramentas (nome, descricao, imagem, arquivo, nome_arquivo) VALUES ('$nome', '$descricao', '$caminhoCompleto_imagem', '$caminhoCompleto_arquivo', '$nome_arquivo')";
            $conn->query($query);
            // Lembre-se de ajustar os detalhes da conexão e da consulta conforme necessário
            echo '<script> ferramentaAceita() </script>';
        } else {
            echo '<script> ferramentaRecusada() </script>';
        }
    }
    ?>
    <form class="file-form" method="post" enctype="multipart/form-data">
        
        <label for="nome">Nome:</label>
        <input class="form-field" type="text" name="nome" required><br>

        <label for="descricao">Descrição:</label>
        <input class="form-field" type="text" name="descricao" required><br>

        <label for="arquivo">Nome do arquivo:</label>
        <input class="form-field" type="text" name="nome_arquivo" required><br>
        
        <label for="arquivo">Arquivo:</label>
        <input class="form-field" type="file" name="arquivo" required><br>

        <label for="arquivo">Imagem:</label>
        <input class="form-field" type="file" name="imagem" required><br>

        <input type="submit" class="form-control" id="submit_form" value="Enviar">
    </form>

    <?php include("../admin/footer.php"); ?>
</body>
</html>