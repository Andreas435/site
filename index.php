<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosso site</title>
</head>
<body>
    <h1>Página de cadastro</h1>
    <main>
        <p><strong><?php
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
            <input type="submit" value="Cadastrar">
        </form>
        <p><a href="login.php"></a></p>
    </main>
</body>
</html>