<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Galeria de Imagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>

        .container-menu {
            margin: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #btn-empresa {
            border: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #div_centro_titulo {
            width: 30%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #div_lateral_titulo {
            width: 40%;
        }

    </style>

</head>
<body>

    <!-- MENU SUPERIOR -->
    <?php include("header.php"); ?>

    <!-- CARDS - INICIO -->
    <div class="container-menu">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">E-book</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ca3_steelModal">Saiba Mais</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CARDS - FINAL -->

    <!-- MODAL - INICIO -->
    <div class="modal fade" id="ca3_steelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-dark">
            <div class="modal-header" style="border: 0px;">
                <!--<div id="div_lateral_titulo">
                    <img src="../logos/logo-ca3_steel.png" alt="Logo Super Business" style="height: 30px;">
                </div>-->
                <div id="div_centro_titulo">
                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">E-book</h1>
                </div>
                <!--<div id="div_lateral_titulo" style="text-align: right;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>-->
            </div>
            <div class="modal-body text-light" style="text-align: center;">
                ...
            </div>
            <div class="modal-footer" id="btn-empresa">
                <a href=""><button type="button" class="btn btn-light text-dark">Compre nosso e-book</button></a>
                <a href=""><button type="button" class="btn btn-light text-dark">Baixe nossas ferramentas gratuitas</button></a>
            </div>
            </div>
        </div>
        </div>
    <!-- MODAL - FINAL -->

    <!-- RODAPÉ -->
    <?php include("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>