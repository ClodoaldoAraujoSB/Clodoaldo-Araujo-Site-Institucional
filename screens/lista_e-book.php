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
    <title>Galeria de Imagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>

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

    </style>

</head>
<body>

    <!-- MENU SUPERIOR -->
    <?php include("header.php"); ?>

    <!-- TITULO - INICIO -->
    <h1 class="h1" style="margin-top: 40px; margin-bottom: 40px;">Meus cursos</h1>

    <!-- CARDS - INICIO -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">O Conselho</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#conselhoModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">E-book</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ebookModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Empreendedores de Elite</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#empreendedores_eliteModal">Saiba Mais</button>
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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#jacModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mapa do Sucesso</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#mapa_sucessoModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Master Mind</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#master_mindModal">Saiba Mais</button>
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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#missao_chinaModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">Missão Turquia</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#missao_turquiaModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-title">MMA</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#mmaModal">Saiba Mais</button>
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
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#pilares_milhaoModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CARDS - FINAL -->

    <!-- RODAPÉ -->
    <?php include("footer.php"); ?>

</body>
</html>