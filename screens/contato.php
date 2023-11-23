<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato || Clodoaldo Araújo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>

        body{
            background-color: #c9d6ff;
            background: linear-gradient(to right, #e2e2e2, #c9d6ff);
        }

        .titulo_principal {
            text-align: center;
            padding: 20px;
            font-family: Montserrat, sans serif;
        }

        .container-form {
            margin: 0 auto;
            width: 90%;
            display: flex;
            justify-content: space-between;
        }

        .row {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .col {
            width: 80%;
        }

        input[type="submit"] {
            background-color: #BE0009;
            color: white;
        }

        input[type="submit"]:hover {
                background-color: white;
                color: #BE0009;
        }

    </style>

</head>
    <body>
        <!-- MENU SUPERIOR - INICIO -->
        <?php include("header.php"); ?>
        <!-- MENU SUPERIOR - FINAL -->

        <!-- TITULO - INICIO -->
        <h1 class="titulo_principal">Entre em contato comigo</h1>
        <!-- TITULO - FINAL -->

        <?php

            include('../bd/bd.php');
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $telefone = $_POST["telefone"];
                $cidade = $_POST["cidade"];
                $idade = $_POST["idade"];
                $comentario = $_POST["comentario"];

                date_default_timezone_set('America/Sao_Paulo');
                $data_envio = date('d-m-Y H:i:s');

                $conn->query("INSERT INTO contato (nome, email, telefone, cidade, idade, comentario, data_envio) VALUES ( '$nome', '$email', '$telefone', '$cidade', '$idade', '$comentario', '$data_envio')");
                $conn->close();

                echo '<script>alert("Formulário enviado com sucesso!");</script>';

            }

            ?>

        <div class="container-form">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <input type="text" class="form-control" id="nome_form" name="nome" placeholder="Nome">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email_form" name="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" id="telefone_form" name="telefone" placeholder="Telefone">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="cidade_form" name="cidade" placeholder="Cidade">
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control" id="cidade_form" name="idade" placeholder="Idade">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="comentario_form" name="comentario" placeholder="Comentario" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control" id="submit_form" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>

        <!-- RODAPÉ - INICIO -->
        <?php include("footer.php"); ?>
        <!-- RODAPÉ - FINAL -->
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
