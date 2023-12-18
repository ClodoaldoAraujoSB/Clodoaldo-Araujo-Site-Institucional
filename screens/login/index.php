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

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <title>Login || Clodoaldo Araújo</title>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            margin: 0px;
        }

        .header_login {
            text-align: center; 
            padding: 5px 0px 5px 0px;
            margin: 0px;
            background-color: #BE0009;
        }

        .h1_login {
            font-family: 'Montserrat', sans-serif;
            color: #f2f2f2;
            font-size: 14px;
        }

        .body_center{
            background-image: url('../../logos/bg\ 3\ .1.jpg');
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 96vh;
        }

        .container{
            background-color: #fff;
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .container p{
            font-size: 14px;
            line-height: 20px;
            letter-spacing: 0.3px;
            margin: 20px 0;
        }

        .container span{
            font-size: 12px;
        }

        .container a{
            color: #333;
            font-size: 13px;
            text-decoration: none;
            margin: 15px 0 10px;
        }

        .container button{
            background-color: #BE0009;
            color: #fff;
            font-size: 12px;
            padding: 10px 45px;
            border: 1px solid transparent;
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-top: 10px;
            cursor: pointer;
        }

        .container button.hidden{
            background-color: transparent;
            border-color: #fff;
        }

        .container form{
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            height: 100%;
        }

        .container input{
            background-color: #eee;
            border: none;
            margin: 8px 0;
            padding: 10px 15px;
            font-size: 13px;
            border-radius: 8px;
            width: 100%;
            outline: none;
        }

        .form-container{
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in{
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.active .sign-in{
            transform: translateX(100%);
        }

        .sign-up{
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.active .sign-up{
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: move 0.6s;
        }

        @keyframes move{
            0%, 49.99%{
                opacity: 0;
                z-index: 1;
            }
            50%, 100%{
                opacity: 1;
                z-index: 5;
            }
        }

        .social-icons{
            margin: 20px 0;
        }

        .social-icons a{
            border: 1px solid #ccc;
            border-radius: 20%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 3px;
            width: 40px;
            height: 40px;
        }

        .toggle-container{
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: all 0.6s ease-in-out;
            border-radius: 150px 0 0 100px;
            z-index: 1000;
        }

        .container.active .toggle-container{
            transform: translateX(-100%);
            border-radius: 0 150px 100px 0;
        }

        .toggle{
            background-color: #512da8;
            height: 100%;
            background: linear-gradient(to right, #8a1a1e, #c10109);
            color: #fff;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }

        .container.active .toggle{
            transform: translateX(50%);
        }

        .toggle-panel{
            position: absolute;
            width: 50%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 30px;
            text-align: center;
            top: 0;
            transform: translateX(0);
            transition: all 0.6s ease-in-out;
        }

        .toggle-left{
            transform: translateX(-200%);
        }

        .container.active .toggle-left{
            transform: translateX(0);
        }

        .toggle-right{
            right: 0;
            transform: translateX(0);
        }

        .container.active .toggle-right{
            transform: translateX(200%);
        }

        #register:hover{
            background-color: #fff;
            color: #BE0009;
        }

        #locale_get_display_name:hover{
            background-color: #BE0009;
            color: #fff;
        }

    </style>

</head>

<body>
    <header class="header_login">
        <h1 class="h1_login">Faça parte do novo grupo de milionários</h1>
    </header>

    <div class="body_center">
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
    </div>

    <script src="script.js"></script>
</body>

</html>