<?php

include_once("cursos/conselho.php");
include_once("cursos/ebook.php");
include_once("cursos/empreendedores_elite.php");
include_once("cursos/jac.php");
include_once("cursos/mapa_sucesso.php");
include_once("cursos/master_mind.php");
include_once("cursos/missao_china.php");
include_once("cursos/missao_turquia.php");
include_once("cursos/mma.php");
include_once("cursos/pilares_milhao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cursos || Clodoaldo Araújo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <style>
        body {
            overflow-x: hidden;
        }

        .h1 {
            text-align: center;
        }

        .col {
            display: flex;
            justify-content: center;
        }

        .row {
            margin-bottom: 40px;
        }

        #search-container {
            text-align: center;
            margin-top: 50px;
        }

        #search-box {
            padding: 10px;
            font-size: 16px;
            border-radius: 25px;
            width: 75%;
        }

        #suggestions-container {
            display: none;
            border: 1px solid #ccc;
            max-width: 300px;
            margin: 0 auto;
            background-color: #fff;
        }

        .suggestion {
            padding: 10px;
            cursor: pointer;
        }

        .suggestion:hover {
            background-color: #f2f2f2;
        }

        .curso-btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #c10109;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: relative;
            bottom: 50px;
        }

        /* Estilo do painel de categorias (inicialmente oculto) */
        .categorias {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: #c10109;
            border-radius: 0 0 5px 5px;
            padding: 10px;
        }

        /* Estilo do link das categorias */
        .categorias a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 5px 0;
        }

        /* Exibição do painel ao passar o mouse sobre o botão */
        .curso-btn:hover .categorias {
            display: block;
        }

        #search-box {
            background-image: url('data:image/<ion-icon name="search"></ion-icon>');
        }

        .curso-destaque {
            margin-left: 200px;
            margin-top: 50px;
        }

        .curso-destaque h3 {
            display: inline-flex;
            position: relative;
            bottom: 100px;
        }

        .descricao-curso-destaque {
            display: inline-flex;
            position: relative;
            left: 275px;
            bottom: 200px;
            text-align: left;
        }

        .curso-destaque img {
            border: 2px solid #c10109;
        }

        .botao-comprar-curso-destaque {
            background-color: #c10109;
            color: #ffffff;
            display: flex;
            flex-direction: inline-flex;
            position: relative;
            left: 500px;
            bottom: 155px;
            padding: 10px;
            border: 1px solid #c10109;
            text-decoration: none;
        }

        .botao-comprar-curso-destaque:hover {
            background-color: #ffffff;
            color: #282828
        }

        .preco-curso-destaque {
            display: inline-flex;
            position: relative;
            left: 1000px;
            bottom: 400px;
        }

        .titulo-catalogo {
            text-align: center;
            font-weight: bold;
        }

        .borda-catalogo {
            align-items: center;
            border: 1px solid #c10109;
            padding: 100px;
            margin-left: 200px;
            margin-right: 200px;
        }

        .catalogo-cursos {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }


        .catalogo-cursos img {
            border: 2px solid #c10109;
        }

        .botao-comprar-curso {
            background-color: #c10109;
            color: #ffffff;
            display: flex;
            flex-direction: inline-flex;
            position: relative;
            left: 200px;
            bottom: 45px;
            padding: 10px;
            border: 1px solid #c10109;
            text-decoration: none;
        }

        .botao-comprar-curso:hover {
            background-color: #ffffff;
            color: #282828
        }

        .informacoes-curso {
            margin-right: 50px;
            margin-left: 50px;
        }

        .informacoes-curso h6 {
            position: relative;
            left: 100px;
            bottom: 25px
        }
    </style>

</head>

<body>
    <!-- MENU SUPERIOR -->
    <?php include("header.php"); ?>

    <!-- TITULO - INICIO -->
    <!--<h1 class="h1" style="margin-top: 40px; margin-bottom: 40px;">Meus cursos</h1>-->

    <script>
        // Lista de cursos (pode ser obtida de um banco de dados ou de outra fonte)
        const courses = ['o conselho', 'ebook', 'empreendedores de elite', 'jac jornada do autoconhecimento', 'mapa do sucesso', 'master mind', 'missão turquia', 'missão china', 'mma mindset metas ação', 'pilares para o milhão'];

        function showSuggestions() {
            const input = document.getElementById('search-box');
            const suggestionsContainer = document.getElementById('suggestions-container');
            suggestionsContainer.innerHTML = '';

            const inputValue = input.value.toLowerCase();

            const matchingCourses = courses.filter(course => course.toLowerCase().includes(inputValue));

            matchingCourses.forEach(course => {
                const suggestion = document.createElement('div');
                suggestion.classList.add('suggestion');
                suggestion.textContent = course;
                suggestion.addEventListener('click', () => {
                    input.value = course;
                    suggestionsContainer.style.display = 'none';
                });
                suggestionsContainer.appendChild(suggestion);
            });

            if (matchingCourses.length > 0) {
                suggestionsContainer.style.display = 'block';
            } else {
                suggestionsContainer.style.display = 'none';
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
    </script>

    <!-- INÍCIO BARRA DE PESQUISA -->
    <div id="search-container">
        <input type="text" id="search-box" oninput="showSuggestions()" placeholder="Digite um curso...">
        <div id="suggestions-container"></div>
    </div>
    <!-- FIM BARRA DE PESQUISA -->

    <!-- INÍCIO BOTÃO CATEGORIAS -->
    <div class="curso-btn">
        <ion-icon name="filter-outline"></ion-icon>Categorias
        <!-- Painel de categorias -->
        <div class="categorias">
            <a href="curso_presencial.php">Presencial</a>
            <a href="curso_online.php">Online</a>
        </div>
    </div>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jac - Descubra-se</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#jacModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mapa do Sucesso</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#mapa_sucessoModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Master Mind</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#master_mindModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Missão China</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#missao_chinaModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Missão Turquia</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#missao_turquiaModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">MMA</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#mmaModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mx-auto">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pilares do Milhão</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal"
                            data-bs-target="#pilares_milhaoModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- CARDS - FINAL -->

    <!-- INÍCIO CURSO DESTAQUE -->
    <div class="curso-destaque">
        <img src="../logos/mapadosucesso.jpg" alt="" class="imagem-destaque" width="270px" height="270px">
        <h3>Curso Mapa do sucesso</h3>
        <div class="descricao-curso-destaque">
            <p>Lorem Ipsum is simply dummy text of the<br> printing and typesetting industry. Lorem Ipsum<br> has been
                the industry's standard dummy text ever<br> since the 1500s, when an unknown printer took a galley of
                type and scrambled it to make a type specimen book.</p>
        </div>
    </div>
    <a href=""><button class="botao-comprar-curso-destaque">Comprar</button></a>
    <div class="preco-curso-destaque">
        <b>
            <h4>R$297,00</h4>
        </b>
    </div>
    <!-- FIM CURSO DESTAQUE -->

    <h4 class="titulo-catalogo">Catálogo de cursos</h4>

    <!-- INÍCIO CATÁLOGO CURSOS -->
    <div class="borda-catalogo">
        <div class="catalogo-cursos">
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <!--<p>Lorem Ipsum is simply<br> dummy text of the<br> printing and typesetting<br> industry. Lorem Ipsum<br> has been the industry's<br> standard dummy text<br> ever since the...</p>-->
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <!--<a href=""><button class="botao-comprar-curso">Comprar</button></a>-->
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <!--<p>Lorem Ipsum is simply<br> dummy text of the<br> printing and typesetting<br> industry. Lorem Ipsum<br> has been the industry's<br> standard dummy text<br> ever since the...</p>-->
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <!--<p>Lorem Ipsum is simply<br> dummy text of the<br> printing and typesetting<br> industry. Lorem Ipsum<br> has been the industry's<br> standard dummy text<br> ever since the...</p>-->
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <!--<p>Lorem Ipsum is simply<br> dummy text of the<br> printing and typesetting<br> industry. Lorem Ipsum<br> has been the industry's<br> standard dummy text<br> ever since the...</p>-->
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <!--<p>Lorem Ipsum is simply<br> dummy text of the<br> printing and typesetting<br> industry. Lorem Ipsum<br> has been the industry's<br> standard dummy text<br> ever since the...</p>-->
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <!--<p>Lorem Ipsum is simply<br> dummy text of the<br> printing and typesetting<br> industry. Lorem Ipsum<br> has been the industry's<br> standard dummy text<br> ever since the...</p>-->
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <!--<p>Lorem Ipsum is simply<br> dummy text of the<br> printing and typesetting<br> industry. Lorem Ipsum<br> has been the industry's<br> standard dummy text<br> ever since the...</p>-->
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <!--<p>Lorem Ipsum is simply<br> dummy text of the<br> printing and typesetting<br> industry. Lorem Ipsum<br> has been the industry's<br> standard dummy text<br> ever since the...</p>-->
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <!--<p>Lorem Ipsum is simply<br> dummy text of the<br> printing and typesetting<br> industry. Lorem Ipsum<br> has been the industry's<br> standard dummy text<br> ever since the...</p>-->
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
        </div>
    </div>
    <!-- FIM CATÁLOGO CURSOS -->

    <!-- RODAPÉ -->
    <?php include("footer.php"); ?>

</body>

</html>