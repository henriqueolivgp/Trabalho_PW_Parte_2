<?php 

require_once __DIR__ . '/../../src/controllers/admin/admin-controler.php';

?>

<nav style="background-color: #81a05a; height: 65PX;" class="navbar navbar-expand-lg navbar-#81a05a ">
  <div class="container-fluid">
    <a class="navbar-brand font-weight-bold text-light " href="/APP/index.php">Vascões</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>  
    <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div style="background-color: #81a05a;" class="offcanvas-header text-light">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Vascões</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div style="background-color: #81a05a;" class="offcanvas-body">
        <ul class="navbar-nav justify-content-start flex-grow-1 h5 ">
          <li class="nav-item">
            <a class="nav-link text-light" aria-current="page" href="/APP/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/APP/ceia.php">CEIA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/APP/Corno-do-Bico.php">Corno do Bico</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/APP/Percursos-Pedestres.php">Percursos Pedestres</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/APP/Bike-Park.php">Mountain Bike</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/APP/Miradouros.php">Miradouros</a>
          </li>
        </ul>
        <ul class="nav navbar-nav mb-lg-0">
        <li class="nav-item me-2">
            <a href="/admin/Admin.php">
              <button <?php  if ($isAdmin ? true : false) { echo 'style="display: none;"'; } ?>  class="btn btn-warning" type="button">Control Panel</button>
            </a>
          </li>
          <li class="nav-item">
            <a href="/APP/perfil.php">
              <button class="btn btn-secondary" type="button">Edit Profile</button>
            </a>
          </li>
          <li class="nav-item">
            <form action="../../src/controllers/aplicacao/controlar-autenticacao.php" method="post">
              <button class="btn btn-danger ms-2" type="submit" name="utilizador" value="logout">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>