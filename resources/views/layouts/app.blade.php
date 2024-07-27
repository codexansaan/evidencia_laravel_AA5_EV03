<html>
    <head>
        <title>Productos - @yield('producto')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        @vite(['resources/css/app.css'])
        <link rel="stylesheet" href="public/css/stylesheet.css">

    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg Rounded-3">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Boulevar de las Frutas</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/productos">Productos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Galeria</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Actividades
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                          <li><a class="dropdown-item" href="#">Blog</a></li>
                          <li><a class="dropdown-item" href="#">Contacto</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Turismo local</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Responsabilidad Social</a>
                      </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                      <button class="btn btn-outline-light" type="submit">Buscar</button>
                    </form>
                  </div>
                </div>
              </nav>


            @yield('content')
          

            <footer class="footer Rounded-3">
                <div class="container">
                    <div class="row">
                        <!-- Sección de enlaces -->
                        <div class="col-md-4">
                            <h5>Enlaces</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Inicio</a></li>
                                <li><a href="/productos">Productos</a></li>
                                <li><a href="#">Contacto</a></li>
                                <li><a href="#">Acerca de</a></li>
                            </ul>
                        </div>
                        <!-- Sección de contacto -->
                        <div class="col-md-4">
                            <h5>Contacto</h5>
                            <ul class="list-unstyled">
                                <li><a href="mailto:info@example.com">boulevarfrutas@hotmail.com</a></li>
                                <li><a href="tel:+1234567890">+593 96 717 9114</a></li>
                                <li><a href="https://maps.app.goo.gl/89sodtLFuspYqgXA8">Ubicación</a></li>
                            </ul>
                        </div>
                        <!-- Sección de redes sociales -->
                        <div class="col-md-4">
                            <h5>Síguenos</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">LinkedIn</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <p class="mb-0">&copy; 2024 Boulevar de las Frutas. Todos los derechos reservados.</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        @vite(['resources/js/app.js'])
    </body>
</html>
