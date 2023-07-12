<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo1.css">
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="shortcut icon" href="../Imagens/favicon.ico" type="image/x-icon">
    <title>Cursos - JHS</title>
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
                    <a class="navbar-brand" href="#">JHS</a>
                    <button class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="../index.php">Início</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="curso.php">Cursos</a></li>
                        <li class="nav-item"><a class="nav-link" href="inscrição.php">Inscrição</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.php">FQA</a></li>
                        <li class="nav-item"><a class="nav-link" href="servico.php">Serviços</a></li>
                      </ul>
                      <a href="login.php"><button class="btn btn-dark" type="submit">Entrar</button></a>
                  </div>
              </div>
          </nav>
          </div>
    </header>

    <main id="princ">
        <!--Conteúdo principal do site-->
        <div class="container">
            <div class="row justify-content-sm-center">
                <div class="col-sm-9">
                    <h1 class="display-4">Que Curso devo escolher?</h1>
                    <p class="text-justify">Na hora de escolher o seu curso, é importante considerar o que planeja para o futuro. Para isso, é importante identificar quais são as suas expectativas de vida e o que você tem como prioridade — não só nesse momento, mas também dentro de alguns anos, em médio e longo prazo. Leve em conta as profissões mais procuradas no mercado para tomar uma boa decisão. A nossa instituição oferece vários cursos como mostra esta página.</p>
                </div>
                <div class="col-sm-3">
                    <img src="../Imagens/dica.jpg" alt="higiene">
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h1 class="text-center display-4">Cursos</h1>
            <div class="row justify-content-sm-center">
                <div class="col-sm-6 col-md-4">
                    <div class="card mb-5">
                    <img class="card-img-top" src="../Imagens/card-1.png" alt="Cartão-1">
                    <div class="card-body">
                        <h4 class="card-title">Técnico Informática</h4>
                        <h6 class="card-subtitle text-muted mb-2"></h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Propina: 14000kz</li>
                        <li class="list-group-item">Aprenda a configurar sistemas informáticos e se torne um técnico capacitado com o conhecimento avançado.</li>
                    </ul>
                    <div class="card-body">
                        <a href="inscrição.php" class="card-link">Inscreva-se..</a>
                    </div>
                    <div class="card-footer text-muted">
                        JHS: O Seu Lugar do Saber
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card mb-5">
                    <img class="card-img-top" src="../Imagens/card-5.jpg" alt="card-3">
                    <div class="card-body">
                        <h4 class="card-title">Gestão de Redes e Sistemas Informáticos</h4>
                        <h6 class="card-subtitle text-muted mb-2"></h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Propina: 14.000kz</li>
                        <li class="list-group-item">Aprenda como implementar e manter uma rede de computadores e sistemas informáticos.</li>
                    </ul>
                    <div class="card-body">
                        <a href="inscrição.php" class="card-link">Inscreva-se...</a>
                    </div>
                    <div class="card-footer text-muted">JHS: O Seu Lugar de Saber</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card mb-5">
                    <img class="card-img-top" src="../Imagens/card-2.jpg" alt="card-2">
                    <div class="card-body">
                        <h4 class="card-title">Construção Civil</h4>
                        <h6 class="card-subtitle text-muted mb-2"></h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Propina: 13.000kz</li>
                        <li class="list-group-item">Se torne um técnico de obras num ambiente confortável e com as melhores ferramentas de estudo</li>
                    </ul>
                    <div class="card-body">
                        <a href="inscrição.php" class="card-link">Inscreva-se...</a>
                    </div>
                    <div class="card-footer text-muted">
                        JHS: O Seu Lugr do Saber
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card mb-5">
                    <img class="card-img-top" src="../Imagens/card-3.jpg" alt="card-3">
                    <div class="card-body">
                        <h4 class="card-title">Enfermagem</h4>
                        <h6 class="card-subtitle text-muted mb-2"></h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Propina: 15.000kz</li>
                        <li class="list-group-item">Aprende as melhores técnicas de enfermagem com os melhores laboratórios.</li>
                    </ul>
                    <div class="card-body">
                        <a href="inscrição.php" class="card-link">Inscreva-se...</a>
                    </div>
                    <div class="card-footer text-muted">JHS: O Seu Lugar de Saber</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card mb-5">
                    <img class="card-img-top" src="../Imagens/card-6.jpg" alt="card-3">
                    <div class="card-body">
                        <h4 class="card-title">Análises Clínicas</h4>
                        <h6 class="card-subtitle text-muted mb-2"></h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Propina: 15.000kz</li>
                        <li class="list-group-item">Aqui vai encotrar os melhores laboratórios para praticar, venha se tornar um(a) analista.</li>
                    </ul>
                    <div class="card-body">
                        <a href="inscrição.php" class="card-link">Inscreva-se...</a>
                    </div>
                    <div class="card-footer text-muted">JHS: O Seu Lugar de Saber</div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card mb-5">
                    <img class="card-img-top" src="../Imagens/card-4.png" alt="card-3">
                    <div class="card-body">
                        <h4 class="card-title">Contabilidade</h4>
                        <h6 class="card-subtitle text-muted mb-2"></h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Propina: 13.000kz</li>
                        <li class="list-group-item">Torne-se um técnico(a) de contabilidade e descubra as vantagens.</li>
                    </ul>
                    <div class="card-body">
                        <a href="inscrição.php" class="card-link">Inscreva-se...</a>
                    </div>
                    <div class="card-footer text-muted">JHS: O Seu Lugar de Saber</div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <!--Rodapé da pagina-->
        <P>Site Criado por Manuel Sampaio| José Ulo| Hernany Zua</P>
    </footer>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>