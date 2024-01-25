<?php

include('../bd/bd.php');

session_start();
if(isset($_SESSION['autorizado']) && $_SESSION['autorizado'] == true) {

// Obtém o número de leads do dia
$leadsDiaQuery = "SELECT COUNT(*) as total FROM usuario WHERE DATE(data_envio) = CURDATE()";
$leadsDiaResult = $conn->query($leadsDiaQuery);
$leadsDia = $leadsDiaResult->fetch_assoc()['total'];

// Obtém o número de leads do mês
$leadsMesQuery = "SELECT COUNT(*) as total FROM usuario WHERE MONTH(data_envio) = MONTH(CURDATE()) AND YEAR(data_envio) = YEAR(CURDATE())";
$leadsMesResult = $conn->query($leadsMesQuery);
$leadsMes = $leadsMesResult->fetch_assoc()['total'];
//echo $leadsMes;

// Obtém o número de leads do ano
$leadsAnoQuery = "SELECT COUNT(*) as total FROM usuario WHERE YEAR(data_envio) = YEAR(CURDATE())";
$leadsAnoResult = $conn->query($leadsAnoQuery);
$leadsAno = $leadsAnoResult->fetch_assoc()['total'];
//echo $leadsAno;


// Obtém o número de contatos do dia
$contatosDiaQuery = "SELECT COUNT(*) as total FROM contato WHERE DATE(data_envio) = CURDATE()";
$contatosDiaResult = $conn->query($contatosDiaQuery);
$contatosDia = $contatosDiaResult->fetch_assoc()['total'];

// Obtém o número de contatos do mês
$contatosMesQuery = "SELECT COUNT(*) as total FROM contato WHERE MONTH(data_envio) = MONTH(CURDATE()) AND YEAR(data_envio) = YEAR(CURDATE())";
$contatosMesResult = $conn->query($contatosMesQuery);
$contatosMes = $contatosMesResult->fetch_assoc()['total'];

// Obtém o número de contatos do ano
$contatosAnoQuery = "SELECT COUNT(*) as total FROM contato WHERE YEAR(data_envio) = YEAR(CURDATE())";
$contatosAnoResult = $conn->query($contatosAnoQuery);
$contatosAno = $contatosAnoResult->fetch_assoc()['total'];

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Início Admin || Clodoaldo Araújo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>

      .conteiner {
        margin-top: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .relatorio {
        width: 50%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .relatorio-content {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      table {
        align-items: center;
        text-align: center;
        margin: 10px;
        border: 1px solid;
      }

      th {
        padding: 5px;
      }

      td {
        padding: 5px;
      }

      /*.btn {
        border: 1px solid white;
        background-color: red;
        color: white;
        padding: 5px;
      }

      .btn:hover {
        border: 1px solid red;
        background-color: white;
        color: red;
        padding: 5px;
      }*/

      /*button {
        border: 1px solid white;
        background-color: red;
        color: white;
        padding: 5px;
      }

      button:hover {
        border: 1px solid red;
        background-color: white;
        color: red;
        padding: 5px;
      }*/

    </style>

</head>
  <body>
    <!-- MENU SUPERIOR -->
    <?php include("header.php"); ?>

    <div class="conteiner">
    
      <div class="relatorio">
        <h1>Relatorio de Contatos</h1>
        <div class="relatorio-content">
          <table>
            <tr>
                <th>Data</th>
                <th>Número de Contatos</th>
            </tr>
            <tr>
                <td>Hoje:</td>
                <td><?php echo $contatosDia; ?></td>
            </tr>
            <tr>
                <td>Este Mês:</td>
                <td><?php echo $contatosMes; ?></td>
            </tr>
            <tr>
                <td>Este Ano:</td>
                <td><?php echo $contatosAno; ?></td>
            </tr>
          </table>
          <a href="../admin/contatos.php"><button>Contatos</button></a>
        </div>
      </div>

      <div class="relatorio">
        <h1>Relatorio de Leads</h1>
        <div class="relatorio-content">
          <table>
            <tr>
                <th>Data</th>
                <th>Número de Leads</th>
            </tr>
            <tr>
                <td>Hoje:</td>
                <td><?php echo $leadsDia; ?></td>
            </tr>
            <tr>
                <td>Este Mês:</td>
                <td><?php echo $leadsMes; ?></td>
            </tr>
            <tr>
                <td>Este Ano:</td>
                <td><?php echo $leadsAno; ?></td>
            </tr>
          </table>
          <a href="../admin/leads.php"><button>Leads</button></a>
        </div>
      </div>
    
    </div>

    <!-- RODAPÉ -->
    <?php include("footer.php"); ?>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<?php
}
else {
  echo "Acesso não autorizado";
}

?>