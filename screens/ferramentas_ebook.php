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
            $sql_ferramenta = $conn->query("SELECT * FROM ferramentas WHERE categoria = " . $opcao);
        } else if ($opcao != 0 && !empty($texto)) {
            $sql_ferramenta = $conn->query("SELECT * FROM ferramentas WHERE categoria = " . $opcao . " AND nome LIKE '%" . $texto . "%'");
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

            body {
                background-color: #282828;
            }

            .titulo_ferramentas {
                margin-top: 10px;
                text-align: center;
            }

            .session_pesquisa {
                padding: 0px 0px 20px 0px;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #282828;
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

            .session_ferramentas {
                display: flex;
                justify-content: center;
                background-color: #282828;
            }

            .container_ferramentas {
                width: 87%;
                padding: 20px 5px 5px 5px;
                border: 1px solid #c10109;
                margin-bottom: 20px;
                border-radius: 20px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: #161616;
            }

            .container-list {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }

            .div_pesquisa {
                width: 90%;
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
                margin: 0px 0px 0px 10px;
                display: flex;
                justify-content: center;
            }

            .text_form_pesquisa {
                width: 90%;
                margin: 0px 10px 0px 10px;
                background-color: #161616;
                color: #e2e2e2;
            }

            .drop_form_pesquisa {
                width: 15%;
                margin: 0px 10px 0px 0px;
            }

            .card_ferramenta{
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }

            .titulo-ferramenta {
                padding: 10px 0px 10px 0px;
                color: #e2e2e2;
            }

            .ferramenta_linha {
                width: 93%;
            }

            .ferramenta_div_texto {
                width: 70%;
                color: #e2e2e2;
            }

            body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            .content {
                flex: 1; /* Cresce para ocupar o espaço restante */
            }

            .div_pesquisa_form {
                display: flex;
                width: 85%;
            }

            .form-control {
                background-color: #161616;
                color: #e2e2e2;
            }

            @media only screen and (max-width: 768px) {

                .form_pesquisa {
                    flex-direction: column;
                }

                .drop_form_pesquisa {
                    width: 100%;
                }

                .text_form_pesquisa {
                    margin: 0px;
                    margin-right: 10px;
                    width: 60%;
                }

                .btn_form_pesquisa {
                    width: 40%;
                }

                .ferramenta_div_texto {
                    width: 100%;
                }

                .row {
                    flex-direction: column;
                }

            }

        </style>

        <script>

            function mostrarObrigado() {
                alert("Obrigado!!");
            }

        </script>
    
    </head>
    <body>
        <!-- MENU SUPERIOR - INICIO -->
        <?php
        $caminho = $_SERVER['PHP_SELF'];
        include("header.php"); 
        ?>
        <!-- MENU SUPERIOR - FINAL -->

        <!-- TITULO
            <h1 class="titulo_ferramentas">Ferramentas</h1>
        -->

        <div class="session_pesquisa" style="padding: 10px 0px 0px 0px;">
            <div class="container_pesquisa">
                <div class="busca_pesquisa">
                    <div class="div_pesquisa">
                        <div class="drop_form_pesquisa">
                            <h6 style="margin: 0px 0px 2px 0px;">Ferramentas</h6>    
                        </div>
                        <div class="text_form_pesquisa"></div>
                        <div class="btn_form_pesquisa"></div>    
                    </div>
                </div>
            </div>
        </div>

        <!-- CAMPO DE PESQUISA - INICIO -->
        <div class="session_pesquisa">
            <div class="container_pesquisa">
                <div class="busca_pesquisa">
                    <div class="div_pesquisa">
                        <form class="form_pesquisa" action="ferramentas_ebook.php" method="POST">
                            <div class="drop_form_pesquisa">
                                <select class="form-select" aria-label="Seleção de topico" id="select_pesquisa" name="select_pesquisa">
                                    <option selected disabled>Categoria:</option>
                                    <option value="0">Todos</option>
                                    <option value="1">Meta e Planejamento</option>
                                    <option value="2">Empreendedorismo</option>
                                    <option value="3">Liderança</option>
                                    <option value="4">Negociação e Vendas</option>
                                </select>
                            </div>
                            <div class="div_pesquisa_form">
                                <div class="text_form_pesquisa">
                                    <input type="text" class="form-control" id="input_pesquisa" name="input_pesquisa" placeholder="Digite a ferramenta que procura:">
                                </div>
                                <div class="btn_form_pesquisa">
                                    <input class="btn" style="background: #c10109; color: white;" type="submit" value="Pesquisa">
                                </div>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- LISTA DE FERRAMENTAS -->
        <div class="session_ferramentas">
            <div class="container_ferramentas">
                <div class="ferramenta_linha">
                    <h3 style="font-size: 20px; color: #e2e2e2;">Ferramentas</h3>
                    <div class="ferramenta_div_texto">
                        <p style="font-size: 13px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pellentesque vulputate nisl id pretium. Aenean eget magna iaculis lorem ultricies convallis quis ac velit. Maecenas mattis nisl nec dui aliquam luctus. Quisque massa nulla, ornare sit amet consequat eget, vestibulum at mi. Morbi sit amet dui vel arcu congue finibus at ut turpis. Aenean et diam libero. Aliquam faucibus sodales pharetra. Nunc vel sapien suscipit, lacinia dui non, laoreet nibh. Quisque at lacinia tortor, a semper ex. Cras nec magna in nibh iaculis interdum vel vitae tortor. Nulla eget lorem vitae orci ultricies feugiat non eleifend lacus. Mauris egestas commodo tortor ut commodo.</p>
                    </div>
                </div>
                <div class="container-list">
                    <div class="row" style="display: flex; justify-content: center;">
                    <?php
                    $contador = 0;
                    foreach ($sql_ferramenta as $ferramenta) {
                        $contador++;
                    ?>
                        <div class="col" style="display: flex; justify-content: center; width: 225px;">
                            <div class="card mb-3" style="width: 90%; flex-direction: column; border: 0px; background-color: transparent">
                                <div class="row g-0" style="flex-grow: 1;">
                                    <div class="col" style="display: flex; flex-direction: column;">
                                        <div style="display: flex; justify-content: center;">
                                            <img src="../<?php echo $ferramenta["imagem"] ?>" class="img-fluid rounded-start" alt="..." style="height: 100px; width: 225px;">
                                        </div>
                                        <div class="card-body card_ferramenta" id="card-ferramenta" style="padding: 0px;"> <!-- style="display: flex; flex-direction: column; align-items: center; text-align:center;" -->
                                            <div class="titulo-ferramenta">
                                                <h5 class="card-title" style="font-size: 18px;"> <?php echo $ferramenta["nome"]; ?> </h5>
                                            </div>
                                            <div class="botão-ferramenta">
                                                <a href="../<?php echo $ferramenta["arquivo"] ?>" download="<?php echo $ferramenta["nome_arquivo"] ?>" onclick="mostrarObrigado()" class="btn" style="background: #c10109; color: white; border-radius: 7px; padding: 0px 10px 2px 10px;">Download</a>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        if ($contador == 5) {
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

        <div class="content"></div>

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
