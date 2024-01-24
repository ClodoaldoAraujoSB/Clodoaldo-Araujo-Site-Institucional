<?php

session_start();
if(isset($_SESSION['autorizado']) && $_SESSION['autorizado'] == true) {
    include('../bd/bd.php');

    $sql = $conn->query("SELECT * FROM curso");

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['excluir_arquivo'])) {
        // Obtém os dados do formulário
        $nome = $_POST["excluir_arquivo"];

        $sql_verifica_nome = $conn->query("SELECT nome, imagem FROM curso WHERE nome = '" . $nome . "'");

        if ($sql_verifica_nome->num_rows > 0) {
            // Obtem os dados da ferramenta
            $ferramenta = $sql_verifica_nome->fetch_assoc();
            $imagem_a_excluir = $ferramenta["imagem"];
            echo $imagem_a_excluir;

            // Exclui o arquivo de imagem
            if (file_exists($imagem_a_excluir)) {
                unlink($imagem_a_excluir);
            }

            // Exclui a entrada no banco de dados
            $query_excluir = "DELETE FROM curso WHERE nome = '$nome'";
            $conn->query($query_excluir);

            header('Refresh:0');
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos Admin || Clodoaldo Araújo</title>

    <style>

        .conteiner {
            margin-top: 100px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .add_curso {
            padding: 20px;
            background-color: aliceblue;
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .Input {
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>

</head>
<body>

    <!-- MENU - INICIO -->
    <?php include("../admin/header.php"); ?>
    <!-- MENU - FINAL -->

    <div class="conteiner">
        <!-- ADICAO DE CURSOS - INICIO -->
        <div class="add_curso">
            <form class="file-form" method="post" action="upload_curso.php" enctype="multipart/form-data">
            
            <div class="Input">
                <label for="nome">Nome:</label>
                <input class="form-field" type="text" name="nome" required><br>
            </div>

            <div class="Input">
                <label for="arquivo">Imagem:</label>
                <input class="form-field" type="file" name="imagem" required><br>
            </div>

            <div class="Input">
                <select id="ambiente" name="ambiente">
                    <option value="1">Online</option>
                    <option value="2">Presencial</option>
                </select>
            </div>

            <div class="Input">
                <label for="preco_antigo">Preço antigo:</label>
                <input class="form-field" type="text" name="preco_antigo" required><br>
            </div>

            <div class="Input">
                <label for="preco_atual">Preço atual:</label>
                <input class="form-field" type="text" name="preco_atual" required><br>
            </div>

            <input type="submit" class="form-control" id="submit_form" value="Enviar">

            </form>
        </div>
        <!-- ADICAO DE CURSOS - FINAL -->

        <!-- LISTAGEM DE CURSOS - INICIO -->
        <div class="list_curso">
            <table style="margin-top: 30px;">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Imagem</th>
                        <th>Preco Atual</th>
                        <th>Preco Antigo</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                    
                    foreach ( $sql as $ferramenta ) {

                        $nome = $ferramenta["nome"];
                        echo "<tr>";

                        echo "<td>" . $nome . "</td>";

                        if ($ferramenta["ambiente"] == 1) {
                            echo "<td>Online</td>";
                        } else {
                            echo "<td>Presencial</td>";
                        }

                        echo "<td><img src=" . $ferramenta["imagem"] .  " width='200' height='350'></td>";
                        echo "<td>" . $ferramenta["preco_atual"] . "</td>";
                        echo "<td>" . $ferramenta["preco_antigo"] . "</td>";                        

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
        </div>
        <!-- LISTAGEM DE CURSOS - FINAL -->
    </div>

    <!-- RODAPE - INICIO -->
    <?php include("../admin/footer.php"); ?>
    <!-- RODAPE - FINAL -->
    
</body>
</html>

<?php

}
else {
  echo "Acesso não autorizado";
}

?>