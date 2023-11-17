<?php
    include("../bd/bd.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ( !empty($_POST["username"]) && !empty($_POST["password"]) ) {
            $usuario = $_POST["username"];
            $password = $_POST["password"];

            $sql = $conn->query("SELECT usuario, senha FROM admin WHERE usuario = '$usuario'");

            if ($sql->num_rows > 0) {
                $row = $sql->fetch_assoc();
                $password_confirmation = $row['senha'];
                
                if ($password_confirmation == $password) {
                    session_start();
                    $_SESSION['autorizado'] = true;
                    header("Location: home.php");
                }
            }
        
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
        }

        button {
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

    </style>

</head>
<body>
    <div class="container">
        <form id="loginForm" action="login.php" method="post">
            <h2>Admin Clodoaldo - Login </h2>
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>