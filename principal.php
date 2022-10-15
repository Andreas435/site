<?php
    session_start();
    if (empty($_SESSION['id'])) {
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link rel="icon" href="./assets/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            position: relative;
            background-image: url("./assets/background1.gif");
            background-size: 100%;
        }
        nav {
            display: flex;
            align-items: baseline;
            position: relative;
            background:#020d3f;
        }

        h3 {
            font-size: x-large;
            margin-left: 30px;
        }

        ul {
            display: flex;
            align-items: baseline;
        }


        .direita {
            position: absolute;
            right: 3%;
        }

        nav.bar a {
            text-decoration: none;
            color: white;
        
        }
        div#caixa {
            background-color: #0768DE;
            color: white;
            margin-top: 9vh;
            text-align: justify;
            margin-left: 55vh;
            margin-right: 55vh;
            border-radius: 5px;
            border: solid 2px yellow;
            padding: 3vh;
        }

        * {
            font-family: 'Raleway', sans-serif;
        }

        hr {
            color: yellow;
        }

        h1 {
            font-size: 5vh;
            text-align: center;
        }

        div#caixa h2 {
            font-size: 3vh;
            margin-top: -3vh;
            text-align: center;
        }

        div#imgesquerda img{
            position: absolute;
            right: 0%;
            top: 30%;
            height: 45%;
        }

        div#imagemdireita img {
            position: absolute;
            left: -15%;
            top: 30%;
            height: 40%;
            width: 43%;
            transform: scaleX(-1);
        }

        div#botao input.bt {
            position: absolute;
            right: 5.9%;
            top: 85%;
            width: 30vh;
            height: 10vh;
            background-color: lightblue;
            font-family: "Raleway", sans-serif;
            border-radius: 7px;
            border: solid 2px yellow;
            font-size: 2vh;
        }
    </style>
</head>
<body>
    <h1>Página principal</h1>
    <h1><?php
        echo $_SESSION['nome'];
    ?>
    </h1>
    <br>
    <a href="sair.php">Sair</a>
</body>
</html>