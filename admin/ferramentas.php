<?php

session_start();
if(isset($_SESSION['autorizado']) && $_SESSION['autorizado'] == true) {
    include('../bd/bd.php');
    $sql_ferramentas = $conn->query("SELECT * FROM ferramentas");

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['excluir_arquivo'])) {
        // Obtém os dados do formulário
        $nome = $_POST["excluir_arquivo"];

        $sql_verifica_nome = $conn->query("SELECT nome, imagem, arquivo FROM ferramentas WHERE nome = '" . $nome . "'");

        if ($sql_verifica_nome->num_rows > 0) {
            // Obtem os dados da ferramenta
            $ferramenta = $sql_verifica_nome->fetch_assoc();
            $imagem_a_excluir = "../" . $ferramenta["imagem"];
            $arquivo_a_excluir = "../" . $ferramenta["arquivo"];
            echo $imagem_a_excluir;
            echo $arquivo_a_excluir;

            // Exclui o arquivo de imagem
            if (file_exists($imagem_a_excluir)) {
                unlink($imagem_a_excluir);
            }

            // Exclui o arquivo principal
            if (file_exists($arquivo_a_excluir)) {
                unlink($arquivo_a_excluir);
            }

            // Exclui a entrada no banco de dados
            $query_excluir = "DELETE FROM ferramentas WHERE nome = '$nome'";
            $conn->query($query_excluir);

            header('Refresh:0');
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ferramentas Admin || Clodoaldo Araújo</title>

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

        img {
            width: 300px;
        }

        body {
            background-color: #c9d6ff;
            background: linear-gradient(to right, #e2e2e2, #c9d6ff);
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

</head>
<body>
  <?php include("../admin/header.php"); ?>

    <h2 style="margin-top: 50px; display: flex; justify-content: center; align-items: center;">Envio de Arquivo</h2>

    <form class="file-form" method="post" action="upload_ferramenta.php" enctype="multipart/form-data">
        
        <label for="nome">Nome:</label>
        <input class="form-field" type="text" name="nome" required><br>

        <label for="arquivo">Nome do arquivo:</label>
        <input class="form-field" type="text" name="nome_arquivo" required><br>
        
        <label for="arquivo">Arquivo:</label>
        <input class="form-field" type="file" name="arquivo" required><br>

        <label for="arquivo">Imagem:</label>
        <input class="form-field" type="file" name="imagem" required><br>

        <input type="submit" class="form-control" id="submit_form" value="Enviar">
    </form>

    <table style="margin-top: 30px;">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Nome do Arquivo</th>
                <th>Arquivo</th>
                <th>Imagem</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            
            foreach ( $sql_ferramentas as $ferramenta ) {

                $nome = $ferramenta["nome"];
                echo "<tr>";

                echo "<td>" . $nome . "</td>";
                echo "<td>" . $ferramenta["nome_arquivo"] . "</td>";
                echo "<td>" . $ferramenta["arquivo"] . "</td>";
                echo "<td><img src=../" . $ferramenta["imagem"] .  "></td>";

                echo    "<td>
                            <form method='post'>
                                <button type='submit' name='excluir_arquivo' style='width: 150px; height: 50px;' class='meu-botao' value='$nome'>$nome</button>
                            </form>
                        </td>";

                echo "</tr>";
            }
            
            ?>

        </tbody>
    </table>

    <?php include("../admin/footer.php"); ?>
</body>
</html>

<?php

}
else {
  echo "Acesso não autorizado";
}

?>