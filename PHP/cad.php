<?php
    if(isset($_POST['submit']))
    {
        //Conexão com a base de dados
        include_once ('config.php');
        //Campos para a base de dados
        $nome = $_POST['nome'];
        $nivel = $_POST['nivel'];
        $senha = $_POST['senha'];
        //$email = $_POST['email'];
        //Inserção dos valores na base de dados
        $result = mysqli_query($conexao, "INSERT INTO usuario (nome, nivel_acesso, senha) VALUES ('$nome', '$nivel', '$senha')");
        header('Location: ../HTML/table.php');
        //Alerta Script
       // echo"<script type='txet/javascript'>alert('Inscrição terminada')</script>";
      //header(refresh:'')
    }
    else{
       $infor = die("Inscrição não efectuada");
    }
?>