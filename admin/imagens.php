<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['excluir_arquivo'])) {
        $nomeArquivo = $_POST['excluir_arquivo'];

        // Construa o caminho completo do arquivo, substitua '/caminho/para/sua/pasta' pelo caminho real
        $caminhoArquivo = '../img/' . $nomeArquivo;

        // Verifica se o arquivo existe antes de excluí-lo
        if (file_exists($caminhoArquivo)) {
            unlink($caminhoArquivo); // Exclui o arquivo
            echo "Arquivo '$nomeArquivo' excluído com sucesso!";
        } else {
            echo "Arquivo '$nomeArquivo' não encontrado!";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
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

    </style>

</head>
<body>
    
    <h1 style="text-align: center; margin-top: 70px;">Relatorio de contatos</h1>

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
                                <button type='submit' name='excluir_arquivo' value='$arquivo'>$arquivo</button>
                            </form>
                        </td>";
                
                echo "</tr>";
            }
        }
        ?>

        </tbody>
    </table>

</body>
</html>
