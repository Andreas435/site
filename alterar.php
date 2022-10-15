<?php 
session_start();
include_once("conec.php");

for ($i=0; $i < $_SESSION["tam"] ; $i++) { 
    $nome[$i]  = $_POST['nome-'.$i];
    $idade[$i] = $_POST['idade-'.$i];
    $cargo[$i] = $_POST['cargo-'.$i];
}

for ($i=0; $i < $_SESSION["tam"] ; $i++) { 
    # code...
}
?>