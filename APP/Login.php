<?php
# MIDDLEWARE PARA GARANTIR QUE APENAS UTILIZADORES NÃO AUTENTICADOS VEJAM A PÁGINA DE LOGIN
require_once __DIR__ . '/../src/middleware/middleware-nao-autenticado.php';

# INICIA CABECALHO
$titulo = '- Login';
include_once __DIR__ . '/Compunents/header.php';
?>

<body>

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

  <div class="container d-flex flex-column">
    <div class="content d-flex align-items-center justify-content-center text-center bg-light">
      <div class="w-75">
        <main>
          <section>
            <?php
            # MOSTRA AS MENSAGENS DE ERRO CASO LOGIN SEJA INVÁLIDO
            if (isset($_SESSION['erros'])) {
              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
              foreach ($_SESSION['erros'] as $erro) {
                echo $erro . '<br>';
              }
              echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
              unset($_SESSION['erros']);
            }
            ?>
          </section>
          <form action="/src/controllers/aplicacao/controlar-autenticacao.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Login</h1>
            <div class="form-floating mb-2">
              <input type="email" class="form-control" id="Email" placeholder="Email" name="email" maxlength="255" value="<?= isset($_REQUEST['email']) ? $_REQUEST['email'] : null ?>">
              <label for="Email">Endereço de Email</label>
            </div>
            <div class="form-floating mb-2">
              <input type="password" class="form-control" id="palavra_passe" placeholder="Palavra Passe" name="palavra_passe" maxlength="255" value="<?= isset($_REQUEST['palavra_passe']) ? $_REQUEST['palavra_passe'] : null ?>">
              <label for="palavra_passe">Palavra Passe</label>
            </div>
            <div class="checkbox mb-3">
              <label><input type="checkbox" value="lembra-me"> Lembrar-me</label>
            </div>
            <button class="w-100 btn btn-lg btn-success mb-2" type="submit" name="utilizador" value="login">Entrar</button>
          </form>
          <a href="/"><button class="w-100 btn btn-lg btn-info">Voltar</button></a>
        </main>
      </div>
    </div>

  </div>

  <!-- Site footer -->
  <footer class="site-footer footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Website realizado com base na matéria aprendida nas aulas de Programação Web. Se desejar ver o nosso Repositório do GitHub ou o nosso perfil do mesmo, basta carregar em Repositório ou no nosso nome.</p>
          <p>Trabalho lecionado pelos professores: António José Viana, Marcelo Antunes Fernandes e Wenderson Wanzeller.</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Link</h6>
          <ul class="footer-links">
            <li><a style="text-decoration: none;" href="https://github.com/henriqueolivgp/Trabalho_PW_Parte_2" target="_blank">Repositório</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2023 Este trabalho foi realizado por
            <a style="text-decoration: none;" href="https://github.com/henriqueolivgp" target="_blank">Henrique Oliveira</a> e <a style="text-decoration: none;" href="https://github.com/pedrof04" target="_blank">Pedro Ferreira</a>.
          </p>
        </div>
      </div>
    </div>
  </footer>

  <script>
    var loader = document.getElementById("preloader");

    window.addEventListener("load", function() {
      loader.style.display = "none";
    })
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>