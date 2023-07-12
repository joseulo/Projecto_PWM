<!DOCTYPE html>
<html lang="pt" class=" js csstransforms csstransforms3d csstransitions">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="keyword" content="JHS Incrição online">
		<meta name="description" content="Sistema de Gestão escolar Web">
        <link rel="stylesheet" href="../CSS/estilo1.css">
        <link rel="shortcut icon" href="../Imagens/favicon.ico" type="image/x-icon">
		<title>Inscrição - JHS</title>
		<!-- Bootstrap -->
		<link href="../css1/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="../css1/style_blue.css">
        <link rel="stylesheet" href="../CSS/estiloin.css">
		<script src="../css1/jquery.min.js.transferir"></script>
	</head>
	<body>
        <header>
            <!--Area para o cabeçalho da página-->
            <!--Inclui o logotipo, botão de login-->
            <div id="logo">
            <h1>JHS</h1>
            <p>O seu lugar do saber</p>
            </div>
            <div id="menu">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container">
                        <a class="navbar-brand" href="../index.php">JHS</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="../index.php">Início</a></li>
                            <li class="nav-item"><a class="nav-link" href="curso.php">Cursos</a></li>
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="inscrição.php">Inscrição</a></li>
                            <li class="nav-item"><a class="nav-link" href="faq.php">FQA</a></li>
                            <li class="nav-item"><a class="nav-link" href="servico.php">Serviços</a></li>
                          </ul>
                          <a href="login.php"><button class="btn btn-dark" type="submit">Entrar</button></a>
                      </div>
                  </div>
              </nav>
              </div>
        </header>
		<!-- Preloader -->
		<div class="loader-container loader-fadeout">
		<div class="lds-dual-ring"></div>
		</div>
		
<!-- Header Ends -->		<!-- Main Banner Starts -->
<main>
<div class="main-banner" style="background: url(../Imagens/c-.jpg)  center top;">
    <div class="container px-md-0">
        <h2><span>Inscrição</span></h2>
    </div>
</div>
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->              
<form action="../PHP/cand.php" method="POST" id="inscricao">

<fieldset id="usuario"><legend>Identificação do Candidato</legend>
 <p><label for="nome">Nome <input type="text" name="nome" id="nome" size="30" maxlength="30" placeholder="Nome Completo"></label></p>
 <p><label for="numero">Telefone <input type="text" name="numero" id="numero" size="30" maxlength="20" placeholder="8 dígitos no máximo"></label></p>
 
 <p><label for="cMail">E-mail <input type="email" name="email" id="email" size="30" maxlength="40" placeholder="O seu e-mail"></label></p>
 
 <p><label for="genero">Genero </label><select name="genero" id="genero">
  <optgroup label="Genero">
   <option>Masculino</option>
   <option>Femenino</option>
  </optgroup>
 </select></p>
 <p><label for="data_n">Data de Nascimento <input type="date" name="data_n" id="data_n" size="30"></label></p>
 <p><label for="bilhete">Número do BI <input type="text" name="bilhete" id="bilhete" size="30" maxlength="20" placeholder="Informe o número do seu bilhete"></label></p>  
 <p><label for="endereco">Endereço <input type="text" name="endereco" id="endereco" size="60" maxlength="60" placeholder="Informe o seu endereço"></label></p>  
 </fieldset>

 <fieldset id="cand"><legend>Detalhes da Candidatura</legend>
<p><label for="curso">Curso</label> <select name="curso" id="curso">
  <optgroup label="Os nossos cursos">
  <option value="" selected="selected">--Cursos--</option>
         <option value="Análises Clínicas">Análises Clínicas</option>
         <option value="Construção Cívil">Construção Cívil</option>
         <option value="Contabilidade">Contabilidade</option>
         <option value="Enfermagem">Enfermagem</option>
         <option value="Gestão de Redes e Sistemas Informáticos">Gestão de Redes e Sistemas Informáticos</option>
         <option value="Técnico Informática">Técnico Informática</option>
  </optgroup>
 </select></p>
 <p><label for="classe">Classe</label><select name="classe" id="classe">
  <optgroup label="Classe">
  <option value="" selected="selected">--Classe--</option>
         <option value="10ª">10ª</option>
         <option value="11ª">11ª</option>
         <option value="12ª">12ª</option>
         <option value="13ª">13ª</option>
  </optgroup>
 </select></p>
 <p><label for="periodo">Periodo</label><select name="periodo" id="periodo">
  <optgroup label="perido">
  <option value="" selected="selected">--Perido--</option>
         <option value="Manhã">Manhã</option>
         <option value="Tarde">Tarde</option>
  </optgroup>
 </select></p>
 <p><label for="data_i">Data de Inscrição <input type="date" name="data_i" id="data_i"></label></p>
 </fieldset>

 <input type="submit" name="submit" id="submit" class="btn btn-primary">
</form>	
</main>
<footer>
    <!--Rodapé da pagina-->
    <!--Inclui links para as redes sociais-->
    <P>Site Criado por Manuel Sampaio| José Ulo| Hernany Zua</P>
</footer>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>