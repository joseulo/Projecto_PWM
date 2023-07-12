<?php 
//Nome do servidor localhost
$localhost = 'localhost';
//Nome de usuário
$username = 'root';
//Password
$password = '';
//Nome da base de dados
$name = 'colegio';
//Conexão ao servidor MySQL
$conexao = new mysqli($localhost, $username, $password, $name) or die ("Erro na conexão");
?>