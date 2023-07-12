<?php
include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $nivel = $_POST['nivel'];
    $senha = $_POST['senha'];

    $sqlUpdate = "UPDATE usuario SET nome = '$nome', nivel_acesso = '$nivel', senha = '$senha' WHERE  id = '$id'";     
     
     $result = $conexao -> query($sqlUpdate);
}
header('Location: ../HTML/table1.php'); 
?>