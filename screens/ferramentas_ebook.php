<?php
session_start();
if (isset($_SESSION['autorizado']) && $_SESSION['autorizado'] == true) {
    
    include("../bd/bd.php");
    $sql_ferramenta = $conn->query("SELECT * FROM ferramentas");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["select_pesquisa"])) {
            $opcao = 0;
        } else {
            $opcao = $_POST["select_pesquisa"];
        }

        if (empty($_POST["input_pesquisa"])) {
            $texto = "";
        } else {
            $texto = $_POST["input_pesquisa"];
        }

        if ($opcao == 0 && empty($texto)) {
            $sql_ferramenta = $conn->query("SELECT * FROM ferramentas");
        } else if ($opcao == 0 && !empty($texto)) {
            $sql_ferramenta = $conn->query("SELECT * FROM ferramentas WHERE nome LIKE '%" . $texto . "%'");
        } else if ($opcao != 0 && empty($texto)) {
            $sql_ferramenta = $conn->query("SELECT * FROM ferramentas WHERE modulo = " . $opcao);
        } else if ($opcao != 0 && !empty($texto)) {
            $sql_ferramenta = $conn->query("SELECT * FROM ferramentas WHERE modulo = " . $opcao . " AND nome LIKE '%" . $texto . "%'");
        }
    }

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

            .titulo_ferramentas {
                margin-top: 10px;
                text-align: center;
            }

            .session_pesquisa {
                margin: 20px 0px 20px 0px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .container_pesquisa {
                width: 100%;
                display: flex;
                margin: 0px 20px 0px 20px;
            }

            .select_pesquisa {
                width: 20%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .busca_pesquisa {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .container_ferramentas{
                padding: 20px 5px 5px 5px;
                border: 1px solid #c10109;
                border-radius: 10px;
                margin: 20px;
            }

            .container-list {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
            }

            .div_pesquisa {
                width: 85%;
            }

            .div_todos {
                width: 15%;
            }

            .form_pesquisa {
                display: flex;
                width: 100%;
            }
            .form_todos {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
            }

            .btn_form_pesquisa {
                width: 10%;
                margin: 0px 10px 0px 10px;
                display: flex;
                justify-content: center;
            }

            .text_form_pesquisa {
                width: 65%;
                margin: 0px 10px 0px 10px;
            }

            .drop_form_pesquisa {
                width: 25%;
                margin: 0px 10px 0px 10px;
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
        <h1 class="titulo_ferramentas">Ferramentas</h1>

        <!-- CAMPO DE PESQUISA - INICIO -->
        <div class="session_pesquisa">
            <div class="container_pesquisa">
                <div class="busca_pesquisa">
                    <div class="div_pesquisa">
                        <form class="form_pesquisa" action="ferramentas_ebook.php" method="POST">
                            <div class="drop_form_pesquisa">
                                <select class="form-select" aria-label="Seleção de topico" id="select_pesquisa" name="select_pesquisa">
                                    <option selected disabled>Categoria:</option>
                                    <option value="1">Financeiro</option>
                                    <option value="2">Operacional</option>
                                </select>
                            </div>
                            <div class="text_form_pesquisa">
                                <input type="text" class="form-control" id="input_pesquisa" name="input_pesquisa" placeholder="Digite a ferramenta que procura:">
                            </div>
                            <div class="btn_form_pesquisa">
                                <input class="btn" style="background: #c10109; color: white;" type="submit" value="Pesquisa">
                            </div>    
                        </form>
                    </div>
                    <div class="div_todos">
                        <form class="form_todos" action="ferramentas_ebook.php" method="POST">
                            <div>
                                <input class="btn" style="background: #c10109; color: white;" type="submit" value="Todas as ferramentas">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- LISTA DE FERRAMENTAS -->
        <div class="session_ferramentas">
            <div class="container_ferramentas">
                <div class="container-list">
                    <div class="row" style="display: flex; justify-content: center;">
                    <?php
                    $contador = 0;
                    foreach ($sql_ferramenta as $ferramenta) {
                        $contador++;
                    ?>
                        <div class="col" style="display: flex; justify-content: center; max-width: 500px;">
                            <div class="card mb-3" style="width: 90%;">
                                <div class="row g-0">
                                    <div class="col">
                                        <div style="display: flex; justify-content: center;">
                                            <img src="../<?php echo $ferramenta["imagem"] ?>" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="card-body" id="card-ferramenta"> <!-- style="display: flex; flex-direction: column; align-items: center; text-align:center;" -->
                                            <h5 class="card-title"> <?php echo $ferramenta["nome"]; ?> </h5>
                                            <!--<p class="card-text"> <?//php echo $ferramenta["descricao"]; ?> </p>-->
                                            <a href="../<?php echo $ferramenta["arquivo"] ?>" download="<?php echo $ferramenta["nome_arquivo"] ?>" onclick="mostrarObrigado()" class="btn" style="background: #c10109; color: white;">Baixe aqui</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        if ($contador == 3) {
                        ?>
                            </div>
                            <div class="row" style="display: flex; justify-content: center;">
                        <?php
                            $contador = 0;
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- RODAPÉ -->
        <?php include("footer.php"); ?>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>

    <?php
        // Limpar a variável de sessão para evitar reutilização
        // unset($_SESSION['autorizado']);
    } else {
        // Redireciona para a página de login se não estiver autenticado
        header("Location: ../screens/login/index.php");
        exit();
    }
?>
