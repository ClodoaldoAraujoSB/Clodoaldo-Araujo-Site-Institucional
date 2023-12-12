<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

      .header-menu{
        display: flex;
        justify-content: center;
        padding: 20px;
        background-color: #c10109;
      }

      .navbar-site{
        width: 100%;
      }

      .navbar-icone-principal{
        width: 20%;
        float: left;
      }

      .navbar-menu{
        width: 70%;
        float: right;
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
      }

      .list_menu{
        margin: 0px;
      }

      .item_menu{
        margin: 0px;
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

    </style>  

  </head>
  <body>
    <div class="header-menu">
      <nav class="navbar-site">
        <div class="navbar-icone-principal">
          <div class="list-menu" style="display: flex; justify-content: center;">
            <div class="item-menu"><a href="index.php"><button class="button-header">Clodoaldo Araújo</button></a></div>
          </div>
        </div>
        <div class="navbar-menu">
          <div class="list-menu">
            <div class="item-menu"><a href="index.php"><button class="button-header">Home</button></a></div>
            <div class="item-menu"><a href="ferramentas_ebook.php"><button class="button-header">Ferramentas grátis</button></a></div>
            <div class="item-menu"><a href="quem_sou.php"><button class="button-header">Sobre</button></a></div>
            <div class="item-menu"><a href="empresas.php"><button class="button-header">Empresas</button></a></div>
            <div class="item-menu"><a href="cursos.php"><button class="button-header">Cursos</button></a></div>
            <div class="item-menu"><a href="galeria.php"><button class="button-header">Galeria</button></a></div>
            <div class="item-menu"><a href="contato.php"><button class="button-header">Contato</button></a></div>
          </div>
        </div>  
      </nav>
    </div>
  </body>
</html>