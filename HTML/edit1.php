<?php
    if (!empty($_GET['id']))
    {

         //Conectar a base de dados
         include_once('../PHP/config.php');


         //Mostrar os dados na opção edit
         $id = $_GET['id'];
         $sqlSelect = "SELECT * FROM usuario WHERE id=$id";
         $result = $conexao ->query($sqlSelect);
         
         if($result -> num_rows > 0)
         {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $id = $user_data['id'];
                $nome = $user_data['nome'];
                $nivel = $user_data['nivel_acesso'];
                $senha = $user_data['senha'];
            }  
         }
         else
         {
            header('Location: table1.php');
         }      
    }
    else{
        header('Location: table1.php');
     }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Formulário de Actualização</title>
  <link rel="stylesheet" type="text/css" href="../CSS/estilocad.css">

</head>
<body>
  <div class="container">
    <h1>Formulário de Cadastro</h1>
    <form method="POST" action="../PHP/savedit1.php">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome ?>" required>
      </div>    
      <div class="form-group">  
        <label for="text">Nível:</label>
        <input type="text" id="nivel" name="nivel" value="<?php echo $nivel ?>" required>
      </div>  
      <div class="form-group">  
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" value="<?php echo $senha ?>" required>
      </div>  
      <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" name="update" id="update" value="Actualizar"> 
      </div>
    </form>
  </div>
</body>
</html>