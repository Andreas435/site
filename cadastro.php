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
            // Inserindo no banco de dados o novo usuario.
            $comando = "INSERT INTO contas (nome, idade, email, senha) VALUES ('$nome', '$idade', '$email', '$senha')";
            $ex = mysqli_query($con, $comando);
            // Pegando apenas o ultimo usuario que foi cadastrado.
            $comando = "SELECT *  FROM  contas  ORDER BY ASC Limit 1";
            $result = mysqli_query($con, $comando);
            $res    = mysqli_fetch_assoc($result);
            // Passando as informacoes do ultimo usuario para nossa Session.
            $_SESSION["id"]    = $res["id"] ; 
            $_SESSION["nome"]  = $res["nome"];
            $_SESSION["idade"] = $res["idade"];
            $_SESSION["email"] = $res["email"];
            $_SESSION["cargo"] = $res["cargo"];
            // Reencaminhando o usuario para nossa pagina principal.
            header("Location: principal.php");
        }
        else{
            $_SESSION['msg'] = "E-mail já cadastrado";
            header("Location: index.php");
        }
    }
    else {
        $_SESSION['msg'] = "Preencha todos os campos";
        header("Location: index.php");
        
    }
?>