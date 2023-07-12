<?php
session_start();
//print_r($_REQUEST);
if (isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['senha']))
{
    //Acessa
    //Ligar com base de dados
    include_once('config.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    //print_r('Email: ' .$email);
    //print_r('<br>');
    //print_r('Senha: ' .$senha);

    $sql = "SELECT * FROM usuario WHERE nome = '$nome' and senha = '$senha' ";

    $result = $conexao -> query($sql);

    //print_r($result);
    if(mysqli_num_rows($result) < 1)
    {
        //Não existe no banco de dados
        //
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: ../HTML/login.php');
    }
    else
    {
        //Exestir no banco de dados
        //Direcionar para pagina
        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;
        header('Location: ../HTML/admin.php');
    }
}
else{
    //Não acesso
    header('Location: login.php');
}
?>