<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quem eu sou? || Clodoaldo Araújo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>

      body {
        display: flex;
        flex-direction: column;
      }

      .session_sobre {
        margin-top: 50px;
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

      .linha_div_continuacao {
        margin-top: 50px;
        display: flex;
        justify-content: center;
        background-image: url('../img/fotoimprensa3.jpg');
        background-size: 50%;
        background-position-x: right;
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

      .continuacao_sobre {
        background-color: red;
        color: white;
        padding: 20px;
        margin: 100px 0px 0px 0px;
        font-size: 12px;
      }

      .paises_div_sobre {
        margin: 20px 0px 20px 0px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .diplomas_div_sobre {
        margin: 20px 0px 20px 0px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .diploma_titulo {}

      .diplomas_linha {
        display: flex;
        justify-content: center;
        align-items: flex-start;
      }

      .diploma_card {
        margin: 5px 10px 0px 10px;
        width: 30%;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        padding: 20px;
      }

      .diploma_imagem_div {
        width: 300px;
        height: 200px;
      }

      .diploma_imagem {
        width: 300px;
        height: 200px;
      }

      .diploma_texto_div {
        width: 300px;
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: start;
      }

    </style>

    <body>
    <!-- MENU - INICIO -->
    <?php 
    $caminho = $_SERVER['PHP_SELF'];
    include("header.php");
    ?>
    <!-- MENU - FINAL -->

    <div class="session_sobre">

      <!-- DESCRICAO - INICIO -->
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

        <div class="linha_div_continuacao">
        <div class="coluna_div">
            <div class="titulo_sobre"></div>
            <div class="continuacao_sobre">
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet mauris ut nulla tincidunt ultricies hendrerit sit amet nisi. Pellentesque viverra sit amet augue sed varius. Integer vitae egestas libero. Cras sit amet tincidunt tellus. Curabitur quis odio non nibh congue placerat sit amet at lacus. Aliquam varius convallis ligula. Phasellus consequat enim sed volutpat posuere. Nam sed enim consequat, consequat velit feugiat, vestibulum odio. Maecenas in condimentum leo, eu pellentesque enim. Fusce varius arcu velit, ut tempor ligula dictum ac. Ut pharetra sit amet ante et vestibulum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer tincidunt lacinia magna, vitae fringilla turpis tincidunt sed. Aliquam fringilla mi in ex iaculis, at consequat ante efficitur. Nullam fermentum odio quis pellentesque finibus. Maecenas nisi lectus, dignissim nec nisi eget, interdum porttitor arcu.</P>
              <p> Donec vitae risus sed tellus molestie pretium non sit amet ligula. Maecenas sodales nisi ut odio ultricies mollis. Nam quis egestas arcu. Maecenas metus justo, ultrices euismod dictum id, accumsan eget turpis. Aenean consectetur tellus sed urna condimentum, id commodo diam maximus. Nunc non fermentum erat. Praesent suscipit arcu ut consequat sodales. Maecenas mollis bibendum cursus. Duis dignissim tristique nibh nec porttitor. Duis feugiat feugiat ultricies. Quisque tincidunt vulputate purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer vel commodo libero.</p>
              <p style="margin-bottom: 0px;"> Nam id volutpat nunc. In ac porta lectus. Ut in placerat elit, id porttitor justo. Aenean sed augue vitae ipsum ornare cursus. Nulla ac enim sed nisi blandit malesuada eu ut tellus. Maecenas ullamcorper enim nec quam pharetra cursus. Ut at est eu diam tristique feugiat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas sit amet blandit ante. Quisque commodo urna id pellentesque suscipit. In vestibulum risus vel purus fringilla viverra. Duis eget augue non augue egestas rhoncus. Donec pellentesque fermentum vehicula. Cras condimentum ligula vel odio suscipit pharetra. Cras dignissim augue urna, non malesuada felis rutrum vel. Nulla a ligula vulputate, gravida ligula et, dapibus libero.</p>
            </div>
          </div>
          <div class="coluna_div_image"></div>
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

      <!-- DIPLOMAS - INICIO -->
      <div class="diplomas_div_sobre">
        <div class="diploma_titulo">
          <h3 style="margin-bottom: 20px;">Formação</h3>
        </div>
        
        <div class="diplomas_linha">
          
          <div class="diploma_card">
            <div class="diploma_imagem_div">
              <img class="diploma_imagem" src="../logos/eep_logo.jpg">
            </div>
            <div class="diploma_texto_div">
              <h5>Graduação em Engenharia Civil</h5>
            </div>
          </div>

          <div class="diploma_card">
            <div class="diploma_imagem_div">
              <img class="diploma_imagem" src="../logos/eep_logo.jpg">
            </div>
            <div class="diploma_texto_div">
              <h5>Graduação em Engenharia Mecanica</h5>
            </div>
          </div>

          <div class="diploma_card">
            <div class="diploma_imagem_div">
              <img class="diploma_imagem" src="../logos/inpg_logo.png">
            </div>
            <div class="diploma_texto_div">
              <h5>Pós-graduação em Gestão Estrategica de Negocios</h5>
            </div>
          </div>

        </div>

        <div class="diplomas_linha">
          
          <div class="diploma_card">
            <div class="diploma_imagem_div">
              <img class="diploma_imagem" src="../logos/empretec_logo.png">
            </div>
            <div class="diploma_texto_div">
              <h5>Empretec</h5>
            </div>
          </div>

          <div class="diploma_card">
            <div class="diploma_imagem_div">
              <img class="diploma_imagem" src="../logos/isca_logo.jpg">
            </div>
            <div class="diploma_texto_div">
              <h5>Pós-graduação em Gestão Estrategica de Negocios</h5>
            </div>
          </div>

          <div class="diploma_card">
            <div class="diploma_imagem_div">
              <img class="diploma_imagem" src="../logos/universidade-california.jpg">
            </div>
            <div class="diploma_texto_div">
              <h5>MBA de empreendedorismo</h5>
            </div>
          </div>

        </div>

      </div>
      <!-- DIPLOMAS - FINAL -->

    <!-- RODAPÉ - INICIO -->
    <?php include("footer.php"); ?>
    <!-- RODAPÉ - FINAL -->
  
    <!-- >>>>>>> 5fab3925a5a4efdd34636ffd40445ae25f182619 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>