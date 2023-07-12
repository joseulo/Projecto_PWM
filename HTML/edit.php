<?php
    if (!empty($_GET['id']))
    {

         //Conectar a base de dados
         include_once('../PHP/config.php');


         //Mostrar os dados na opção edit
         $id = $_GET['id'];
         $sqlSelect = "SELECT * FROM funcionario WHERE id=$id";
         $result = $conexao ->query($sqlSelect);
         
         if($result -> num_rows > 0)
         {
            while($user_data = mysqli_fetch_assoc($result))
            {
                
                $nome = $user_data['nome'];
                $area = $user_data['area'];
                $telefone = $user_data['telefone'];
                $email = $user_data['email'];
                $funcao = $user_data['funcao'];
                $endereco = $user_data['endereco'];
                $idade = $user_data['idade'];
    
            }  
         }
         else
         {
            header('Location: table.php');
         }      
    }
    else{
        header('Location: table.php');
     }
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
    <h1>Formulário de Actualização</h1>
    <form method="POST" action="../PHP/savedit.php">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome ?>" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" value="<?php echo $email ?>" required>
      </div>
      <div class="form-group1">
        <label for="area">Area:</label>
        <input type="text" id="area" name="area" value="<?php echo $area ?>" required>
      </div>
      <div class="form-group1">
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" value="<?php echo $telefone ?>" required>
      </div>
      <div class="form-group1">
        <label for="idade">Idade:</label>
        <input type="text" id="idade" name="idade" value="<?php echo $idade ?>" required>
      </div>
      <div class="form-group1">
        <label for="função">Função:</label>
        <input type="text" id="funcao" name="funcao" value="<?php echo $funcao ?>" required>
      </div>
      <div class="form-group1">
        <label for="endereco">Endereco:</label>
        <input type="text" id="endereco" name="endereco" value="<?php echo $endereco ?>" required>
      </div>
      <div class="form-group1">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" name="update" id="update" value="Atualizar">
      </div>
    </form>
  </div>

<!--footer>
    <-Rodapé da pagina->
    <Inclui links para as redes sociais->
    <P>Site Criado por Manuel Sampaio| José Ulo| Hernany Zua</P>
</footer-->
</body>
</html>