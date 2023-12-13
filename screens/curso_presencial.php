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
            margin: 0;
            /* Remover margens padrão do corpo da página */
            overflow-x: hidden;
            /* Impede a barra de rolagem horizontal */
        }

        .content {
            flex: 1; /* Cresce para ocupar o espaço restante */
        }

        .titulo-catalogo {
            text-align: center;
            font-weight: bold;
        }

        #catalog-container {
            position: relative;
            overflow: hidden;
            width: 100vw;
            /* 100% da largura da viewport */
            margin: 0 150px;
        }

        .catalogo-wrapper {
            display: flex;
            transition: transform 0.3s ease-in-out;
        }

        .informacoes-curso {
            margin: 0 30px;
            /* Ajuste conforme necessário */
            box-sizing:
             border-box;
        }

        .informacoes-curso:hover {
            transform: scale(1.1);
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
            color: #282828;
        }

        .informacoes-curso h6 {
            position: relative;
            left: 100px;
            bottom: 25px;
        }

        #prevBtn,
        #nextBtn {
            position: fixed;
            top: 25%;
            font-size: 18px;
            cursor: pointer;
            background-color: #f1f1f1;
            padding: 10px;
            border: none;
            outline: none;
            z-index: 1;
            border-radius: 100px;
            background-color: #c10109;
        }

        #prevBtn {
            left: 0;
        }

        #nextBtn {
            right: 0;
        }
    </style>

    <script>
        let currentIndex = 0;

        function moveCatalog(direction) {
            const courseList = document.getElementById('catalogo-cursos');
            const courseCards = document.querySelectorAll('.informacoes-curso');
            const cardWidth = courseCards[0].offsetWidth + 30; // Considerando a largura do cartão mais a margem

            currentIndex = (currentIndex + direction + courseCards.length) % courseCards.length;
            const translateValue = -currentIndex * cardWidth + 'px';
            courseList.style.transform = 'translateX(' + translateValue + ')';
        }
    </script>

</head>

<body>
    <!-- MENU SUPERIOR -->
    <?php include("header.php"); ?>

    <h4 class="titulo-catalogo">Cursos Presenciais</h4>

    <!-- INÍCIO CATÁLOGO CURSOS -->
    <div id="catalog-container">
        <div class="catalogo-wrapper" id="catalogo-cursos">
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
            <div class="informacoes-curso">
                <img src="../logos/mapadosucesso.jpg" alt="" width="135px" height="135px">
                <h5><b>Curso Mapa do sucesso</b></h5>
                <h5>R$297,00</h5>
                <h6><s>R$500,00</s></h6>
            </div>
        </div>
        <button id="prevBtn" onclick="moveCatalog(-1)">❮</button>
        <button id="nextBtn" onclick="moveCatalog(1)">❯</button>
    </div>

    <div class="content"></div>

    <!-- RODAPÉ -->
    <?php include("footer.php"); ?>
</body>

</html>