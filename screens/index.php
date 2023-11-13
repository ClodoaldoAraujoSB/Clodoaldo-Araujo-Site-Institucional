<?php

include_once("ca3.php");
include_once("ca3_steel.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Inicial || Clodoaldo Araújo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
      
      .container-quem-sou {
        display: flex;
        margin-top: 40px;
      }

      .div-quem-sou {
        flex: 1;
        box-sizing: border-box;
        margin: 0px 20px 0px 20px;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: center;
      }

      .div_lista_empresas {
        display: flex;
        justify-content: center; 
        align-items: center; 
      }

      .div_lista_empresas button {
        width: 400px;
        height: 100px;
        margin: 10px;
      }

      .titulo_principal {
            padding: 20px;
            text-align: center;
        }

        .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        }

        .image {
        display: inline-block;
        margin: 1px;
        cursor: pointer;
        }

        .image img {
        height: 250px; 
        }

        .lst-image {
          filter: blur(3px);
          display: inline-block;
          margin: 1px;
          cursor: pointer;
        }

        .overlay {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          font-size: 24px;
          font-weight: bold;
          color: white;
          text-align: center;
          filter: none;
        }

        .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
        display: block;
        max-width: 90%;
        max-height: 90%;
        margin: auto;
        }

        .close {
        position: absolute;
        top: 10px;
        right: 10px;
        color: white;
        font-size: 30px;
        cursor: pointer;
        }

    </style>

    <script>

      function expandImage(imgElement) {
        var modal = document.getElementById('modal');
        var expandedImg = document.getElementById('expanded-image');
        
        modal.style.display = 'block';
        expandedImg.src = imgElement.src;
        expandedImg.style.height = '80%'; 
        expandedImg.style.width = 'auto'; 
          
        // Centraliza horizontalmente e verticalmente
        expandedImg.style.display = 'block';
        expandedImg.style.margin = '0 auto';
        expandedImg.style.position = 'relative';
        expandedImg.style.top = '50%';
        expandedImg.style.transform = 'translateY(-50%)';
        }

        function closeModal() {
        var modal = document.getElementById('modal');
        modal.style.display = 'none';
      }

    </script>

  </head>
  <body>
    <!-- MENU SUPERIOR -->
    <?php include("header.php"); ?>

    <!-- CARROSEL - INICIO -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="../img/Linkedin.JPG" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
            <a><button>Botão</button></a>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="../img/Linkedin.JPG" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
            <a><button>Botão</button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/Linkedin.JPG" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
            <a><button>Botão</button></a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- CARROSEL - FINAL -->

    <!-- QUEM EU SOU? - INICIO -->
    <div class="container-quem-sou">
      <div class="div-quem-sou">
        <h2 style="text-align: center;">Quem eu sou?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a><button style="align-items: center;">Botão</button></a>
      </div>
      <div class="div-quem-sou">
        <img src="../img/fotoimprensa3.jpg" alt="Imagem 2" style="width: 100%;">
      </div>
    </div>
    <!-- QUEM EU SOU? - FINAL -->

    <!-- EMPRESAS - INICIO -->
    <h1 style="text-align: center; margin-top: 40px;"> Minhas empresas </h1>
    <div class="lista_empresas">
      <div class="div_lista_empresas">
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ca3Modal"><img src="../img/logo-super business.png" alt="ca3" style="height: 70px;"></button>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ca3_steelModal"><img src="../img/logo-super business.png" alt="ca3 steel" style="height: 70px;"></button>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ca3_steelModal"><img src="../img/logo-super business.png" alt="ca3 steel" style="height: 70px;"></button>
      </div>
      <div style="text-align: center;">
        <a><button>Ir para as empresas</button></a>
      </div>
    </div>
    <!-- EMPRESAS - FINAL -->

    <!-- PAISES QUE EU VISITEI - INICIO -->
    <div class="container-quem-sou">
      <div class="div-quem-sou">
        <img src="../img/fotoimprensa3.jpg" alt="Imagem 2" style="width: 100%;">
      </div>
      <div class="div-quem-sou">
        <h2 style="text-align: center;">Paises que eu visitei</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a><button style="align-items: center;">Botão</button></a>
      </div>
    </div>
    <!-- PAISES QUE EU VISITEI - FINAL -->

    <!-- GALERIA - INICIO -->
    <h1 class="titulo_principal">Galeria</h1>
    <div class="gallery">
        <div class="image">
            <img src="../img/1.jpg" alt="Imagem 1" onclick="expandImage(this)">
        </div>
        <div class="image">
            <img src="../img/2.jpg" alt="Imagem 2" onclick="expandImage(this)">
        </div>
        <div class="image">
            <img src="../img/3.jpg" alt="Imagem 3" onclick="expandImage(this)">
        </div>
    </div>
    <div class="gallery">
        <div class="image">
            <img src="../img/4.jpg" alt="Imagem 1" onclick="expandImage(this)">
        </div>
        <div class="image">
            <img src="../img/5.jpg" alt="Imagem 2" onclick="expandImage(this)">
        </div>
        <div class="lst-image">
        <div class="overlay">+50</div>
        <a href="galeria.php">
            <img src="../img/6.jpg" alt="Imagem 3">
        </div>
    </div>

    <!-- IMAGEM DESTACADA - INICIO -->
    <div class="modal" id="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="expanded-image">
    </div>
    <!-- IMAGEM DESTACADA - FINAL -->
    
    <script src="script.js"></script>
    <!-- GALERIA - FINAL -->

    <!-- RODAPÉ -->
    <?php include("footer.php"); ?>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>