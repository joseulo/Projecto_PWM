<?php
session_start();
include_once('../PHP/config.php');
//print_r($_SESSION);
if( (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
{
    //Criando sessão
    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
   
    header('Location: ../HTML/login.php');
}
    $logado = $_SESSION['nome'];
    $sql = "SELECT * FROM usuario ORDER BY idusuario DESC  ";

   // $result = $conexao -> query($sql);
    //print_r($result);

?>
<!DOCTYPE html>
<html lang="pt" class=" js csstransforms csstransforms3d csstransitions">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../CSS/estilouser.css">
        <link rel="stylesheet" href="../CSS/bootstrap.min.css">
        <link rel="shortcut icon" href="../Imagens/favicon.ico" type="image/x-icon">
		<title>Administrador - JHS</title>
	</head>
	<body>
        <header>
            <!--Area para o cabeçalho da página-->
            <!--Inclui o logotipo, botão de login-->
            <div id="logo">
            <h1>JHS</h1>
            <p>O seu lugar do saber</p>
            <p id="user"> <?php
            echo "<u>$logado</u>";
            ?> <a id="botao" href="../PHP/sair.php">Sair</a></p>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
              <div class="container">
                  <a class="navbar-brand" href="#">JHS</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item"><a class="nav-link active" aria-current="page" href="admin.php">Início</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Candidaturas</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Alunos</a></li>
                      <li class="nav-item"><a class="nav-link" href="table1.php">Usuários</a></li>
                      <li class="nav-item"><a class="nav-link" href="table.php">Funcionario</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </header>
        
<main id="destaque">
            <!--Conteúdo principal do site-->
            <!--Aqui contém o formulário de inscrição para alunos-->
            
</main>

<footer>
    <!--Rodapé da pagina-->
    <!--Inclui links para as redes sociais-->
    <P>Site Criado por Manuel Sampaio| José Ulo| Hernany Zua</P>
</footer>
</body>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</html>


