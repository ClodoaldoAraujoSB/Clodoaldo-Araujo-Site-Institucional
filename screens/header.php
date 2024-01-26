<?php

$pagina = basename($caminho);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .header-menu {
      width: 100%;
      display: flex;
      justify-content: center;
      padding: 20px;
      background-color: #c10109;
    }

    .navbar-site {
      width: 90%;
    }

    .navbar-icone-principal {
      width: 20%;
      float: left;
    }

    .navbar-menu {
      width: 70%;
      float: right;
      display: flex;
      align-items: center;
      text-align: center;
      justify-content: flex-end;
    }

    .list_menu {
      margin: 0px;
    }

    .item_menu {
      margin: 0px;
      padding: 0px 0px 0px 30px;
    }

    .itemMenu {
      padding: 0px 0px 0px 20px;
    }

    .texto_menu {
      font-size: 15px;
      text-transform: capitalize;
    }

    .item_menu_logo {
      margin: 0px;
      background-color: #fff;
    }

    .b_icone_principal {
      color: #c10109;
    }

    .button-header-logo {
      font-size: 15px;
      color: #e1e1e1;
      font-family: inherit;
      font-weight: 500;
      cursor: pointer;
      position: relative;
      border: none;
      background: none;
      text-transform: uppercase;
      transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
      transition-duration: 400ms;
      transition-property: color;
    }

    .button-header {
      font-size: 15px;
      color: #e1e1e1;
      font-family: inherit;
      font-weight: 500;
      cursor: pointer;
      position: relative;
      border: none;
      background: none;
      text-transform: uppercase;
      transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
      transition-duration: 400ms;
      transition-property: color;
    }

    .button-header:focus,
    .button-header:hover {
      color: #fff;
    }

    .button-header:focus:after,
    .button-header:hover:after {
      width: 100%;
      left: 0%;
    }

    .button-header:after {
      content: "";
      pointer-events: none;
      bottom: -2px;
      left: 50%;
      position: absolute;
      width: 0%;
      height: 2px;
      background-color: #fff;
      transition-timing-function: cubic-bezier(0.25, 0.8, 0.25, 1);
      transition-duration: 400ms;
      transition-property: width, left;
    }

    .button-header svg {
      fill: #fff;
      margin: 2px;
    }

    .index-button {
      font-weight: bolder;
    }

    .button-header.ative {
      color: #fff;
      border-bottom: 2px solid #fff;
    }

    @media screen and (max-width: 768px) {

      .navbar-menu {
        width: 100%;
      }

      .navbar-site {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .navbar-menu {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .list-menu {
        padding-top: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

    }

  </style>

</head>

<body>
  <div class="header-menu">
    <nav class="navbar-site">
      <div class="navbar-icone-principal">
        <div class="list-menu" style="display: flex; justify-content: flex-start;">
          <div class="item_menu_logo"><a href="index.php"><button class="button-header-logo"><b class="b_icone_principal">CLODOALDO ARAÚJO</b></button></a></div>
        </div>
      </div>
      <div class="navbar-menu">
        <div class="list-menu">
          <div class="item-menu" style=""><a href="index.php">
            <button class="button-header <?php echo ($pagina == 'index.php') ? 'ative' : ''; ?>" style="padding: 0px;">
              <p class="texto_menu" style="margin: 0px;">home</p>
            </button></a>
          </div>
          <div class="item-menu" style=""><a href="ferramentas_ebook.php">
            <button class="button-header <?php echo ($pagina == 'ferramentas_ebook.php') ? 'ative' : ''; ?>" style="padding: 0px;">
              <p class="texto_menu" style="margin: 0px;">ferramentas grátis</p>
            </button></a>
          </div>
          <div class="item-menu" style=""><a href="quem_sou.php">
            <button class="button-header <?php echo ($pagina == 'quem_sou.php') ? 'ative' : ''; ?>" style="padding: 0px;">
              <p class="texto_menu" style="margin: 0px;">sobre</p>
            </button></a>
          </div>
          <div class="item-menu" style=""><a href="empresas.php">
            <button class="button-header <?php echo ($pagina == 'empresas.php') ? 'ative' : ''; ?>" style="padding: 0px;">
              <p class="texto_menu" style="margin: 0px;">empresas</p>
            </button></a>
          </div>
          <div class="item-menu" style=""><a href="cursos.php">
            <button class="button-header <?php echo ($pagina == 'cursos.php') ? 'ative' : ''; ?>" style="padding: 0px;">
              <p class="texto_menu" style="margin: 0px;">cursos</p>
            </button></a>
          </div>
          <div class="item-menu" style=""><a href="galeria.php">
            <button class="button-header <?php echo ($pagina == 'galeria.php') ? 'ative' : ''; ?>" style="padding: 0px;">
              <p class="texto_menu" style="margin: 0px;">galeria</p>
            </button></a>
          </div>
          <div class="item-menu" style=""><a href="contato.php">
            <button class="button-header <?php echo ($pagina == 'contato.php') ? 'ative' : ''; ?>" style="padding: 0px;">
              <p class="texto_menu" style="margin: 0px;">contato</p>
            </button></a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</body>
</html>