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
        <title>Ferramentas Gratuitas || Clodoaldo Araújo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
        <style>

            .titulo_ferramentas {
                margin-top: 10px;
                text-align: center;
            }

            .session_pesquisa {
                margin: 0px 0px 20px 0px;
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

            .session_curso_principal {
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

<<<<<<< HEAD
        .botao-comprar-curso {
            background-color: #c10109;
            color: #ffffff;
            display: inline-flex;
            /* Alterei flex-direction para inline-flex */
            position: relative;
            /* left: 200px; */
            /* Removi a propriedade left */
            top: 0;
            padding: 10px;
            border: 1px solid #c10109;
            text-decoration: none;
        }


        .botao-comprar-curso:hover {
            background-color: #ffffff;
            color: #282828
        }
=======
        <div class="banner_principal">
            <img src="../logos/Linkedin.jpg" alt="Banner Principal" style="width: -webkit-fill-available;">
        </div>

        <div class="session_pesquisa" style="margin: 10px 0px 0px 0px;">
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
>>>>>>> dc8cd8a18435c7fd2dabf20e9e644ee030da0fe2

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
                            <div class="text_form_pesquisa">
                                <input type="text" class="form-control" id="input_pesquisa" name="input_pesquisa" placeholder="Digite o curso que procura:">
                            </div>
                            <div class="btn_form_pesquisa">
                                <input class="btn" style="background: #c10109; color: white;" type="submit" value="Pesquisa">
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="session_curso_principal">
            <div class="curso_principal">
                <div class="row">
                    <div class="col">
                        <h6>O Mais Vendido</h6>
                        <div class="card mb-3" style="width: 70%; border: 0px;">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="empresas/img/mapadosucesso.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8" style="display: flex; align-items: center;">
                                    <div class="card-body" style="display: flex; flex-direction: column; font-size: 14px;">
                                        <h5 class="card-title">MMA</h5>
                                        <p class="card-text">Transforme sua empresa em um sucesso com a mentoria individual do Clodoaldo Araújo! Com ferramentas especializadas, estratégias, técnicas de gestão e vendas, o seu negócio pode alcançar novas alturas. Conte com a experiência do Clodoaldo para desenvolver uma visão extraordinária para sua empresa e atingir todos os seus objetivos. Não perca mais tempo e invista em uma mentoria especializada desenvolvida especialmente para você!</p>
                                        <p class="card-text"><b style="color: red">R$99,99</b><br><s>R$99,99</s></p>
                                        <p class="mais_vendido_alert">Mais vendido</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<<<<<<< HEAD
        .informacoes-curso h6 {
            position: relative;
            left: 100px;
            bottom: 25px
        }

        .titulo-catalogo {
            text-align: center;
            font-weight: bold;
        }

        .catalogo-container {
            position: relative;
            overflow: hidden;
            width: 100vw;
            /* 100% da largura da viewport */
            margin: 0 150px;
        }

        .catalogo-wrapper {
            display: flex;
            transition: transform 0.5s ease-in-out;
            /* Ajustado o tempo da transição */
        }

        .catalogo-cursos {
            display: flex;
        }

        .informacoes-curso {
            margin: 0 30px;
            /* Ajuste conforme necessário */
            box-sizing: border-box;
        }

        .informacoes-curso:hover {
            transform: scale(1.1);
        }

        .catalogo-cursos img {
            border: 2px solid #c10109;
        }

        .informacoes-curso h6 {
            position: relative;
            left: 100px;
            bottom: 25px;
        }

        #informacoes-curso-mapadosucesso {
            margin: 0 30px;
            /* Ajuste conforme necessário */
            box-sizing: border-box;
            position: relative;
            left: 100px;
            top: 1px;
        }

        #informacoes-curso-elite {
            margin: 0 30px;
            /* Ajuste conforme necessário */
            box-sizing: border-box;
            position: relative;
            left: 100px;
            top: 1px;
        }

        #informacoes-curso-mma {
            margin: 0 30px;
            /* Ajuste conforme necessário */
            box-sizing: border-box;
            position: relative;
            left: 100px;
            top: 1px;
        }

        .prevBtn,
        .nextBtn {
            position: absolute;
            top: 50%;
            font-size: 18px;
            cursor: pointer;
            background-color: #f1f1f1;
            padding: 10px;
            border: none;
            outline: none;
            z-index: 1;
            border-radius: 100px;
            background-color: #c10109;
            color: #fff;
            transform: translateY(-50%);
        }

        .prevBtn {
            left: 0;
        }

        .nextBtn {
            right: 0;
        }
    </style>

</head>

<body>
    <!-- MENU SUPERIOR -->
    <?php include("header.php"); ?>

    <!-- TITULO - INICIO -->
    <!--<h1 class="h1" style="margin-top: 40px; margin-bottom: 40px;">Meus cursos</h1>-->

    <script>

        const coursesData = [
            { name: 'o conselho', category: 'online' },
            { name: 'ebook', category: 'online' },
            { name: 'empreendedores de elite', category: 'presencial' },
            { name: 'jac jornada do autoconhecimento', category: 'online' },
            { name: 'mapa do sucesso', category: 'presencial' },
            { name: 'master mind', category: 'online' },
            { name: 'missão turquia', category: 'presencial' },
            { name: 'missão china', category: 'presencial' },
            { name: 'mma mindset metas ação', category: 'online' },
            { name: 'pilares para o milhão', category: 'online' }
        ];

        function showSuggestions() {
            const input = document.getElementById('search-box');
            const suggestionsContainer = document.getElementById('suggestions-container');
            const categoryFilter = document.getElementById('category-filter').value.toLowerCase();

            suggestionsContainer.innerHTML = '';

            const inputValue = input.value.toLowerCase();

            const matchingCourses = coursesData.filter(course => {
                const matchesInput = course.name.toLowerCase().includes(inputValue);
                const matchesCategory = categoryFilter === 'todos' || course.category === categoryFilter;
                return matchesInput && matchesCategory;
            });

            matchingCourses.forEach(course => {
                const suggestion = document.createElement('div');
                suggestion.classList.add('suggestion');
                suggestion.textContent = course.name;
                suggestion.addEventListener('click', () => {
                    input.value = course.name;
                    suggestionsContainer.style.display = 'none';

                    // Esconda todas as divs de informação do curso
                    document.querySelectorAll('.informacoes-curso').forEach(div => {
                        div.style.display = 'none';
                    });

                    // Exiba a div de informação do curso correto com base no nome do curso
                    const informacoesCurso = getInformacoesCurso(course.name);
                    if (informacoesCurso) {
                        informacoesCurso.style.display = 'block';
                    }
                });
                suggestionsContainer.appendChild(suggestion);
            });

            if (matchingCourses.length > 0) {
                suggestionsContainer.style.display = 'block';
            } else {
                suggestionsContainer.style.display = 'none';
            }
        }

        function getInformacoesCurso(cursoName) {
            switch (cursoName) {
                case 'empreendedores de elite':
                    return document.getElementById('informacoes-curso-elite');
                case 'mapa do sucesso':
                    return document.getElementById('informacoes-curso-mapadosucesso');
                case 'mma mindset metas ação':
                    return document.getElementById('informacoes-curso-mma');
                default:
                    return null;
            }
        }

        function searchCourses() {
            const input = document.getElementById('search-box');
            const selectedCourse = input.value;

            // Implemente aqui a lógica para realizar a pesquisa de cursos com base na palavra-chave inserida.
            console.log(`Realizando a pesquisa por cursos relacionados a: ${selectedCourse}`);
        }
        // Adiciona um manipulador de eventos para ocultar as sugestões quando o usuário clicar fora da área da barra de pesquisa
        document.addEventListener('click', function (event) {
            const suggestionsContainer = document.getElementById('suggestions-container');
            const searchBox = document.getElementById('search-box');

            if (event.target !== searchBox && !searchBox.contains(event.target) && event.target !== suggestionsContainer && !suggestionsContainer.contains(event.target)) {
                suggestionsContainer.style.display = 'none';
            }
        });

        let currentIndexOnline = 0;
        let currentIndexPresencial = 0;

        function moveCatalog(direction, catalogType) {
            const catalogWrapper = document.getElementById(`catalogo-cursos-${catalogType}`);
            const courseCards = document.querySelectorAll(`.informacoes-curso-${catalogType}`);
            const cardWidth = courseCards[0].offsetWidth + 30; // Considerando a largura do cartão mais a margem
            let currentIndex;

            if (catalogType === 'online') {
                currentIndex = currentIndexOnline;
                currentIndexOnline = (currentIndex + direction + courseCards.length) % courseCards.length;
            } else if (catalogType === 'presencial') {
                currentIndex = currentIndexPresencial;
                currentIndexPresencial = (currentIndex + direction + courseCards.length) % courseCards.length;
            }

            const translateValue = -currentIndex * cardWidth + 'px';
            catalogWrapper.style.transform = 'translateX(' + translateValue + ')';
        }

        document.getElementById('search-box').addEventListener('input', function () {
            const input = this;
            const inputValue = input.value.toLowerCase();

            // Oculta todas as divs de informação do curso
            document.querySelectorAll('.informacoes-curso').forEach(div => {
                div.style.display = 'none';
            });

            if (inputValue === '') {
                // Se o valor da entrada for vazio, esconda o contêiner de sugestões
                document.getElementById('suggestions-container').style.display = 'none';
                return; // Pare aqui, não precisa processar as sugestões
            }

            // Exibe a div de informação do curso correto com base no nome do curso
            if (informacoesCurso) {
                informacoesCurso.style.display = 'block';
            }
        });
    </script>

    <!-- INÍCIO BARRA DE PESQUISA -->
    <div id="search-container">
        <input type="text" id="search-box" oninput="showSuggestions()" placeholder="Digite um curso...">
        <div id="suggestions-container"></div>
    </div>
    <!-- FIM BARRA DE PESQUISA -->

    <!-- INÍCIO CURSOS PESQUISADOS -->
    <div id="informacoes-curso-mapadosucesso" class="informacoes-curso curso-item" style="display: none;">
        <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
        <h5><b>Curso Mapa do sucesso</b></h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.</p>
        <div class="preco-curso">
            <h5>R$297,00</h5>
            <h6><s>R$500,00</s></h6>
        </div>
        <a href="#" class="botao-comprar-curso">Comprar</a>
    </div>

    <div id="informacoes-curso-elite" class="informacoes-curso curso-item" style="display: none;">
        <img src="../logos/ede.jpg" alt="" width="135px" height="135px">
        <h5><b>Curso Empreendedores de Elite</b></h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.</p>
        <div class="preco-curso">
            <h5>R$3000,00</h5>
            <h6><s>R$4200,00</s></h6>
        </div>
        <a href="#" class="botao-comprar-curso">Comprar</a>
    </div>

    <div id="informacoes-curso-mma" class="informacoes-curso curso-item" style="display: none;">
        <img src="../logos/mma.jpg" alt="" width="135px" height="135px">
        <h5><b>Curso MMA Mindset Metas Ação</b></h5>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book.</p>
        <div class="preco-curso">
            <h5>R$5000,00</h5>
            <h6><s>R$7000,00</s></h6>
        </div>
        <a href="#" class="botao-comprar-curso">Comprar</a>
    </div>
    <!-- FIM CURSOS PESQUISADOS -->

    <!-- INÍCIO BOTÃO CATEGORIAS -->
    <label for="category-filter">Filtrar por:</label>
    <select id="category-filter">
        <option value="todos">Todos</option>
        <option value="presencial">Presencial</option>
        <option value="online">Online</option>
    </select>

    <!-- FIM BOTÃO CATEGORIAS -->

    <!-- INÍCIO BANNER -->
    <div class="banner">
        <img src="../logos/Linkedin.jpg" alt="">
    </div>
    <!-- FIM BANNER -->

    <!-- CARDS - INICIO -->
    <!--<div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">O Conselho</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#conselhoModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">E-book</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#ebookModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Empreendedores de Elite</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#empreendedores_eliteModal">Saiba Mais</button>
=======
        <!-- LISTA DE FERRAMENTAS -->
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
                                            <img src="<?php echo $ferramenta["imagem"] ?>" class="img-fluid rounded-start" alt="..." style="">
                                        </div>
                                        <div class="card-body card_ferramenta" id="card-ferramenta" style="padding: 0px;"> <!-- style="display: flex; flex-direction: column; align-items: center; text-align:center;" -->
                                            <div class="titulo-ferramenta">
                                                <h5 class="card-title" style="font-size: 15px; margin: 0px;"> <?php echo $ferramenta["nome"]; ?> </h5>
                                            </div>
                                            <div class="botão-ferramenta">
                                                <p style="font-size: 13px; margin: 0px; padding: 0px 0px 10px 0px;">De: <s><?php echo $ferramenta["preco_antigo"]?></s> Por: <b style="color: #c10109;"><?php echo $ferramenta["preco_atual"] ?></b></p>
                                                <a href="" download="" class="btn" style="background: #c10109; color: white; border-radius: 7px; padding: 0px 10px 2px 10px;">Acesse Aqui</a>
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
>>>>>>> dc8cd8a18435c7fd2dabf20e9e644ee030da0fe2
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