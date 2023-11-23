<?php ?>

<!DOCTYPE html>
<html>
  <head>
  <title>Admin || Clodoaldo Araújo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <style>

    .custom-navbar {
      background-color: #c10109;
    }

  </style>

</head>
<body>
<nav class="navbar navbar-dark fixed-top custom-navbar">
  <div class="container-fluid custom-navbar">
    <a class="navbar-brand" href="#">Admin - Clodoaldo Araújo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvaslightNavbar" aria-controls="offcanvaslightNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-light custom-navbar" tabindex="-1" id="offcanvaslightNavbar" aria-labelledby="offcanvaslightNavbarLabel">
      <div class="offcanvas-header custom-navbar">
        <h5 class="offcanvas-title" id="offcanvaslightNavbarLabel">Menu do Admin</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body custom-navbar">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a href="home.php"><button type="button" class="btn btn-outline-light">Início</button></a>
          </li>
          <br>
          <li class="nav-item">
            <a href="leads.php"><button type="button" class="btn btn-outline-light">Leads</button></a>
          </li>
          <br>
          <li class="nav-item">
            <a href="contatos.php"><button type="button" class="btn btn-outline-light">Contatos</button></a>
          </li>
          <br>
          <li class="nav-item">
            <a href="ferramentas.php"><button type="button" class="btn btn-outline-light">Ferramentas</button></a>
          </li>
          <br>
          <li class="nav-item">
            <a href="imagens.php"><button type="button" class="btn btn-outline-light">Imagens</button></a>
          </li>
          <br>
          <li class="nav-item">
            <a href="videos.php"><button type="button" class="btn btn-outline-light">Videos</button></a>
          <br>
          <li class="nav-item">
            <a href="../screens/index.php"><button type="button" class="btn btn-outline-light">Sair</button></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
</body>
</html>