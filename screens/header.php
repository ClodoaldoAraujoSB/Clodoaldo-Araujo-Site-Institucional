<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

      .navbar-site {
        padding: 20px;
        background-color: #c10109;

      }

      .navbar-icone-principal {
        width: 39%;
        display: inline-block;
      }

      .navbar-menu {
        width: 60%;
        display: inline-block;
        float: right;
      }

      .list-menu {
        display: flex;
        justify-content: flex-end;
      }

      .item-menu {
        display: inline-block;
        padding: 0px 10px 0px 10px;
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

    <nav class="navbar-site">
      <div class="navbar-icone-principal">
        <a href="index.php"><button class="index-button">Clodoaldo Araújo</button></a>
      </div>
      <div class="navbar-menu">
        <ul class="list-menu">
          <li class="item-menu"><a href="index.php"><button class="button-header">Home</button></a></li>
          <li class="item-menu"><a href="ferramentas_ebook.php"><button class="button-header">Ferramentas grátis</button></a></li>
          <li class="item-menu"><a href="quem_sou.php"><button class="button-header">Quem eu sou?</button></a></li>
          <li class="item-menu"><a href="empresas.php"><button class="button-header">Minhas empresas</button></a></li>
          <li class="item-menu"><a href="cursos.php"><button class="button-header">Meus cursos</button></a></li>
          <li class="item-menu"><a href="galeria.php"><button class="button-header">Galeria</button></a></li>
          <li class="item-menu"><a href="contato.php"><button class="button-header">Contato</button></a></li>
        </ul>
      </div>
    </nav>
    
  </body>
</html>