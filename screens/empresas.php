<?php
  include_once("ca3.php");
  include_once("ca3_steel.php");
  include_once("circuit.php");
  include_once("isteel.php");
  include_once("jac.php");
  include_once("point_pixel.php");
  include_once("rota_da_inovacao.php");
  include_once("spyder_race.php");
  include_once("startup_school.php");
  include_once("super_business.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Inicial || Clodoaldo Araújo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>

      .div_lista_empresas {
        display: flex;
        justify-content: center; 
        align-items: center; 
      }

      .div_lista_empresas button {
        
      }

    </style>

  </head>
  <body>
    <!-- MENU SUPERIOR -->
    <?php include("header.php"); ?>

    <!-- TITULO - INICIO -->
    <h1 style="text-align: center;"> Minhas Empresas: </h1>

    <!-- LISTA DE EMPRESAS - INICIO -->
    <div class="lista_empresas">
      <div class="div_lista_empresas">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ca3Modal"><img src="../img/2.jpg" alt="ca3" style="height: 50px;"></button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ca3_steelModal"><img src="../img/2.jpg" alt="ca3 steel" style="height: 50px;"></button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#circuitModal"><img src="../img/2.jpg" alt="circuit" style="height: 50px;"></button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#isteelModal"><img src="../img/logo-isteel.jpg" alt="isteel" style="height: 50px;"></button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#jacModal"><img src="../img/logo-jac.jpg" alt="jac" style="height: 50px;"></button>
      </div>
      <br>
      <div class="div_lista_empresas">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#point_pixelModal"><img src="../img/2.jpg" alt="Point Pixel" style="height: 50px;"></button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#rota_da_inovacaoModal"><img src="../img/logo-rota.jpg" alt="Rota da Inovaçao" style="height: 50px;"></button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#spyder_raceModal"><img src="../img/logo-spyder.jpg" alt="Spyder Race" style="height: 50px;"></button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#startup_schoolModal"><img src="../img/logo-startup.jpg" alt="Startup School" style="height: 50px;"></button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#super_businessModal"><img src="../img/logo-super business.jpg" alt="Super Business" style="height: 50px;"></button>
      </div>
    </div>
    <!-- LISTA DE EMPRESAS - FIM -->

    <!-- RODAPÉ -->
    <?php include("footer.php"); ?>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>