<?php
include_once('config.php');

if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $area = $_POST['area'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $funcao = $_POST['funcao'];
    $endereco = $_POST['endereco'];
    $idade = $_POST['idade'];

    $sqlUpdate = "UPDATE funcionario SET nome = '$nome', area = '$area', telefone = '$telefone', email = '$email', funcao = '$funcao', endereco = '$endereco', idade = '$idade' WHERE  id = '$id' ";     
     
     $result = $conexao -> query($sqlUpdate);
}
header('Location: ../HTML/table.php'); 
?>