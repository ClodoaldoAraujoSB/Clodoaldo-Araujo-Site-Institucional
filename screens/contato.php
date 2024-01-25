<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato || Clodoaldo Araújo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>

        body{
            background-color: #282828;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .session-contato {
            background-image: url("../logos/Formulario\ \(1\)\ \(1\).jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position-y: -100px;
        }

        .content {
            flex: 1; /* Cresce para ocupar o espaço restante */
            background-color: black;
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
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .row {
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0px 20px 0px;
        }

        .col {
            width: 100%;
        }

        .style_input{
            width: 100%;
            padding-left: 10px;
            border-radius: 20px;
            color: #e2e2e2;
            background-color: #282828;
            border: 1px solid #BE0009;
        }

        .style_input_text {
            width: 100%;
            padding-left: 10px;
            border-radius: 10px;
            color: #e2e2e2;
            background-color: #282828;
            border: 1px solid #BE0009;
        }

        input:focus,
        input:active {
            outline: none;
        }

        textarea:focus,
        textarea:active {
            outline: none;
        }

        input::placeholder {
            opacity: 50%;
            color: white;
        }

        textarea::placeholder {
            opacity: 50%;
            color: white;
        }

        input[type="submit"] {
            background-color: #BE0009;
            color: white;
            border: 0px;
            padding: 1px;
            border-radius: 20px;
        }

        input[type="submit"]:hover {
            transform: scale(1.1);
        }

    </style>

</head>
    <body>
        <!-- MENU SUPERIOR - INICIO -->
        <?php 
        $caminho = $_SERVER['PHP_SELF'];
        include("header.php"); 
        ?>
        <!-- MENU SUPERIOR - FINAL -->

        <div class="session-contato">

            <!-- TITULO - INICIO -->
            <!-- <h1 class="titulo_principal">Entre em contato comigo</h1> -->
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

                    $conn->query("INSERT INTO contato (nome, email, telefone, cidade, idade, comentario) VALUES ( '$nome', '$email', '$telefone', '$cidade', '$idade', '$comentario')");
                    $conn->close();

                    echo '<script>alert("Formulário enviado com sucesso!");</script>';

                }

                ?>

            <div class="container-form">
                <div class="row">
                    <div class="col"></div>
                </div>
                <div class="row" style="padding-right: 15px;">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="col" style="margin-top: 16px;">
                            <div class="mb-3">
                                <h5 style="color: #e2e2e2; padding-left: 7px;">Contato</h5>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="style_input" id="nome_form" name="nome" placeholder="Nome" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="style_input" id="email_form" name="email" placeholder="Email" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="style_input" id="telefone_form" name="telefone" placeholder="Telefone" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="style_input" id="cidade_form" name="cidade" placeholder="Cidade" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <input type="number" class="style_input" id="cidade_form" name="idade" placeholder="Idade" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <textarea class="style_input_text" id="comentario_form" name="comentario" placeholder="Comentario" rows="5" autocomplete="off" style="resize: none;"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="form-control" id="submit_form" value="Enviar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="content"></div>

        <!-- RODAPÉ - INICIO -->
        <?php include("footer.php"); ?>
        <!-- RODAPÉ - FINAL -->
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
