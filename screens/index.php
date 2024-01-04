<?php

include_once("empresas/ca3.php");
include_once("empresas/ca3_steel.php");
include_once("empresas/circuit.php");

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pagina Inicial || Clodoaldo Araújo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>

    .descricao_cursos {
      width: 100%;
      padding-left: 35px;
      padding-right: 35px;
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
      margin-top: 20px;
      margin-bottom: 20px;
      border-radius: 20px;
    }

    .descricao_session {
      margin-top: 20px;
      margin-bottom: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .quem_div_sobre {
      width: 85%;
    }

    .linha_div_descricao {
      display: flex;
      justify-content: center;
      background-image: url('../img/fotoimprensa3.jpg');
      background-size: 50%;
      background-position-x: left;
      background-position-y: top;
      background-repeat: no-repeat;
    }

    .coluna_div {
      width: 55%;
    }

    .coluna_div_image {
      width: 45%;
    }

    .titulo_sobre {
      margin-bottom: 20px;
    }

    .titulo_sobre_h1 {
      color: red;
      font-size: 25px;
      padding-left: 15%;
    }

    .descricao_sobre {
      background-color: red;
      color: white;
      padding: 20px;
      margin: 0px;
      font-size: 12px;
    }

    .paises_div_sobre {
      margin: 20px 0px 0px 0px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .lista_empresas {
      margin-bottom: 6px;
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

    .galeria {
      margin: 20px 0px 20px 0px;
      height: 400px;

      background-image: url('../logos/fotos-galeria.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;

      display: flex;
      justify-content: center;
      align-items: flex-end;
    }

    .botao_acesso {
      background: #c10109; 
      color: white; 
      border-radius: 7px; 
      padding: 0px 10px 2px 10px;
      margin-top: 10px;
      margin-bottom: 20px;
    }

    .botao_acesso:hover {
      transform: scale(1.2);
    }
    
  </style>

  <script>

  </script>
</head>

<body>

  <!-- MENU SUPERIOR - INICIO -->
  <?php include("header.php"); ?>
  <!-- MENU SUPERIOR - FINAL -->

  <!-- BANNER - INICIO -->
  <div class="banner_principal">
    <img src="../logos/Linkedin.jpg" alt="Banner Principal" style="width: -webkit-fill-available;">
  </div>
  <!-- BANNER - FINAL -->

  <!-- TEXTO INICIAL - INICIO -->
  <div class="session_ferramentas">
    <div class="container_ferramentas">
      <div class="descricao_cursos">
          <h5>Cursos</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pellentesque vulputate nisl id pretium. Aenean eget magna iaculis lorem ultricies convallis quis ac velit. Maecenas mattis nisl nec dui aliquam luctus. Quisque massa nulla, ornare sit amet consequat eget, vestibulum at mi. Morbi sit amet dui vel arcu congue finibus at ut turpis. Aenean et diam libero. Aliquam faucibus sodales pharetra. Nunc vel sapien suscipit, lacinia dui non, laoreet nibh. Quisque at lacinia tortor, a semper ex. Cras nec magna in nibh iaculis interdum vel vitae tortor. Nulla eget lorem vitae orci ultricies feugiat non eleifend lacus. Mauris egestas commodo tortor ut commodo.</p>
      </div>
    </div>
  </div>
  <!-- TEXTO INICIAL - FINAL -->

  <!-- DESCRICAO - INICIO -->
  <div class="descricao_session">
    <div class="quem_div_sobre">
      <div class="linha_div_descricao">
        <div class="coluna_div_image"></div>
        <div class="coluna_div">
          <div class="titulo_sobre">
            <span><b class="titulo_sobre_h1">Eu sou</b></span><br>
            <span><b class="titulo_sobre_h1">Clodoaldo Araújo</b></span>
          </div>
          <div class="descricao_sobre">
          <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet mauris ut nulla tincidunt ultricies hendrerit sit amet nisi. Pellentesque viverra sit amet augue sed varius. Integer vitae egestas libero. Cras sit amet tincidunt tellus. Curabitur quis odio non nibh congue placerat sit amet at lacus. Aliquam varius convallis ligula. Phasellus consequat enim sed volutpat posuere. Nam sed enim consequat, consequat velit feugiat, vestibulum odio. Maecenas in condimentum leo, eu pellentesque enim. Fusce varius arcu velit, ut tempor ligula dictum ac. Ut pharetra sit amet ante et vestibulum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tincidunt lacinia magna, vitae fringilla turpis tincidunt sed. Aliquam fringilla mi in ex iaculis, at consequat ante efficitur. Nullam fermentum odio quis pellentesque finibus. Maecenas nisi lectus, dignissim nec nisi eget, interdum porttitor arcu.</P>
            <p> Donec vitae risus sed tellus molestie pretium non sit amet ligula. Maecenas sodales nisi ut odio ultricies mollis. Nam quis egestas arcu. Maecenas metus justo, ultrices euismod dictum id, accumsan eget turpis. Aenean consectetur tellus sed urna condimentum, id commodo diam maximus. Nunc non fermentum erat. Praesent suscipit arcu ut consequat sodales. Maecenas mollis bibendum cursus. Duis dignissim tristique nibh nec porttitor. Duis feugiat feugiat ultricies. Quisque tincidunt vulputate purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vel commodo libero.</p>
            <p style="margin-bottom: 0px;"> Nam id volutpat nunc. In ac porta lectus. Ut in placerat elit, id porttitor justo. Aenean sed augue vitae ipsum ornare cursus. Nulla ac enim sed nisi blandit malesuada eu ut tellus. Maecenas ullamcorper enim nec quam pharetra cursus. Ut at est eu diam tristique feugiat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas sit amet blandit ante. Quisque commodo urna id pellentesque suscipit. In vestibulum risus vel purus fringilla viverra. Duis eget augue non augue egestas rhoncus. Donec pellentesque fermentum vehicula. Cras condimentum ligula vel odio suscipit pharetra. Cras dignissim augue urna, non malesuada felis rutrum vel. Nulla a ligula vulputate, gravida ligula et, dapibus libero.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- DESCRICAO - FINAL -->

  <!-- PAISES - INICIO -->
  <div class="paises_div_sobre">
    <h3 style="margin-bottom: 20px;">Mais de 60 paises que já visitei:</h3>
    <?php include_once("paises.php"); ?>
  </div>
  <!-- PAISES - FINAL -->
  
  <!-- BOTAO DE ACESSO - INICIO -->
  <div style="display: flex; justify-content: center; align-items: center;">
    <a href="quem_sou.php" class="botao_acesso" style="text-decoration: none;">Acesse aqui</a>
  </div>
  <!-- BOTAO DE ACESSO - FINAL -->

  <!-- LISTA DE EMPRESAS - INICIO -->
  <div class="lista_empresas">
    <div class="div_lista_empresas">
      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ca3Modal"><img src="../logos/logo-ca3.png" alt="ca3" style="height: 70px;"></button>
      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ca3_steelModal"><img src="../logos/logo-ca3_steel.png" alt="ca3 steel" style="height: 70px;"></button>
      <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#circuitModal"><img src="../logos/logo-circuit.png" alt="circuit" style="height: 70px;"></button>
    </div>
  </div>
  <!-- LISTA DE EMPRESAS - FINAL -->

  <!-- BOTAO DE ACESSO - INICIO -->
  <div style="display: flex; justify-content: center; align-items: center;">
    <a href="empresas.php" class="botao_acesso" style="text-decoration: none;">Acesse aqui</a>
  </div>
  <!-- BOTAO DE ACESSO - FINAL -->

  <!-- MAIS VENDIDO - INICIO -->
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
  <!-- MAIS VENDIDO - FINAL -->

  <!-- GALERIA - INICIO -->
  <div class="galeria">
    
    <!-- BOTAO DE ACESSO - INICIO -->
    <div style="display: flex; justify-content: center; align-items: center;">
      <a href="galeria.php" class="botao_acesso" style="text-decoration: none;">Acesse aqui</a>
    </div>
    <!-- BOTAO DE ACESSO - FINAL -->
  
  </div>
  <!-- GALERIA - FINAL -->

  <!-- RODAPÉ - INICIO -->
  <?php include("footer.php"); ?>
  <!-- RODAPÉ - FINAL -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>