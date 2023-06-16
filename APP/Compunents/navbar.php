<nav style="background-color: #81a05a; height: 60PX;" class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand font-weight-bold " href="#">Vascoes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 h5">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/APP/ceia.php">Ceia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/APP/Corno-do-Bico.php">Corno do bico</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/APP/Percursos-Pedestres.php">Percursos Pedestres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/APP/Bike-Park.php">Mountain Bike</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/APP/Miradouros.php">Miradouros</a>
        </li>
      </ul>
      <span class="navbar-text h5">
        <form action="../../src/controllers/aplicacao/controlar-autenticacao.php" method="post">
          <button class="btn btn-danger px-1" type="submit" name="utilizador" value="logout">Fazer Logout</button>
        </form>
      </span>
    </div>
  </div>
</nav>