<?php
# FUNÇÕES AUXILIADORAS
require_once __DIR__ . '/src/middleware/middleware-nao-autenticado.php';

include_once __DIR__ . '/APP/Compunents/header.php';
?>

<body>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!--Navbar Start here-->
  <nav style="background-color: #81a05a; height: 65PX;" class="navbar navbar-expand-lg navbar-#81a05a ">
    <div class="container-fluid">
      <a class="navbar-brand font-weight-bold text-light" href="/index.php">Vascões</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div style="background-color: #81a05a;" class="offcanvas-header text-light">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Vascões</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div style="background-color: #81a05a;" class="offcanvas-body">
          <ul class="nav navbar-nav mb-2 mb-lg-0 h5 ml-auto">
            <li class="nav-item">
              <a class="text-light" style="text-decoration: none;" href="/APP/Register.php">Register</a> <a class="text-light" style="text-decoration: none;" href="/APP/Login.php">/ Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!--Navbar finished here-->

  <h1 class="d-flex justify-content-center text-center p-4">Bem-Vindo à Aldeia de Vascões</h1>


    <!-- Mapa e Video c -->
    
    <div class="container d-flex flex-column ">
    <div class="content">
    <div class="row d-flex align-items-center">
    <div class="col-lg-6 col-12 p-2 ">
        <iframe class="mapa" style="border-radius: 0.5rem;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30406.375379111447!2d-8.521977968038772!3d41.90375041078295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd25a0166ca81ea7%3A0x500ebbde4911390!2zVmFzY8O1ZXM!5e1!3m2!1spt-PT!2spt!4v1680804396099!5m2!1spt-PT!2spt" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-lg-6 col-12 p-2 ">
        <iframe class="video" width="100%" height="315" style="border-radius: 0.5rem;" src="https://www.youtube.com/embed/4s0CmCO-R7U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

    <!-- Mapa e video acabam aqui-->

  <!-- Site footer -->
  <?php

  require_once __DIR__ . '/APP/Compunents/footer.php';

  ?>