<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quem eu sou? || Clodoaldo Araújo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
      
      body {
        background-color: #c9d6ff;
        background: linear-gradient(to right, #e2e2e2, #c9d6ff);
      }

      h2 {
        font-family: Montserrat, sans-serif;
      }

      p {
        font-family: Montserrat, sans-serif;
      }

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

      .buttons {
        display: flex;
        flex-direction: column;
        align-items: center; /* Centraliza os itens horizontalmente */
        justify-content: center;
        font-family: Montserrat, sans serif;
      }
    </style>

    <body>
    <!-- MENU SUPERIOR -->
    <?php include("header.php"); ?>

    <div class="container-quem-sou">
      <div class="div-quem-sou">
        <h2 style="text-align: center;">Quem eu sou?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="buttons">
            <a href="../screens/diplomas.php"><button type="button" class="btn btn-dark">Meus diplomas e certificados</button></a>
            <br>
            <a href="../screens/mapa_mundi.php"><button type="button" class="btn btn-dark">Países que visitei</button></a>
        </div>
      </div>
      <div class="div-quem-sou">
        <img src="../img/fotoimprensa3.jpg" alt="Imagem 2" style="width: 100%;">
      </div>
    </div>

    <!-- RODAPÉ -->
    <?php include("footer.php"); ?>
  
    <!-- >>>>>>> 5fab3925a5a4efdd34636ffd40445ae25f182619 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>