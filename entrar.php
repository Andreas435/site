<?php
    session_start();
    include_once("conec.php");  
    if(isset($_POST["email"]) && isset($_POST["senha"])){
        $email  = $_POST["email"];
        $senha  = md5($_POST["senha"]);
        $bla    = "SELECT * FROM contas WHERE email = '$email' && senha = '$senha'";
        $result = mysqli_query($con, $bla);
        $res    = mysqli_fetch_assoc($result);

        if (isset($res)){
            $_SESSION["id"]    = $res["id"] ; 
            $_SESSION["nome"]  = $res["Nome"];
            $_SESSION["idade"] = $res["Idade"];
            $_SESSION["email"] = $res["Email"];
            $_SESSION["cargo"] = $res["Cargo"];
            if($_SESSION["cargo"] == "administrador"){
                header("Location: adm.php");
            }
            else{
                header("Location: principal.php");
            }
        }
        else {
            $_SESSION['msg'] = "E-mail ou senha inválido(s)";
            header("Location: login.php");
        }

    }
    else {
        $_SESSION['msg'] = "Preencha todos os campos";
        header("Location: login.php");
    }

?>