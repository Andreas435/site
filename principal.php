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