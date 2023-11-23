<?php

include('../bd/bd.php');

session_start();
if(isset($_SESSION['autorizado']) && $_SESSION['autorizado'] == true) {

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

//<LEADS>

// Obtém o número de leads do dia
$contatosDiaQuery = "SELECT COUNT(*) as total FROM usuario WHERE DATE(data_envio) = CURDATE()";
$contatosDiaResult = $conn->query($contatosDiaQuery);
$leadsDia = $contatosDiaResult->fetch_assoc()['total'];

// Obtém o número de leads do mês
$contatosMesQuery = "SELECT COUNT(*) as total FROM usuario WHERE MONTH(data_envio) = MONTH(CURDATE()) AND YEAR(data_envio) = YEAR(CURDATE())";
$contatosMesResult = $conn->query($contatosMesQuery);
$leadsMes = $contatosMesResult->fetch_assoc()['total'];

// Obtém o número de leads do ano
$contatosAnoQuery = "SELECT COUNT(*) as total FROM usuario WHERE YEAR(data_envio) = YEAR(CURDATE())";
$contatosAnoResult = $conn->query($contatosAnoQuery);
$leadsAno = $contatosAnoResult->fetch_assoc()['total'];

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Início Admin || Clodoaldo Araújo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
  <body>
    <!-- MENU SUPERIOR -->
    <?php include("header.php"); ?>
    <br>
      <h1 style="text-align: center; margin-top: 70px;">Relatorio de Contatos</h1>
    <div style="float: left; display: inline-block; margin-left: 30px;">
      <table border="1">
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
    </div>

    <a href="../admin/contatos.php"><button style="float: left; margin-left: 30px; display: inline-block; vertical-align: top; margin-top: 30px;">Contatos</button></a>
    <br>
    <br>
    <br>
        <h1 style="text-align: center; margin-top: 70px;">Relatorio de Leads</h1>

    <div style="float: right; display: inline-block; margin-right: 30px;">
      <table border="1">
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
    </div>
    <a href="../admin/leads.php"><button style="float: right; margin-right: 30px; display: inline-block; vertical-align: top; margin-top: 30px;">Leads</button></a>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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