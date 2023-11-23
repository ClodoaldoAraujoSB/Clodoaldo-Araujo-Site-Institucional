<?php

session_start();
if(isset($_SESSION['autorizado']) && $_SESSION['autorizado'] == true) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['excluir_arquivo'])) {
            $nomeArquivo = $_POST['excluir_arquivo'];

            // Construa o caminho completo do arquivo, substitua '/caminho/para/sua/pasta' pelo caminho real
            $caminhoArquivo = '../img/' . $nomeArquivo;

            // Verifica se o arquivo existe antes de excluí-lo
            if (file_exists($caminhoArquivo)) {
                unlink($caminhoArquivo); // Exclui o arquivo
            } else { }
        }
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio de Imagens | Admin - Clodoaldo</title>
    
    <style>

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .div-addImage {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .meu-botao {
            background-color: white;
            color: black;
            border: 2px solid black;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }

        .meu-botao:hover {
            background-color: black;
            color: white;
        }

    </style>

</head>
<body>

    <!-- MENU SUPERIOR -->
    <?php include("header.php"); ?>

    <!-- TITULO -->
    <h1 style="text-align: center; margin-top: 70px;">Adicionar Imagens</h1>

    <!-- ADICIONAR IMAGEM - INICIO -->
    <div class="div-addImage">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="card-body">
                    <form action="upload_image.php" method="post" enctype="multipart/form-data">
                        <h5 class="card-title" style="text-align: center;">Escolha um arquivo:</h5>
                        <input type="file" name="file" id="file"><br>
                        <div class="div-addImage">
                            <input type="submit" value="Enviar" class="meu-botao">
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ADICIONAR IMAGEM - FINAL -->

    <!-- TITULO -->
    <h1 style="text-align: center; margin-top: 20px;">Relatorio de Imagens</h1>

    <!-- TABELA DE IMAGENS - INICIO -->
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Imagem</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            
        <?php
        // Caminho da pasta que você deseja listar
        $caminhoPasta = '../img';
        $listaArquivos = scandir($caminhoPasta);

        foreach ($listaArquivos as $arquivo) {
            if ($arquivo != '.' && $arquivo != '..') {
                echo "<tr>";

                echo "<td>$arquivo</td>";
                echo "<td><img src='../img/$arquivo' style='width: 100px;'></td>";
                echo    "<td>
                            <form method='post'>
                                <button type='submit' name='excluir_arquivo' style='width: 150px; height: 50px;' class='meu-botao' value='$arquivo'>$arquivo</button>
                            </form>
                        </td>";
                
                echo "</tr>";
            }
        }
        ?>

        </tbody>
    </table>
    <!-- TABELA DE IMAGENS - FINAL -->

    <!-- RODAPÉ -->
    <?php include("footer.php"); ?>

</body>
</html>

<?php
}
else {
  echo "Acesso não autorizado";
}

?>