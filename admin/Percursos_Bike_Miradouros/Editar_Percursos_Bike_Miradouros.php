<?php
# CARREGA MIDDLEWARE PAGARA GARANTIR QUE APENAS UTILIZADORES AUTENTICADOS ACESSEM ESTE SITIO
require_once __DIR__ . '/../../src/middleware/middleware-administrador.php';

# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = ' - Editar Utilizador';
//include_once __DIR__ . '/templates/cabecalho.php';
require_once __DIR__ . '/../../src/infrastructure/bd/user.php';

$info = Percursos_Bike_Miradouros();

require_once __DIR__ . '/../../APP/Compunents/header.php';
?>



<body>

  <div id="preloader"></div>

  <div class=" container vh-100 bg-light">
    <div class="pt-1 ">
      <div class="p-5 mb-2 bg-info text-white">
        <h1>Registo de Percursos_Bike_Miradouros</h1>
      </div>
      <main class="bg-light">
        <section class="py-4">
          <div class="d-flex justify-content">
            <a href="/admin/Percursos_Bike_Miradouros/All_Percursos_Bike_Miradouros.php"><button type="button" class="btn btn-secondary px-5 me-2">Voltar</button></a>
          </div>
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
        <section>
 
          <form enctype="multipart/form-data" action="/src/controllers/admin/controlar-Percursos.php" method="post" class="form-control py-3">
          <div class="input-group mb-3">
              <span class="input-group-text">Titulo</span>
              <input type="text" class="form-control" name="titulo" maxlength="100" size="100" value="<?= isset($_REQUEST['titulo']) ? $_REQUEST['titulo'] : null ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Texto</span>
              <input type="text" class="form-control" name="texto" maxlength="100" size="100" value="<?= isset($_REQUEST['texto']) ? $_REQUEST['texto'] : null ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Links</span>
              <input type="text" class="form-control" name="links" maxlength="100" size="100" value="<?= isset($_REQUEST['links']) ? $_REQUEST['links'] : null ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Categoria</span>
              <input type="text" class="form-control" name="categoria" maxlength="100" size="100" value="<?= isset($_REQUEST['categoria']) ? $_REQUEST['categoria'] : null ?>" required>
            </div>
            <div class="d-grid col-4 mx-auto">
              <input type="hidden" name="id" value="<?= isset($_REQUEST['id']) ? $_REQUEST['id'] : null ?>">
              <input type="hidden" name="foto" value="<?= isset($_REQUEST['img']) ? $_REQUEST['img'] : null ?>">
              <button type="submit" class="btn btn-success" name="info" <?= isset($_REQUEST['acao']) && $_REQUEST['acao'] == 'atualizar' ? 'value="atualizar"' : 'value="criar"' ?>>Enviar</button>
            </div>
          </form>
        </section>
    </div>
  </div>
  <div class="">
    <?php
    include_once __DIR__ . '/../../APP/Compunents/footer.php';
    ?>
  </div>