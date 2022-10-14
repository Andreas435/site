<?php
    session_start();

    if (isset($_SESSION['id'])) {
        header("Location: principal.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <title>Login</title>
    <link rel="icon" href="./assets/icon.png">
</head>
<body>
    <style>
        .fundo{
            margin-top: 12%;
            background-color: skyblue;
            margin-left: 30%;
            margin-right: 30%;
            border: 5px ;
            border-style: solid;
            border-color: red;
            border-radius: 8px;
        }
    </style>
    <div class="fundo" align="center">
        <div>
            <h1>Página de login</h1>
                <main>
                 <p>
                    <strong>
                    <?php
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                    ?>
                    </strong>
                </p>
                <form method="POST" action="entrar.php">
                    <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
                    <br>
                    <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                    <br>
                    <input type="submit" value="Entrar">
                </form>
                <p>Não tem uma conta? <a href="cad.php">Faça seu cadastro</a>.</p>
            </main>
        </div>
    </div>
</body>
</html>