<?php
session_start();
include_once('../PHP/config.php');
    $sql = "SELECT * FROM funcionario ORDER BY id DESC  ";
    $result = $conexao -> query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cadastrar Funcionários</title>
  <link rel="stylesheet" type="text/css" href="../CSS/estilocad1.css">
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">
  <link rel="shortcut icon" href="../Imagens/favicon.ico" type="image/x-icon">
</head>
<body>
<!--Cabeçalho da página-->
  <div class="cont">
    <h1>Formulário de Cadastro</h1>
    <form method="POST" action="../PHP/cad1.php">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group1">
        <label for="area">Area:</label>
        <input type="text" id="area" name="area" required>
      </div>
      <div class="form-group1">
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>
      </div>
      <div class="form-group1">
        <label for="idade">Idade:</label>
        <input type="text" id="idade" name="idade" required>
      </div>
      <div class="form-group1">
        <label for="função">Função:</label>
        <input type="text" id="funcao" name="funcao" required>
      </div>
      <div class="form-group1">
        <label for="endereco">Endereco:</label>
        <input type="text" id="endereco" name="endereco" required>
      </div>
      <div class="form-group1">
        <input type="submit" name="submit" id="submit" value="Cadastrar">
      </div>
    </form>
  </div>

<!--footer>
    <!--Rodapé da pagina->
    <!--Inclui links para as redes sociais->
    <P>Site Criado por Manuel Sampaio| José Ulo| Hernany Zua</P>
</footer-->
</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>