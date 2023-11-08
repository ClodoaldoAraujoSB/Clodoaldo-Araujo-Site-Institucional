<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato || Clodoaldo Araújo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>

        .titulo_principal {
            text-align: center;
            padding: 20px;
        }

        .container-form {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .row {
            width: 80%;
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

        <div class="container-form">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <input type="nome" class="form-control" id="nome_form" placeholder="Nome">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email_form" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <input type="telefone" class="form-control" id="telefone_form" placeholder="Telefone">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="comentario_form" placeholder="Comentario" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control" id="submit_form" value="Enviar">
                    </div>
                </div>
                <div class="col">
                    <!-- Informações sobre outras maneiras de contato -->
                </div>
            </div>
        </div>

        <!-- RODAPÉ - INICIO -->
        <?php include("footer.php"); ?>
        <!-- RODAPÉ - FINAL -->
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
