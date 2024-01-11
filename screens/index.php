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
      padding-left: 15px;
      padding-right: 15px;
      font-size: 13px;
    }

    .session_ferramentas {
      display: flex;
      justify-content: center;
    }

    .container_ferramentas {
      width: 87%;
      padding: 20px 5px 10px 5px;
      border: 1px solid #c10109;
      margin-top: 50px;
      margin-bottom: 25px;
      border-radius: 20px;
    }

    .descricao_session {
      margin-top: 50px;
      margin-bottom: 25px;
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
      color: #c10109;
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

    .session_paises {
      margin: 50px 0px 50px 0px;
    }

    .paises_div_sobre {
      margin: 20px 0px 0px 0px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .session_empresas {
      margin: 50px 0px 50px 0px;
    }

    .lista_empresas {
      margin-bottom: 6px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
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
      margin: 50px 0px 25px 0px;
      display: flex;
      flex-direction: column;
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
      width: 84%;
    }

    .galeria {
      margin: 50px 0px 50px 0px;
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
      margin: 0px;
    }

    .botao_acesso:hover {
      transform: scale(1.2);
    }

    .session-contato {
      background-image: url("../logos/Formulario\ \(1\)\ \(1\).jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position-y: -100px;
    }

    .titulo_principal {
      text-align: center;
      padding: 20px;
      font-family: Montserrat, sans serif;
    }

    .container-form {
      margin: 0 auto;
      width: 90%;
      display: flex;
      justify-content: space-between;
      margin-top: 25px;
    }

    .row-50 {
      width: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 20px 0px 20px 0px;
    }

    .col {
      width: 100%;
    }

    .style_input{
      width: 100%;
      padding-left: 10px;
      border-radius: 20px;
      color: #e2e2e2;
      background-color: #282828;
      border: 1px solid #BE0009;
    }

    .style_input_text {
      width: 100%;
      padding-left: 10px;
      border-radius: 10px;
      color: #e2e2e2;
      background-color: #282828;
      border: 1px solid #BE0009;
    }

    input:focus,
    input:active {
      outline: none;
    }

    textarea:focus,
    textarea:active {
      outline: none;
    }

    input::placeholder {
      opacity: 50%;
      color: white;
    }

    textarea::placeholder {
      opacity: 50%;
      color: white;
    }

    input[type="submit"] {
      background-color: #BE0009;
      color: white;
      border: 0px;
      padding: 1px;
      border-radius: 20px;
    }

    .cursos_session {
      margin: 25px 0px 25px 0px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .cursos_linha {}

    .curso_div_texto {
      width: 70%;
    }

    .cursos_div {
      width: 87%;
      padding: 20px;
      border: 1px solid #BE0009;
      border-radius: 20px;
    }
    
  </style>

  <script>

  </script>
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

  <!-- FERRAMENTAS - INICIO -->
  <div class="cursos_session">
    <h3 style="color: #c10109;">Ferramentas</h3>
    <div class="cursos_div">
      <div class="cursos_linha">
        <h3 style="font-size: 20px;">Ferramentas</h3>
        <div class="curso_div_texto">
          <p style="font-size: 13px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pellentesque vulputate nisl id pretium. Aenean eget magna iaculis lorem ultricies convallis quis ac velit. Maecenas mattis nisl nec dui aliquam luctus. Quisque massa nulla, ornare sit amet consequat eget, vestibulum at mi. Morbi sit amet dui vel arcu congue finibus at ut turpis. Aenean et diam libero. Aliquam faucibus sodales pharetra. Nunc vel sapien suscipit, lacinia dui non, laoreet nibh. Quisque at lacinia tortor, a semper ex. Cras nec magna in nibh iaculis interdum vel vitae tortor. Nulla eget lorem vitae orci ultricies feugiat non eleifend lacus. Mauris egestas commodo tortor ut commodo.</p>
        </div>
      </div>
      <div class="cursos_linha">
        <?php
        include_once("slider-ferramentas.php");
        ?>
      </div>
      <div class="cursos_linha">
        <!-- BOTAO DE ACESSO - INICIO -->
        <div style="display: flex; justify-content: center; align-items: center;">
          <a href="empresas.php" class="botao_acesso" style="text-decoration: none;">Acesse aqui</a>
        </div>
        <!-- BOTAO DE ACESSO - FINAL -->
      </div>
    </div>
  </div>
  <!-- FERRAMENTAS - FINAL -->

  <!-- MAIS VENDIDO - INICIO -->
  <div class="session_curso_principal">
    <h3 style="color: #c10109;">Cursos</h3>
    <div class="curso_principal">
      <div class="row">
        <div class="col">
          <h6>O Mais Vendido</h6>
          <div class="card mb-3" style="width: 70%; border: 0px;">
            <div class="row g-0">
              <div class="col-md-3">
                <img src="../cursos/mapadosucesso.jpg" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8" style="display: flex; align-items: center;">
                <div class="card-body" style="display: flex; flex-direction: column; font-size: 14px;">
                  <h5 class="card-title">MMA</h5>
                  <p class="card-text">Transforme sua empresa em um sucesso com a mentoria individual do Clodoaldo Araújo! Com ferramentas especializadas, estratégias, técnicas de gestão e vendas, o seu negócio pode alcançar novas alturas. Conte com a experiência do Clodoaldo para desenvolver uma visão extraordinária para sua empresa e atingir todos os seus objetivos. Não perca mais tempo e invista em uma mentoria especializada desenvolvida especialmente para você!</p>
                  <p class="card-text"><!--<span>De: <s>R$99,99</s></span><br>--><span>Por: <b style="color:#c10109">R$5.000,00</b></span></p>
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

  <!-- CURSOS - INICIO -->
  <div class="cursos_session">
    <div class="cursos_div">
      <div class="cursos_linha">
        <h3 style="font-size: 20px;">Cursos</h3>
        <div class="curso_div_texto">
          <p style="font-size: 13px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pellentesque vulputate nisl id pretium. Aenean eget magna iaculis lorem ultricies convallis quis ac velit. Maecenas mattis nisl nec dui aliquam luctus. Quisque massa nulla, ornare sit amet consequat eget, vestibulum at mi. Morbi sit amet dui vel arcu congue finibus at ut turpis. Aenean et diam libero. Aliquam faucibus sodales pharetra. Nunc vel sapien suscipit, lacinia dui non, laoreet nibh. Quisque at lacinia tortor, a semper ex. Cras nec magna in nibh iaculis interdum vel vitae tortor. Nulla eget lorem vitae orci ultricies feugiat non eleifend lacus. Mauris egestas commodo tortor ut commodo.</p>
        </div>
      </div>
      <div class="cursos_linha">
        <?php
        include_once("slider-cursos.php");
        ?>
      </div>
      <div class="cursos_linha">
        <!-- BOTAO DE ACESSO - INICIO -->
        <div style="display: flex; justify-content: center; align-items: center;">
          <a href="empresas.php" class="botao_acesso" style="text-decoration: none;">Acesse aqui</a>
        </div>
        <!-- BOTAO DE ACESSO - FINAL -->
      </div>
    </div>
  </div>
  <!-- CURSOS - FINAL -->

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

  <div class="session_paises">

    <!-- PAISES - INICIO -->
    <div class="paises_div_sobre">
      <h3 style="margin-bottom: 20px; color:#c10109;">Mais de 60 paises que já visitei:</h3>
      <?php include_once("paises.php"); ?>
    </div>
    <!-- PAISES - FINAL -->
    
    <!-- BOTAO DE ACESSO - INICIO -->
    <div style="display: flex; justify-content: center; align-items: center;">
      <a href="quem_sou.php" class="botao_acesso" style="text-decoration: none;">Acesse aqui</a>
    </div>
    <!-- BOTAO DE ACESSO - FINAL -->

  </div>

  <div class="session_empresas">

    <!-- LISTA DE EMPRESAS - INICIO -->
    <div class="lista_empresas">
      <h3 style="margin-bottom: 0px; color:#c10109;">Empresas:</h3>
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

  </div>

  <!-- GALERIA - INICIO -->
  <div class="galeria">
    
    <!-- BOTAO DE ACESSO - INICIO -->
    <div style="display: flex; justify-content: center; align-items: center;">
      <a href="galeria.php" class="botao_acesso" style="text-decoration: none;">Acesse aqui</a>
    </div>
    <!-- BOTAO DE ACESSO - FINAL -->
  
  </div>
  <!-- GALERIA - FINAL -->

  <!-- CONTATO - INICIO -->
  <div class="session-contato">

    <?php

        include('../bd/bd.php');
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $cidade = $_POST["cidade"];
            $idade = $_POST["idade"];
            $comentario = $_POST["comentario"];

            date_default_timezone_set('America/Sao_Paulo');
            $data_envio = date('d-m-Y H:i:s');

            $conn->query("INSERT INTO contato (nome, email, telefone, cidade, idade, comentario, data_envio) VALUES ( '$nome', '$email', '$telefone', '$cidade', '$idade', '$comentario', '$data_envio')");
            $conn->close();

            echo '<script>alert("Formulário enviado com sucesso!");</script>';

        }

        ?>

    <div class="container-form">
        <div class="row-50">
            <div class="col"></div>
        </div>
        <div class="row-50" style="padding-right: 15px;">
            <form style="width: 100%;" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="col" style="margin-top: 16px;">
                    <div class="mb-3">
                        <h5 style="color: #e2e2e2; padding-left: 7px;">Contato</h5>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="style_input" id="nome_form" name="nome" placeholder="Nome" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="style_input" id="email_form" name="email" placeholder="Email" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="style_input" id="telefone_form" name="telefone" placeholder="Telefone" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="style_input" id="cidade_form" name="cidade" placeholder="Cidade" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <input type="number" class="style_input" id="cidade_form" name="idade" placeholder="Idade" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <textarea class="style_input_text" id="comentario_form" name="comentario" placeholder="Comentario" rows="5" autocomplete="off" style="resize: none;"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control" id="submit_form" value="Enviar">
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
  <!-- CONTATO - FINAL -->

  <!-- RODAPÉ - INICIO -->
  <?php include("footer.php"); ?>
  <!-- RODAPÉ - FINAL -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>