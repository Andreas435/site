<?php
    include_once("conec.php");
    session_start();

    if (isset($_POST['nome']) && (isset($_POST['idade'])) && (isset($_POST['email'])) && (isset($_POST['senha']))) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        $mysql = "SELECT * FROM contas WHERE email = '$email'";
        $com = mysqli_query($con, $mysql);
        $re = mysqli_fetch_assoc($com);

        if (empty($re)) {
            $comando = "INSERT INTO contas (nome, idade, email, senha) VALUES ('$nome', '$idade', '$email', '$senha')";
            $ex = mysqli_query($con, $comando);
            header("Location: principal.php");
        }
        else {
            $_SESSION['msg'] = "E-mail já cadastrado";
            header("Location: index.php");
        }
    }
    else {
        $_SESSION['msg'] = "Preencha todos os campos";
        header("Location: index.php");
    }
?>