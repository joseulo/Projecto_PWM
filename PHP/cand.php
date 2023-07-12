<?php
    if(isset($_POST['submit']))
    {
        //Conexão com a base de dados
        include_once ('config.php');

        //Campos para a base de dados
        $nome = $_POST['nome'];
        $curso = $_POST['curso'];
        $genero = $_POST['genero'];
        $data_nasce = $_POST['data_n'];
        $telefone = $_POST['numero'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $numero_bi = $_POST['bilhete'];
        $classe = $_POST['classe'];
        $periodo = $_POST['periodo'];
        $data_ins = $_POST['data_i'];
        //Inserção dos valores na base de dados
        $result = mysqli_query($conexao, "INSERT INTO inscricao (nome, curso, genero, data_nasc, telefone, email, endereco, bilhete, classe, periodo, data_in) VALUES ('$nome', '$curso', '$genero', '$data_nasce', '$telefone', '$email', '$endereco', '$numero_bi', '$classe', '$periodo', '$data_ins')");
        header('Location: ../HTML/inscrição.php');
        //Alerta Script
        echo"<script type='txet/javascript'>alert('Inscrição terminada')</script>";
        //header(refresh:'')
    }
    else{
       $infor = die("Inscrição não efectuada");
    }
?>