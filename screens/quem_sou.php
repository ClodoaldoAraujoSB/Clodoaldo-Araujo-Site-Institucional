<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quem eu sou? || Clodoaldo Araújo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    body {
      display: flex;
      flex-direction: column;
    }

    .session_sobre {
      padding: 50px 0px 50px 0px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: #282828;
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
      font-size: 20px;
      margin-bottom: 20px;
      margin-left: 70px;
      color: #BE0009;
    }

    .titulo_sobre h1 {
      color: #BE0009;
      font-size: 25px;
      padding-left: 15%;
    }

    .descricao_sobre {
      background-color: #BE0009;
      color: white;
      padding: 20px;
      margin: 0px;
      font-size: 12px;
    }

    .continuacao_sobre {
      background-color: #BE0009;
      color: white;
      padding: 20px;
      margin: 100px 0px 0px 0px;
      font-size: 12px;
    }

    .paises_div_sobre {
      padding: 20px 0px 20px 0px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: #282828;
    }

    .diplomas_div_sobre {
      padding: 20px 0px 20px 0px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: #282828;
    }

    .diploma_titulo {
      color: #e2e2e2;
    }

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
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .diploma_imagem {
      max-width: 250px;
      max-height: 200px;
      padding: 20px;
    }

    .diploma_texto_div {
      width: 300px;
      display: flex;
      text-align: center;
      justify-content: center;
      align-items: start;
      color: #e2e2e2;
    }

    .h_paises {
      margin-bottom: 20px;
      color: #e2e2e2;
    }

    @media screen and (max-width: 768px) {
      
      .diplomas_linha {
        flex-direction: column;
        align-items: center;
        width: 90%;
      }

      .h_paises {
        font-size: 20px;
      }

      .descricao_session {
        width: 100%;
      }

      .quem_div_sobre {
        width: 100%;
      }

      .linha_div_descricao {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        background-position-x: center;
        background-size: 100%;
      }

      .coluna_div_image {
        height: 0px;
      }

      .coluna_div {
        width: 90%;
        margin: 100px 0px 0px 0px;
      }

      .linha_div_continuacao {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        background-position-x: center;
        background-size: 100%;
      }

      .continuacao_sobre {
        /*margin: 170px 0px 0px 0px;*/
      }

      .session_sobre {
        margin-top: 0px;
      }

    }

    </style>
</head>

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
              <p> Clodoaldo Araújo, mineiro. </p>
              <p> Apaixonado pela cidade de Limeira, onde mora desde a infância. </p>
              <p> Nascido numa família humilde batalhou e conseguiu realizar o sonho da graduação, se formou Engenheiro Mecânico. </p>
              <p> Imparável, mudou-se para os Estados Unidos para fazer MBA na Universidade da Califórnia. </p>
              <p> Voltando ao Brasil fundou sua primeira empresa, a metalúrgica do ramo de aço CA3 Laminação. </p>
              <p> Ampliou seus investimentos indo para construção civil, voltou aos bancos escolares e se graduou Engenheiro Civil para gerenciar sua construtora, foi quando construiu o primeiro condomínio empresarial de Limeira – CONEL. </p>
              <p> Buscando constantemente aprimorar suas habilidades, cursou também pós-graduação em Gestão Estratégica de Negócios e depois em pós-graduação em Gestão Empresarial. </p>
              <p> Em um momento desafiador, menos afortunado, um amigo o inscreveu para o programa “O Aprendiz 5” da rede Record.  Venceu uma disputa com milhares de pessoas, ingressou no programa e se consagrou vencedor e sócio do renomado empresário Roberto Justus. </p>
              <p style="margin-bottom: 0px;">Foi convidado para palestrar por todo o país, disseminando a mensagem de empreendedorismo em mais de 150 cidades. Assumindo o papel de apresentador do programa “Rota da Inovação”, que percorreu o mundo passando por 61 países em busca das maiores inovações da atualidade, Clodoaldo ampliou sua influência global. </p>
            </div>
          </div>
        </div>

        <div class="linha_div_continuacao">
          <div class="coluna_div">
              <div class="titulo_sobre"></div>
              <div class="continuacao_sobre">
                <p>Tornou-se sócio da Spyder Race, uma empresa que fabrica carros de corrida. Hoje é também a quinta escola de pilotos de carro de corrida do Brasil, com planos de retornar ao campeonato brasileiro em 2025. </p>
                <p>Antecipando-se ao seu tempo, Clodoaldo idealizou uma nova empresa que promete revolucionar o mercado do ferro e aço, com o aplicativo para celular iSteel. Uma ferramenta será o ponto de encontro do aço. Essa plataforma inovadora conecta fabricantes e distribuidores de aço aos clientes finais, garantindo eficiência nos processos, agilidade na entrega e redução de custos. </p>
                <p>Novos empreendimentos estão a todo vapor em sua empresa CA3 Incorporadora, incluindo a idealização de um prédio de apartamentos de alto padrão, um loteamento residencial e um novo condomínio empresarial, um dos poucos endereços na cidade com heliporto. </p>
                <p>Seu desejo de apoiar novos empreendedores sempre teve lugar especial em seu dia a dia, com uma parceria com a renomada universidade Unicamp, campus de Limeira, foi fundada a empresa Startup School Ventures. Uma iniciativa que irá fomentar o desenvolvimento nas áreas de tecnologia, inteligência artificial e educação. Reduzindo a distância entre a escola e o mercado de trabalho. </p>
                <p style="margin-bottom: 0px;">Sua agência de marketing e publicidade, a Point Pixel, atende Limeira e região e as empresas do grupo empresarial de Clodoaldo. Uma agência 360graus que tem foco em solucionar os problemas dos clientes, inovar ideias e garantindo uma comunicação eficaz. Uma de suas atividades é atender a alta demanda dos cursos e treinamentos que Clodoaldo ministra no Brasil e no mundo. Todos centrados nos quatro pilares para o sucesso: Autoconhecimento, empreendedorismo, gestão e inovação. </p>
              </div>
          </div>
          <div class="coluna_div_image"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- DESCRICAO - FINAL -->

  <!-- PAISES - INICIO -->
  <div class="paises_div_sobre">
    <h3 class="h_paises">Mais de 60 paises que já visitei:</h3>
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
          <img class="diploma_imagem" src="../logos/eep-faculdades.webp">
        </div>
        <div class="diploma_texto_div">
          <h5>Graduação em Engenharia Civil</h5>
        </div>
      </div>

      <div class="diploma_card">
        <div class="diploma_imagem_div">
          <img class="diploma_imagem" src="../logos/eep-faculdades.webp">
        </div>
        <div class="diploma_texto_div">
          <h5>Graduação em Engenharia Mecanica</h5>
        </div>
      </div>

      <div class="diploma_card">
        <div class="diploma_imagem_div">
          <img class="diploma_imagem" src="../logos/inpg-faculdade.png">
        </div>
        <div class="diploma_texto_div">
          <h5>Pós-graduação em Gestão Estrategica de Negocios</h5>
        </div>
      </div>

    </div>

    <div class="diplomas_linha">

      <div class="diploma_card">
        <div class="diploma_imagem_div">
          <img class="diploma_imagem" src="../logos/logo-empretec-branco.png">
        </div>
        <div class="diploma_texto_div">
          <h5>Empretec</h5>
        </div>
      </div>

      <div class="diploma_card">
        <div class="diploma_imagem_div">
          <img class="diploma_imagem" src="../logos/isca-logo-white.png">
        </div>
        <div class="diploma_texto_div">
          <h5>Pós-graduação em Gestão Estrategica de Negocios</h5>
        </div>
      </div>

      <div class="diploma_card">
        <div class="diploma_imagem_div">
          <img class="diploma_imagem" src="../logos/California_State_University,_Fresno_seal.svg.png">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>