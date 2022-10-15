<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" href="./assets/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url("./assets/background1.gif");
            background-size:  100%;
        }
 
        div#caixa {
            margin-top: 9.5vh;
            background-color: lightblue;
            font-family: 'Raleway', sans-serif;
            margin-left: 25%;
            margin-right: 25%;
            border-radius: 10px;
            border: 3px solid blue;
            font-size: 20px;
        }

        div#caixa input {
            padding: 12px 20px;
            width: 225px;
            margin-top: 10px;
        }

        div#caixa input#botao {
            background-color: lightyellow;
        }

        div#caixa p#erro {
            color: red;
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

        
    </style>
</head>
<body>
<nav class="bar">
        <ul class="">
          <h2 class="Home">
            <a href="index.php">
              <span>🏠Home Page</span>
            </a>
          </h2>
        </ul>
         <section class="direita"> 
          <ul class="right">
              <h3 class="">
                <a href="login.php">   </a>
              </h3>
              <h3 class="">
                <a href="login.php">👤Login   </a>
              </h3>
          </ul>
         </section> 
      </nav>
    <div align="center" id="caixa">
        <h1>Página de cadastro</h1>
        <p id="erro"><strong><?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?></strong></p>
        <form method="POST" action="cadastro.php">
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" required>
            <br>
            <input type="number" name="idade" id="idade" placeholder="Digite sua idade">
            <br>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
            <br>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
            <br>
            <input type="submit" value="Cadastrar" id="botao">
        </form>
        <p>Já tem uma conta? <a href="login.php">Faça seu login</a>.</p>
    </div>
</body>
</html>