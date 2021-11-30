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
        <dix class="row">
          <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
            <i class="icon-location-arrow"></i>
            <p class="my-auto mx-3">Avenida Pequeno Principe, 0 Campeche<br />Florianópolis/SC</p>
          </div>
          <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
            <i class="icon-clock-o"></i>
            <p class="my-auto mx-3">Seg/Sex: 09:00h - 18:00h<br />Sáb/Dom: Plantão</p>
          </div>
          <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
            <i class="icon-envelope"></i>
            <p class="my-auto mx-3">contato@email.com.br<br />+55 (85) 3479-1922</p>
          </div>
        </dix>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    
  </header>

  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  
</body>

</html>