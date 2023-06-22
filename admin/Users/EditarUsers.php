<?php
# CARREGA MIDDLEWARE PAGARA GARANTIR QUE APENAS UTILIZADORES AUTENTICADOS ACESSEM ESTE SITIO
require_once __DIR__ . '/../../src/middleware/middleware-utilizador.php';

# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = ' - Editar Utilizador';
//include_once __DIR__ . '/templates/cabecalho.php';

# ACESSA DE FUNÇÕES AUXILIADORAS. 
# NOTA: O SIMBOLO ARROBA SERVE PARA NÃO MOSTRAR MENSAGEM DE WARNING, POIS A FUNÇÃO ABAIXO TAMBÉM INICIA SESSÕES
@require_once __DIR__ . '/../../src/auxiliadores/auxiliador.php';
$utilizador = utilizador();

require_once __DIR__ . '/../../APP/Compunents/header.php';
?>



<body>

  <div id="preloader"></div>

  <div class=" container vh-100 bg-light">
    <div class="pt-1 ">
      <div class="p-5 mb-2 bg-info text-white">
        <h1>Registo de Utilizadores</h1>
      </div>
      <main class="bg-light">
        <section class="py-4">
          <div class="d-flex justify-content">
            <a href="/admin/Users/AllUsers.php"><button type="button" class="btn btn-secondary px-5 me-2">Voltar</button></a>
            <a href="/APP/palavra-passe.php"><button class="btn btn-warning px-2 me-2">Alterar Palavra Passe</button></a>
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
          <form enctype="multipart/form-data" action="/src/controllers/admin/controlar-utilizador.php" method="post" class="form-control py-3">
            <div class="input-group mb-3">
              <span class="input-group-text">Nome</span>
              <input type="text" class="form-control" name="nome" maxlength="100" size="100" value="<?= isset($_REQUEST['nome']) ? $_REQUEST['nome'] : null ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Apelido</span>
              <input type="text" class="form-control" name="apelido" maxlength="100" size="100" value="<?= isset($_REQUEST['apelido']) ? $_REQUEST['apelido'] : null ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">NIF</span>
              <input type="tel" class="form-control" name="nif" maxlength="9" size="9" value="<?= isset($_REQUEST['nif']) ? $_REQUEST['nif'] : null ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Telemóvel</span>
              <input type="tel" class="form-control" name="telemovel" maxlength="9" value="<?= isset($_REQUEST['telemovel']) ? $_REQUEST['telemovel'] : null ?>" required>
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">E-mail</span>
              <input type="email" class="form-control" name="email" maxlength="255" value="<?= isset($_REQUEST['email']) ? $_REQUEST['email'] : null ?>" required>
            </div>
            <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupFile01">Foto de Perfil</label>
              <input accept="image/*" type="file" class="form-control" id="inputGroupFile01" name="foto" />
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text">Palavra Passe</span>
              <input type="password" class="form-control" name="palavra_passe" maxlength="255">
            </div>
            <div class="input-group mb-3">
              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" name="administrador" role="switch" id="flexSwitchCheckChecked" <?= isset($_REQUEST['administrador']) && $_REQUEST['administrador'] == true ? 'checked' : null ?>>
                <label class="form-check-label" for="flexSwitchCheckChecked">Administrador</label>
              </div>
            </div>
            <div class="d-grid col-4 mx-auto">
              <input type="hidden" name="id" value="<?= isset($_REQUEST['id']) ? $_REQUEST['id'] : null ?>">
              <input type="hidden" name="foto" value="<?= isset($_REQUEST['foto']) ? $_REQUEST['foto'] : null ?>">
              <button type="submit" class="btn btn-success" name="utilizador" <?= isset($_REQUEST['acao']) && $_REQUEST['acao'] == 'atualizar' ? 'value="atualizar"' : 'value="criar"' ?>>Enviar</button>
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