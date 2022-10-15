<?php 
session_start();
include_once("conec.php");

for ($i=0; $i < $_SESSION["tam"] ; $i++) { 
    $nome[$i]  = $_POST['nome-'.$i];
    $idade[$i] = $_POST['idade-'.$i];
    $cargo[$i] = $_POST['cargo-'.$i];
}
$id= $_SESSION["id"];
for ($i=0; $i < $_SESSION["tam"] ; $i++) { 
    $sql = "UPDATE contas SET Nome = '$nome[$i]', Idade = '$idade[$i]', Cargo = '$cargo[$i]' WHERE id = '$id[$i]'";
}
$_SESSION["msg"] = "Dados atualizados";
?>
