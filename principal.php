<?php
    session_start();
    if (empty($_SESSION['id'])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
</head>
<body>
    <p>Página principal</p>
    <?php
        echo $_SESSION['nome'];
    ?>
    <br>
    <a href="sair.php">Sair</a>
</body>
</html>