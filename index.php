<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Builder</title>

  <link rel="stylesheet" href="_cdn/css/bootstrap_person.css">
  <link rel="stylesheet" href="_cdn/css/app.css">
</head>

<body>

  <header class="main_header">

    <div class="header_bar bg-front">
      <div class="container">
        <dix class="row justify-content-around">
          <div class="d-none d-lg-flex col-lg-4 justify-content-center align-items-center p-2 text-white">
            <i class="icon-location-arrow"></i>
            <p class="my-auto mx-3">Avenida Pequeno Principe, 0 Campeche<br />Florianópolis/SC</p>
          </div>
          <div class="d-none d-md-flex col-md-6 col-lg-4 justify-content-center align-items-center p-2 text-white">
            <i class="icon-clock-o"></i>
            <p class="my-auto mx-3">Seg/Sex: 09:00h - 18:00h<br />Sáb/Dom: Plantão</p>
          </div>
          <div class="d-flex col-4 col-md-6 col-lg-4 justify-content-center align-items-center p-2 text-white">
            <i class="icon-envelope"></i>
            <p class="my-auto mx-3">contato@email.com.br<br />+55 (85) 3479-1922</p>
          </div>
        </dix>
      </div>
    </div>
<nav class="navbar navbar-expand-md navbar-light my-3">
  <div class="container">
    <div class="navbar-brand">
      <a href="index.php">
        <h1 class="d-none">Imobiliária</h1>
        <img src="assets/images/logo.png" alt="" class="d-inline-block" width="280">
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link text-front" href="#">Destaque</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Alugar</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Comprar</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>
  </header>

  <?php
    $getApp = filter_input(INPUT_GET, 'app',FILTER_SANITIZE_STRIPPED);
    if(empty($getApp)){
      require 'widget/home.php';
    }elseif(!empty($getApp) && file_exists('widget/'. $getApp . '.php')){
      require 'widget/'. $getApp . '.php';
    }else {
      'Oooops, erro no app informado!';
    }
  ?>

  <article class="main_optin bg-dark text-white py-5">
    <div class="container">
      <div class="row mx-auto" style="max-width: 600px;">
        <h1>Quer ficar por dentro das novidades?</h1>
        <p>Deixe seu nome e seu melhor e-mail nos campos abaixo e nós vamos lhe informar sobre os melhores 
          negócios e todos os lançamentos do sul da ilha</p>

        <form action="">
          <input type="text" class="form-control" placeholder="Digite seu nome" size="50">
          <input type="email" class="form-control" placeholder="Digite seu melhor e-email" size="50">
          <button type="submit" class="btn btn-front">Me avise!</button>
        </form>
      </div>
    </div>
  </article>

  <section class="main_footer bg-light" style="background: url(assets/images/footer.png) repeat-x bottom center; background-size: 10%;">
    <div class="container pt-5" style="padding-bottom: 120px;">
      <div class="row justify-content-around text-muted">
        <div class="col-12 col-md-3 col-lg-3">
          <h1 class="pb-2">Navegue <span class="text-front">Aqui!</span></h1>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#" class="text-front">Destaque</a></li>
            <li><a href="#">Alugar</a></li>
            <li><a href="#">Comprar</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-9 col-lg-6">
          <h1 class="pb-2">Nós <span class="text-front">Conheça!</span></h1>
          <p>Nossa maior satisfação é lhe ajudar a encontrar seu imóvel dos sonhos nos bairros do Sul da Ilha da Magia, Florianópolis.</p>

          <h1 class="pb-2">Quer <span class="text-front">Investir?</span></h1>
          <p>Entre em contato com a nossa equipe e vamos lhe informar sempre sobre os melhores negócios.</p>
        </div>
        <div class="col-12 col-md-12 col-lg-3">
          <button class="btn btn-front icon-facebook icon-notext"></button>
          <button class="btn btn-front icon-twitter icon-notext"></button>
          <button class="btn btn-front icon-instagram icon-notext"></button>
        </div>
      </div>
    </div>
  </section>

  <div class="main_copyright py-3 bg-front text-white text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="mb-0">Imobiliaria | CRECI 1234 | Avenida Pequeno Principe, 0 - Campeche - Florianópolis/SC</p>
          <p class="mb-0">Todos dos Direitos Reservados &copysr;</p>
        </div>
      </div>
    </div>
  </div>

  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="node_modules/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
  <script src="node_modules/bootstrap-select/dist/js/i18n/defaults-pt_BR.min.js"></script>
</body>
</html>