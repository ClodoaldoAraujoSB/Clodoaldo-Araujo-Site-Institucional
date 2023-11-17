<?php

    session_start();

    function criar($nome, $email, $ano_nasc, $telefone, $cidade) {
        include("../../bd/bd.php");
        $conn->query("INSERT INTO usuario (nome, email, ano_nasc, telefone, cidade) VALUES ('$nome', '$email', '$ano_nasc', '$telefone', '$cidade')");
        $conn->close();
    }

    function buscar($email) {
        include("../../bd/bd.php");
        $result = $conn->query("SELECT email FROM usuario WHERE email = '$email'");
        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $emailEncontrado = $row['email'];
            } else {
                $emailEncontrado = null;
            }
            $result->free();
        } else {
            $emailEncontrado = null;
        }
        $conn->close();
        return $emailEncontrado;
    }

    if (!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["ano_nasc"]) && !empty($_POST["telefone"]) && !empty($_POST["cidade"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $ano_nasc = $_POST["ano_nasc"];
        $telefone = $_POST["telefone"];
        $cidade = $_POST["cidade"];

        $email_confirmation = buscar($email);
        if (!empty($email_confirmation)) {
            // Coloque um input na tela falando que este email já está sendo utilizado
        } else {
            criar($nome, $email, $ano_nasc, $telefone, $cidade);
        }
    } else if (!empty($_POST["email_confirmation"])) {
        $email_confirmation = $_POST["email_confirmation"];
        $email = buscar($email_confirmation);
        if (!empty($email)) {
            
            $_SESSION['autorizado'] = true;

            header("Location: ../ferramentas_ebook.php");
        } else {
            // coloque um input na tela falando que não está cadastrado
        }
    }
    else {

    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Modern Login Page | AsmrProg</title>

</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="index.php" method="post">
                <h1>Criar conta</h1>
                <input type="text" name="nome" placeholder="Nome">
                <input type="email" name="email" placeholder="Email">
                <input type="date" name="ano_nasc" placeholder="Ano de Nascimento">
                <input type="text" name="telefone" placeholder="Telefone">
                <input type="text" name="cidade" placeholder="Cidade">
                <button type="submit">Criar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="index.php" method="post">
                <h1>Faça login</h1>
                <input type="email" name="email_confirmation" placeholder="Email">
                <button>Login</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Login</h1>
                    <p>Caso você já tenha se cadastrado em nosso site, vá para o login por aqui</p>
                    <button class="hidden" id="login">Logue-se</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Cadastro</h1>
                    <p>Caso você não tenha cadastro aqui, cadastre-se no botão abaixo:</p>
                    <button class="hidden" id="register">Cadastre-se</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>