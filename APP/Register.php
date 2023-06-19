<?php
# MIDDLEWARE PARA GARANTIR QUE APENAS UTILIZADORES NÃO AUTENTICADOS VEJAM A PÁGINA DE REGISTO
require_once __DIR__ . '/../src/middleware/middleware-nao-autenticado.php';

# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = '- Registro';
include_once __DIR__ . '/Compunents/header.php';
?>

<body>

    <div id="preloader"></div>

    <main>
        <!--Navbar Start here-->
        <nav style="background-color: #81a05a; height: 65PX;" class="navbar navbar-expand-lg navbar-#81a05a ">
            <div class="container-fluid">
                <a class="navbar-brand font-weight-bold text-light" href="/index.php">Vascoes</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div style="background-color: #81a05a;" class="offcanvas-header text-light">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Vascoes</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div style="background-color: #81a05a;" class="offcanvas-body">
                        <ul class="nav navbar-nav mb-2 mb-lg-0 h5 ml-auto">
                            <li class="nav-item">
                                <a class="text-light" style="text-decoration: none;" href="/APP/Register.php">Register</a> <a class="text-light" style="text-decoration: none;" href="/APP/Login.php">/ login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container vh-100 d-flex align-items-center justify-content-center text-center bg-light">
            <div class="w-75">
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
                <form action="/src/controllers/aplicacao/controlar-registo.php" method="post">
                    <h1 class="h3 mb-3 fw-normal">REGISTRO CRUD PHP</h1>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="nome" placeholder="nome" maxlength="100" size="100" value="<?= isset($_REQUEST['nome']) ? $_REQUEST['nome'] : null ?>" required>
                        <label for="nome">Nome:</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" value="<?= isset($_REQUEST['email']) ? $_REQUEST['email'] : null ?>">
                        <label for="floatingInput">Endereço de Email:</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="palavra_passe" name="palavra_passe" placeholder="Palavra passe">
                        <label for="palavra_passe">Palavra Passe:</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="password" class="form-control" id="confirmar_palavra_passe" name="confirmar_palavra_passe" placeholder="Confirmar palavra passe">
                        <label for="confirmar_palavra_passe">Confirmar Palavra Passe:</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-success mb-2" type="submit" name="utilizador" value="registo">Registar</button>
                </form>
                <a href="/index.php"><button class="w-100 btn btn-lg btn-info">Voltar</button></a>
            </div>
        </div>
    </main>
    <?php
    include_once __DIR__ . '/Compunents/footer.php';
    ?>