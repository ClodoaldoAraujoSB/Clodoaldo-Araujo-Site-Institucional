<?php    

include("../bd/bd.php");
$sql_ferramenta = $conn->query("SELECT * FROM curso");

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
        $sql_ferramenta = $conn->query("SELECT * FROM curso");
    } else if ($opcao == 0 && !empty($texto)) {
        $sql_ferramenta = $conn->query("SELECT * FROM curso WHERE nome LIKE '%" . $texto . "%'");
    } else if ($opcao != 0 && empty($texto)) {
        $sql_ferramenta = $conn->query("SELECT * FROM curso WHERE ambiente = " . $opcao);
    } else if ($opcao != 0 && !empty($texto)) {
        $sql_ferramenta = $conn->query("SELECT * FROM curso WHERE ambiente = " . $opcao . " AND nome LIKE '%" . $texto . "%'");
    }
}

$conn->close();

?>

    <!doctype html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cursos Gratuitos || Clodoaldo Araújo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <style>

            .titulo_ferramentas {
                margin-top: 10px;
                text-align: center;
            }
            .titulo_ferramentas {
                margin-top: 10px;
                text-align: center;
            }

            .session_pesquisa {
                margin: 0px 0px 0px 0px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .session_pesquisa {
                margin: 0px 0px 0px 0px;
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

            .session_curso_principal {
                margin: 50px 0px 50px 0px ;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .mais_vendido_alert {
                background-color: #c10109;
                color: #fff;
                width: fit-content;
                padding: 1px 7px 1px 7px;
                border-radius: 20px;
            }

            .curso_principal {
                width: 80%;
            }

            .descricao_cursos {
                width: 70%;
                padding-left: 35px;
                font-size: 13px;
            }

            .session_ferramentas {
                margin-bottom: 50px;
                display: flex;
                justify-content: center;
            }

            .container_ferramentas {
                width: 87%;
                padding: 20px 5px 5px 5px;
                border: 1px solid #c10109;
                margin-bottom: 20px;
                border-radius: 20px;
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
                width: 8%;
                margin: 0px 0px 0px 10px;
                display: flex;
                justify-content: center;
            }

            .text_form_pesquisa {
                width: 77%;
                margin: 0px 10px 0px 10px;
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
            }

            .botao-ferramenta {

            }

            body {
                display: flex;
                flex-direction: column;
                min-height: 100vh;
            }

            .content {
                flex: 1; /* Cresce para ocupar o espaço restante */
            }

            .btn2 {
                background: #c10109; 
                color: white; 
                border-radius: 7px; 
                padding: 0px 10px 2px 10px;
                border: 1px solid #c10109;
            }

            .btn2:hover {
                transform: scale(1.2);
            }

            .div_pesquisa_form {
                display: flex;
            }

            .mb-3 {
                width: 70%; 
                border: 0px;
            }

            @media screen and (max-width: 768px) {

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

                .mb-3 {
                    width: 100%;
                    border: 0px solid white;
                }

                .descricao_cursos {
                    width: 100%;
                    padding: 15px;
                }

                .row {
                    display: flex;
                    justify-content: center;
                    flex-direction: column;
                }

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

        <!-- BANNER - INICIO -->
        <div class="banner_principal">
            <img src="../logos/Linkedin.jpg" alt="Banner Principal" style="width: -webkit-fill-available;">
        </div>
        <!-- BANNER - FINAL -->

        <!--  -->
        <div class="session_pesquisa" style="margin: 50px 0px 0px 0px;">
            <div class="container_pesquisa">
                <div class="busca_pesquisa">
                    <div class="div_pesquisa">
                        <div class="drop_form_pesquisa">
                            <h6 style="margin: 0px 0px 2px 0px;">Cursos</h6>    
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
                        <form class="form_pesquisa" action="cursos.php" method="POST">
                            <div class="drop_form_pesquisa">
                                <select class="form-select" aria-label="Seleção de topico" id="select_pesquisa" name="select_pesquisa">
                                    <option selected disabled>Categoria:</option>
                                    <option value="0">Todos</option>
                                    <option value="2">Presencial</option>
                                    <option value="1">Distancia</option>
                                </select>
                            </div>
                            <div class="div_pesquisa_form">
                                <div class="text_form_pesquisa">
                                    <input type="text" class="form-control" id="input_pesquisa" name="input_pesquisa" placeholder="Digite o curso que procura:">
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
        <!-- CAMPO DE PESQUISA - FINAL -->

        <!-- MAIS VENDIDO - INICIO -->
        <div class="session_curso_principal">
            <div class="curso_principal">
                <div class="row">
                    <div class="col">
                        <h6>O Mais Vendido</h6>
                        <div class="card mb-3" style="border: 0px;">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="../cursos/ede.jpg" class="img-fluid rounded-start" alt="..." style="border-radius: 10px;">
                                </div>
                                <div class="col-md-8" style="display: flex; align-items: center;">
                                    <div class="card-body" style="display: flex; flex-direction: column; font-size: 14px;">
                                        <h5 class="card-title">Empreendedores de Elite</h5>
                                        <p class="card-text">Transforme sua empresa em um sucesso com a mentoria individual do Clodoaldo Araújo! Com ferramentas especializadas, estratégias, técnicas de gestão e vendas, o seu negócio pode alcançar novas alturas. Conte com a experiência do Clodoaldo para desenvolver uma visão extraordinária para sua empresa e atingir todos os seus objetivos. Não perca mais tempo e invista em uma mentoria especializada desenvolvida especialmente para você!</p>
                                        <p class="card-text"><span>De: <s>R$5.000,00</s></span><br><span>Por: <b style="color: red">R$3.000,00</b></span></p>
                                        <p class="mais_vendido_alert">Mais vendido</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MAIS VENDIDO - FINAL -->

        <!-- LISTA DE CURSOS - INICIO -->
        <div class="session_ferramentas">
            <div class="container_ferramentas">
                <div class="descricao_cursos">
                    <h5>Cursos</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pellentesque vulputate nisl id pretium. Aenean eget magna iaculis lorem ultricies convallis quis ac velit. Maecenas mattis nisl nec dui aliquam luctus. Quisque massa nulla, ornare sit amet consequat eget, vestibulum at mi. Morbi sit amet dui vel arcu congue finibus at ut turpis. Aenean et diam libero. Aliquam faucibus sodales pharetra. Nunc vel sapien suscipit, lacinia dui non, laoreet nibh. Quisque at lacinia tortor, a semper ex. Cras nec magna in nibh iaculis interdum vel vitae tortor. Nulla eget lorem vitae orci ultricies feugiat non eleifend lacus. Mauris egestas commodo tortor ut commodo.</p>
                </div>
                <div class="container-list">
                    <div class="row" style="display: flex; justify-content: center;">
                    <?php
                    $contador = 0;
                    foreach ($sql_ferramenta as $ferramenta) {
                        $contador++;
                    ?>
                        <div class="col" style="display: flex; justify-content: center; width: 225px;">
                            <div class="card mb-3" style="width: 90%; flex-direction: column; border: 0px;">
                                <div class="row g-0" style="flex-grow: 1;">
                                    <div class="col" style="display: flex; flex-direction: column;">
                                        <div style="display: flex; justify-content: center;">
                                            <img src="<?php echo $ferramenta["imagem"] ?>" class="img-fluid rounded-start" alt="..." style="border-radius: 10px;">
                                        </div>
                                        <div class="card-body card_ferramenta" id="card-ferramenta" style="padding: 0px;"> <!-- style="display: flex; flex-direction: column; align-items: center; text-align:center;" -->
                                            <div class="titulo-ferramenta">
                                                <h5 class="card-title" style="font-size: 15px; margin: 0px;"> <?php echo $ferramenta["nome"]; ?> </h5>
                                            </div>
                                            <div class="botão-ferramenta">
                                                <?php if (!empty($ferramenta['preço_antigo']) || $ferramenta['preco_antigo'] != "") {?>
                                                    <p style="font-size: 13px; margin: 0px; padding: 0px 0px 10px 0px;">De: <s><?php echo $ferramenta["preco_antigo"]?></s> Por: <b style="color: #c10109;"><?php echo $ferramenta["preco_atual"] ?></b></p>
                                                <?php } else {?>
                                                    <p style="font-size: 13px; margin: 0px; padding: 0px 0px 10px 0px;">Preço: <b style="color: #c10109;"><?php echo $ferramenta["preco_atual"] ?></b></p>
                                                <?php } ?>
                                                    <a href="" download=""><button class="btn2">Acesse aqui</button></a>
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        if ($contador == 4) {
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
        <!-- LISTA DE CURSOS - FINAL -->

        <div class="content"></div>

        <!-- RODAPÉ - INICIO -->
        <?php include("footer.php"); ?>
        <!-- RODAPÉ - FINAL -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>