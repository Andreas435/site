<?php
    include_once("conec.php");  
    session_start();
    if(isset($_POST["email"]) && isset($_POST["senha"])){
        $email  = $_POST["email"];
        $senha  = md5($_POST["senha"]);
        $bla    = "SELECT * FROM contas WHERE email = '$email' && senha = '$senha'";
        $result = mysqli_query($con, $bla);
        $res    = mysqli_fetch_assoc($result);

        if (isset($res)){
            $_SESSION["id"]    = $res["id"] ; 
            $_SESSION["nome"]  = $res["nome"];
            $_SESSION["idade"] = $res["idade"];
            $_SESSION["email"] = $res["email"];
            $_SESSION["cargo"] = $res["cargo"];
            if($_SESSION["cargo"] == "adm"){
                header("Location: adm.php");
            }
            else{
                header("Location: principal.php");
            }
        }

    }


?>