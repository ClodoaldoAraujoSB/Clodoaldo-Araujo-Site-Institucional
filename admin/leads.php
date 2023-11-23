<?php

session_start();
if(isset($_SESSION['autorizado']) && $_SESSION['autorizado'] == true) {
    include("../bd/bd.php");
    $sql_contatos = $conn->query("SELECT * FROM usuario");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio de contatos | Admin - Clodoaldo</title>

    <style>
        table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        }

        th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        th {
        background-color: #f2f2f2;
        }

        tr:nth-child(even) {
        background-color: #f9f9f9;
        }
    </style>

</head>
<body>

  <!-- MENU SUPERIOR -->
  <?php include("header.php"); ?>

  <!-- TABELA - INICIO -->
  <h1 style="text-align: center; margin-top: 70px;">Relatorio de leeds</h1>

  <table>
      <thead>
          <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Ano de Nascimento</th>
            <th>Telefone</th>
            <th>Cidade</th>
          </tr>
      </thead>
      <tbody>
          
          <?php
          
          foreach ( $sql_contatos as $contato ) {
              echo "<tr>";

              echo "<td>" . $contato["nome"] . "</td>";
              echo "<td>" . $contato["email"] . "</td>";
              echo "<td>" . $contato["ano_nasc"] . "</td>";
              echo "<td>" . $contato["telefone"] . "</td>";
              echo "<td>" . $contato["cidade"] . "</td>";

              echo "</tr>";
          }
          
          ?>

      </tbody>
  </table>
  <!-- TABELA - FINAL -->
  
  <!-- RODAPÉ -->
  <?php include("footer.php"); ?>

</body>
</html>

<?php

}
else {
  echo "Acesso não autorizado";
}

?>