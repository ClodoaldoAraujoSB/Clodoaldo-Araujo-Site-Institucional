<?php
session_start();
if (isset($_SESSION['autorizado']) && $_SESSION['autorizado'] == true) {
    include("../bd/bd.php");
    $sql_ferramenta = $conn->query("SELECT * FROM ferramentas");
    $conn->close();
    ?>

    <!doctype html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ferramentas Gratuitas || Clodoaldo Araújo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
        <style>

            .container-list {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
            }

        </style>

        <script>

            function mostrarObrigado() {
                alert("Obrigado!!");
            }

        </script>
    
    </head>
    <body>
        <!-- MENU SUPERIOR -->
        <?php include("header.php"); ?>

        <!-- TITULO -->
        <h1 style="text-align: center">Lista de Ferramentas</h1>

        <!-- LISTA DE FERRAMENTAS -->
        <div class="container">
            <div class="container-list">
            <?php
            foreach ($sql_ferramenta as $ferramenta) {
            ?>

                <div class="card mb-3" style="width: 70%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../<?php echo $ferramenta["arquivo"] ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body" id="card-ferramenta">
                                <h5 class="card-title"> <?php echo $ferramenta["nome"]; ?> </h5>
                                <p class="card-text"> <?php echo $ferramenta["descricao"]; ?> </p>
                                <a href="<?php echo $ferramenta["arquivo"] ?>" download="<?php echo $ferramenta["arquivo"] ?>" onclick="mostrarObrigado()" class="btn btn-primary">Baixe aqui</a>
                            </div>
                        </div>
                    </div>
                </div>
            
            <?php
            }
            ?>
            </div>
        </div>

        <!-- RODAPÉ -->
        <?php include("footer.php"); ?>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>

    <?php
        // Limpar a variável de sessão para evitar reutilização
        unset($_SESSION['autorizado']);
    } else {
        // Redireciona para a página de login se não estiver autenticado
        header("Location: ../screens/login/index.php");
        exit();
    }
?>
