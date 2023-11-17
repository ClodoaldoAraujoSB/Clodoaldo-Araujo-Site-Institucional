<?php

include("../bd/bd.php");

$sql_contatos = $conn->query("SELECT * FROM contato");

?>

<!DOCTYPE html>
<html lang="en">
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

    <h1 style="text-align: center; margin-top: 70px;">Relatorio de contatos</h1>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Cidade</th>
                <th>Idade</th>
                <th>Comentario</th>
                <th>Data de envio</th>
            </tr>
        </thead>
        <tbody>
            
            <?php
            
            foreach ( $sql_contatos as $contato ) {
                echo "<tr>";

                echo "<td>" . $contato["nome"] . "</td>";
                echo "<td>" . $contato["email"] . "</td>";
                echo "<td>" . $contato["telefone"] . "</td>";
                echo "<td>" . $contato["cidade"] . "</td>";
                echo "<td>" . $contato["idade"] . "</td>";
                echo "<td>" . $contato["comentario"] . "</td>";
                echo "<td>" . $contato["data_envio"] . "</td>";

                echo "</tr>";
            }
            
            ?>

        </tbody>
    </table>

</body>
</html>