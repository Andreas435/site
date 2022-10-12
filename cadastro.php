<?php
    include_once("conec.php");

    if (isset($_POST['nome']) && (isset($_POST['idade'])) && (isset($_POST['email'])) && (isset($_POST['senha']))) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        $comando = "INSERT INTO contas (nome, idade, email, senha) VALUES ('$nome', '$idade', '$email', '$senha');";
        $ex = mysqli_query($con, $comando);
        header("Locale: principal.php");
    }
    else {
        header("Locale: index.php");
    }
?>