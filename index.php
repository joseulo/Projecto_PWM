<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <link rel="stylesheet" href="CSS/estilo1.css">
    <link rel="shortcut icon" href="Imagens/favicon.ico" type="image/x-icon">
    <title>Início - Colégio JHS</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link href="CSS/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="CSS/carousel.css" rel="stylesheet">
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
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Início</a></li>
                      <li class="nav-item"><a class="nav-link" href="HTML/curso.php">Cursos</a></li>
                      <li class="nav-item"><a class="nav-link" href="HTML/inscrição.php">Inscrição</a></li>
                      <li class="nav-item"><a class="nav-link" href="HTML/faq.php">FQA</a></li>
                      <li class="nav-item"><a class="nav-link" href="HTML/servico.php">Serviços</a></li>
                    </ul>
                    <a href="HTML/login.php"><button class="btn btn-dark" type="submit">Entrar</button></a>
                </div>
            </div>
        </nav>
        </div>
</header>

<main>

  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Imagens/c-1.jpg" class="bd-placeholder-img"  width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)" alt="imagem de sala de aula">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Sala de Aulas.</h1>
            <p class="opacity-75">Temos salas de aulas vastas e compleamente equipada para o seu aprendizado</p>
            <p><a class="btn btn-lg btn-primary" href="#">Ver mais</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Imagens/lab3.jpg" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>Laboratórios.</h1>
            <p>Os melhores laboratórios para praticar o que aprende nas salas de aulas.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Ver Mais</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Imagens/comu.jpeg" class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)" alt="">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Comunidade Estudantil.</h1>
            <p>Faça Parte da nossa comunidade de estudantes que vêm de várias partes do país.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Galeria</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="Imagens/b2.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
        <h2 class="fw-normal">Biblioteca</h2>
        <p>Encotre na nossa biblioteca todo o material didática que precisa para se dar bem em todas as disciplinas</p>
        <p><a class="btn btn-secondary" href="HTML/servico.html">Ver mais &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="Imagens/rep1.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
        <h2 class="fw-normal">Reprografia</h2>
        <p>Lhe damos aquele suporte necessário quando precisar de imprimir um trabalho escolar ou comprar algum material didático</p>
        <p><a class="btn btn-secondary" href="HTML/servico.html">Ver mais &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="Imagens/ref1.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" alt="refeição do colégio">
        <h2 class="fw-normal">Refeitorio</h2>
        <p>O nosso refeitorio oferece comida da melhor qualidade e com os melhores preços. Não vai precisar de sair da instituição para comer!</p>
        <p><a class="btn btn-secondary" href="#">Ver mais &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Abra a sua mente. <span class="text-body-secondary">Encontre aqui a melhor formação para si.</span></h2>
        <p class="lead">Temos disponível uma variedade de cursos que poderão lhe preparar para o futuro e lhe dar as habilidades que muitos desejam.</p>
      </div>
      <div class="col-md-5">
        <img src="Imagens/est2.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" ole="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"  alt="formação">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Gostas de praticar esportes?. <span class="text-body-secondary">Club de Esportes</span></h2>
        <p class="lead">Na nossa instituição temos atividade física em várias modalidades esportivas. Destaca-se o nosso club de natação que com a liderança do treinador António Júnior, trouxe para casa vários trofeus.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="Imagens/trein.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" alt="treinador">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Precisa de um reforço? <span class="text-body-secondary">Aulas de Apoio.</span></h2>
        <p class="lead">Com as nossas aulas de apoio as disciplinas deixarão de ser uma dor de cabeça. </p>
      </div>
      <div class="col-md-5">
        <img src="Imagens/estude.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false" alt="explicador">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->
  </div>
  </main>
  
  <footer>
    <!--Rodapé da pagina-->
    <!--Inclui links para as redes sociais-->
    <P>Site Criado por Manuel Sampaio| José Ulo| Hernany Zua</P>
</footer>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>