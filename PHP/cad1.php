<?php
    if(isset($_POST['submit']))
    {
        //Conexão com a base de dados
        include_once ('config.php');
        //Campos para a base de dados
        $nome = $_POST['nome'];
        $area = $_POST['area'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $funcao = $_POST['funcao'];
        $endereco = $_POST['endereco'];
        $idade = $_POST['idade'];
        //Inserção dos valores na base de dados
        $result = mysqli_query($conexao, "INSERT INTO funcionario (nome, area, telefone, email, funcao, endereco, idade) VALUES ('$nome', '$area', '$telefone', '$email', '$funcao', '$endereco', '$idade')");
        header('Location: ../HTML/table.php');
        //Alerta Script
       echo"<script type='txet/javascript'>alert('Inscrição terminada')</script>";
      //header(refresh:'')
    }
    else{
       $infor = die("Inscrição não efectuada");
    }
?>