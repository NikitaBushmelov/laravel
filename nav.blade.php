<html>  
  <head>  
  <title>Llibreria</title>  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>  
  <body>  

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Navegación de palanca">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/llibre/mostrar">Mostrar Llibres</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/usuari/mostrar">Mostrar Usuari</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/prestec/mostrar">Mostrar Prestec</a>
            
          </ul>
        </div>
      </nav>
      @yield('content')<!--els yields són per afegir contingut, el content es el nom de la variable-->