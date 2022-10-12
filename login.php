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
    <title>Login</title>
</head>
<body>
<h1>Página de login</h1>
    <main>
         <p><strong><?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
        ?></strong></p>
        <form method="POST" action="entrar.php">
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required>
            <br>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
            <br>
            <input type="submit" value="Entrar">
        </form>
        <p>Não tem uma conta? <a href="cad.php">Faça seu cadastro</a>.</p>
    </main>
</body>
</html>