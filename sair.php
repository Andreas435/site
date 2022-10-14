<?php
    session_start();

    unset(
        $_SESSION['id'],
        $_SESSION['nome'],
        $_SESSION['idade'],
        $_SESSION['email'],
        $_SESSION['cargo']
    );
    session_destroy();
    header("Location: login.php");
    
?>