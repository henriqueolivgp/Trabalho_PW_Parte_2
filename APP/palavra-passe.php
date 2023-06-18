<?php
# CARREGA MIDDLEWARE PAGARA GARANTIR QUE APENAS UTILIZADORES AUTENTICADOS ACESSEM ESTE SITIO
require_once('../src/middleware/middleware-utilizador.php');

# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = ' - Alterar Palavra Passe';
include_once __DIR__ . '/Compunents/header.php';

# ACESSA DE FUNÇÕES AUXILIADORAS. 
# NOTA: O SIMBOLO ARROBA SERVE PARA NÃO MOSTRAR MENSAGEM DE WARNING, POIS A FUNÇÃO ABAIXO TAMBÉM INICIA SESSÕES
@include_once __DIR__ . '/../src/auxiliadores/auxiliador.php';

# CARREGA O UTILIZADOR ATUAL. PROVENIENTE DE FUNÇÕES AUXILIADORAS ACIMA
$utilizador = utilizador();
?>

<body>

  <div id="preloader"></div>
  <div class="p-5 mb-2 bg-info text-white">
    <h1>Registo de Utilizadores</h1>
  </div>
  <div class="container bg-light">
    <div class="pt-1 ">

      <main class="bg-light">
        <section class="py-4">
          <a href="/APP/perfil.php"><button type="button" class="btn btn-secondary px-5">Voltar</button></a>
        </section>
        <section>
          <?php
          # MOSTRA AS MENSAGENS DE SUCESSO E DE ERRO VINDA DO CONTROLADOR-UTILIZADOR
          if (isset($_SESSION['sucesso'])) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo $_SESSION['sucesso'] . '<br>';
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            unset($_SESSION['sucesso']);
          }
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
        <section>
          <form action="/src/controllers/admin/controlar-utilizador.php" method="post" >
            <div class="input-group mb-3">
              <span class="input-group-text">Nome</span>
              <input type="text" readonly class="form-control" name="nome" placeholder="<?= $utilizador['nome'] ?>" value="<?= $utilizador['nome'] ?>">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Palavra Passe</span>
              <input type="password" class="form-control" name="palavra_passe" maxlength="255" size="255" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Confirme a Palavra Passe</span>
              <input type="password" class="form-control" name="confirmar_palavra_passe" maxlength="255" required>
            </div>
            <div class="d-grid col-4 mx-auto">
              <button class="w-100 btn btn-lg btn-success mb-2" type="submit" name="utilizador" value="palavra_passe">Alterar</button>
            </div>
          </form>
        </section>
      </main>
    </div>
  </div>

  <!-- Site footer -->
  <footer class="site-footer fixed-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Website realizado com base na matéria aprendida nas aulas de Programação Web. Se desejar ver o nosso Repositório do GitHub ou o nosso perfil do GitHub basta carregar em Repositório ou no nosso nome</p>
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