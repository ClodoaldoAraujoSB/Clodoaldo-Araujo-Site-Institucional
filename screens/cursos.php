<?php    

include("../bd/bd.php");
$cursos = $conn->query("SELECT * FROM curso");

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
        $cursos = $conn->query("SELECT * FROM curso");
    } else if ($opcao == 0 && !empty($texto)) {
        $cursos = $conn->query("SELECT * FROM curso WHERE nome LIKE '%" . $texto . "%'");
    } else if ($opcao != 0 && empty($texto)) {
        $cursos = $conn->query("SELECT * FROM curso WHERE ambiente = " . $opcao);
    } else if ($opcao != 0 && !empty($texto)) {
        $cursos = $conn->query("SELECT * FROM curso WHERE ambiente = " . $opcao . " AND nome LIKE '%" . $texto . "%'");
    }
}

$conn->close();

?>

    <!doctype html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cursos || Clodoaldo Araújo</title>
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
                background-color: #282828;
                color: #e2e2e2;
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
                padding: 50px 0px 50px 0px;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #282828;
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
                width: 100%;
                padding-left: 35px;
                padding-right: 35px;
                font-size: 13px;
                color: #e2e2e2;
            }

            .session_ferramentas {
                padding-bottom: 50px;
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
                width: 85%;
                display: flex;
            }

            .mb-3 {
                width: 70%; 
                border: 0px;
            }

            .curso_principal_titulo {
                color: #e2e2e2;
            }

            @media screen and (max-width: 768px) {

                .card_ferramenta {
                    text-align: center;
                    align-items: center;
                }

                .form_pesquisa {
                    flex-direction: column;
                }

                .drop_form_pesquisa {
                    width: 100%;
                }

                .text_form_pesquisa {
                    margin: 0px;
                    margin-right: 10px;
                    width: 70%;
                }

                .btn_form_pesquisa {
                    width: 30%;
                    display: flex;
                    justify-content: end;
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
                    text-align: center;
                }

                .row {
                    display: flex;
                    justify-content: center;
                    flex-direction: column;
                }

                .div_pesquisa {
                    width: 100%;
                }

                .div_pesquisa_form {
                    margin-top: 10px;
                    width: 100%;
                }

                .card-body {
                    text-align: center;
                    align-items: center;
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
        <div class="session_pesquisa" style="padding: 50px 0px 0px 0px;">
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
                        <h6 class="curso_principal_titulo">O Mais Vendido</h6>
                        <div class="card" style="border: 0px; background-color: transparent;">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="../cursos/ede.jpg" class="img-fluid rounded-start" alt="..." style="border-radius: 10px;">
                                </div>
                                <div class="col" style="display: flex; align-items: center;">
                                    <div class="card-body" style="display: flex; flex-direction: column; font-size: 14px; color: #e2e2e2;">
                                        <h5 class="card-title">Empreendedores de Elite</h5>
                                        <p class="card-text">Transforme sua empresa em um sucesso com a mentoria individual do Clodoaldo Araújo! Com ferramentas especializadas, estratégias, técnicas de gestão e vendas, o seu negócio pode alcançar novas alturas. Conte com a experiência do Clodoaldo para desenvolver uma visão extraordinária para sua empresa e atingir todos os seus objetivos. Não perca mais tempo e invista em uma mentoria especializada desenvolvida especialmente para você!</p>
                                        <p class="card-text" style="font-size: 20px;"><span>De: <s>R$5.000,00</s></span><br><span>Por: <b style="color: red">R$3.000,00</b></span></p>
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

<?php 
$cursos = [
    [
        'nome' => 'e-book',
        'link' => 'https://cursos.clodoaldoaraujo.com.br/courses/e-book/',
        'imagem' => '../cursos/ebook.jpg', // Substitua pela URL real da imagem
        'preco_antigo' => '',
        'preco_atual' => '67,00',
    ],

    [
        'nome' => 'Mapa para o Sucesso Online',
        'link' => 'https://cursos.clodoaldoaraujo.com.br/courses/mapa-para-o-sucesso-online//',
        'imagem' => '../cursos/mapadosucesso.jpg', // Substitua pela URL real da imagem
        'preco_antigo' => '3.000,00',
        'preco_atual' => '1.000,00',
    ],

    [
        'nome' => 'Mapa para o Sucesso Presencial',
        'link' => 'https://cursos.clodoaldoaraujo.com.br/courses/mapa-para-o-sucesso-presencial/',
        'imagem' => '../cursos/mapadosucesso.jpg', // Substitua pela URL real da imagem
        'preco_antigo' => '3.000,00',
        'preco_atual' => '1.000,00',
    ],

    [
        'nome' => 'Pilares para o Milhão',
        'link' => 'https://cursos.clodoaldoaraujo.com.br/courses/pilares-para-o-milhao/',
        'imagem' => '../cursos/mapadosucesso.jpg', // Substitua pela URL real da imagem
        'preco_antigo' => '3.000,00',
        'preco_atual' => '1.000,00',
    ],

    [
        'nome' => 'Empreendedores de Elite',
        'link' => 'https://cursos.clodoaldoaraujo.com.br/courses/empreendedores-de-elite/',
        'imagem' => '../cursos/ede.jpg', // Substitua pela URL real da imagem
        'preco_antigo' => '3.000,00',
        'preco_atual' => '1.000,00',
    ],

    [
        'nome' => 'Descubra-se',
        'link' => 'https://cursos.clodoaldoaraujo.com.br/courses/descubra-se/',
        'imagem' => '../cursos/descubra-se.jpg', // Substitua pela URL real da imagem
        'preco_antigo' => '5.000,00',
        'preco_atual' => '3.000,00',
    ],

    [
        'nome' => 'MMA',
        'link' => 'https://cursos.clodoaldoaraujo.com.br/courses/mma/',
        'imagem' => '../cursos/mma.jpg', // Substitua pela URL real da imagem
        'preco_antigo' => '',
        'preco_atual' => '5.000,00',
    ],

    [
        'nome' => 'Missão China',
        'link' => 'https://cursos.clodoaldoaraujo.com.br/courses/missao-china/',
        'imagem' => '../cursos/imersao_china.jpg', // Substitua pela URL real da imagem
        'preco_antigo' => '',
        'preco_atual' => '10.000,00',
    ],

    [
        'nome' => 'Missão Turquia',
        'link' => 'https://cursos.clodoaldoaraujo.com.br/courses/missao-turquia/',
        'imagem' => '../cursos/MT.jpg', // Substitua pela URL real da imagem
        'preco_antigo' => '',
        'preco_atual' => '20.000,00',
    ],

    [
        'nome' => 'O Conselho',
        'link' => 'https://cursos.clodoaldoaraujo.com.br/courses/o-conselho/',
        'imagem' => '../cursos/conselho.jpg', // Substitua pela URL real da imagem
        'preco_antigo' => '',
        'preco_atual' => '48.000,00',
    ],

    [
        'nome' => 'Master Mind',
        'link' => 'https://cursos.clodoaldoaraujo.com.br/courses/master-mind/',
        'imagem' => '../cursos/mapadosucesso.jpg', // Substitua pela URL real da imagem
        'preco_antigo' => '',
        'preco_atual' => '120.000,00',
    ],
];

?>

<div class="session_ferramentas">
    <div class="container_ferramentas">
        <div class="descricao_cursos">
            <h5>Cursos</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        </div>
        <div class="container-list">
            <div class="row" style="display: flex; justify-content: center;">

                <?php
                $contador = 0;
                foreach ($cursos as $curso) {
                    $contador++;
                ?>
                    <div class="col" style="display: flex; justify-content: center; width: 225px;">
                        <div class="card mb-3" style="width: 90%; flex-direction: column; border: 0px; background-color: #161616;">
                            <div class="row g-0" style="flex-grow: 1;">
                                <div class="col" style="display: flex; flex-direction: column; color: #e2e2e2;">
                                    <div style="display: flex; justify-content: center;">
                                        <img src="<?php echo $curso["imagem"] ?>" class="img-fluid rounded-start" alt="..." style="border-radius: 10px;">
                                    </div>
                                    <div class="card-body card_ferramenta" id="card-ferramenta" style="padding: 0px;">
                                        <div class="titulo-ferramenta">
                                            <h5 class="card-title" style="font-size: 15px; margin: 0px;"><?php echo $curso['nome']; ?></h5>
                                        </div>
                                        <div class="botão-ferramenta">
                                            <?php if (!empty($curso['preco_antigo'])) : ?>
                                                <p style="font-size: 13px; margin: 0px; padding: 0px 0px 10px 0px;">De: <s><?php echo $curso["preco_antigo"] ?></s> Por: <b style="color: #c10109;"><?php echo $curso["preco_atual"] ?></b></p>
                                            <?php else : ?>
                                                <p style="font-size: 13px; margin: 0px; padding: 0px 0px 10px 0px;">Preço: <b style="color: #c10109;"><?php echo $curso["preco_atual"] ?></b></p>
                                            <?php endif; ?>
                                            <a href="<?php echo $curso['link']; ?>"><button class="btn2">Acesse aqui</button></a>
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
<!-- LISTA DE CURSOS - FINAL -->

        <div class="content"></div>

        <!-- RODAPÉ - INICIO -->
        <?php include("footer.php"); ?>
        <!-- RODAPÉ - FINAL -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>