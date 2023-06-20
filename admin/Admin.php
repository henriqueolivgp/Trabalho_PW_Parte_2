<?php
# NOTA: O FORMULÁRIO UTILIZADOR ESTÁ SENDO USADO PARA CRIAÇÃO E ALTERAÇÃO DE UTILIZADORES
# PARA ISSO FUNCIONAR, EXISTE UM TRATAMENTO VIA GET/REQUEST ALTERANDO O VALOR DO BOTÃO DE NOME name="utilizador" 

# CARREGA MIDDLEWARE PAGARA GARANTIR QUE APENAS UTILIZADORES ACESSE O SITIO
require_once __DIR__ . '/../src/middleware/middleware-administrador.php';

# ACESSA DE FUNÇÕES AUXILIADORAS. 
# NOTA: O SIMBOLO ARROBA SERVE PARA NÃO MOSTRAR MENSAGEM DE WARNING, POIS A FUNÇÃO ABAIXO TAMBÉM INICIA SESSÕES
@require_once __DIR__ . '/../src/auxiliadores/auxiliador.php';

# PROVENIENTE DE FUNÇÕES AUXILIADORAS. CARREGA O UTILIZADOR ATUAL
$utilizador = utilizador();

# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = ' - Utilizador';
require_once __DIR__ . '/../APP/Compunents/header.php';
?>

<body>

    <div id="preloader"></div>

    <?php

    require_once __DIR__ . '/compunents/Admin-navbar.php'

    ?>

    <div class="p-4 mb-2 text-dark">
        <h1 class="text-center">O admin "<?= $utilizador['nome'] ?? null ?>" acedeu ao painel <br> de controlo</h1>
    </div>

    <div class="container mb-4 d-flex vw-100">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="card me-4 " style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Utilizadores</h5>
                    <p class="card-text">Aqui o administrador podera editar os usuarios</p>
                    <a href="/admin/Users/RegisterUsers.php" class="card-link text-decoration-none">Registar</a>
                    <a href="/admin/Users/AllUsers.php" class="card-link text-decoration-none">Atualizar/Apagar</a>
                </div>
            </div>
            <div class="card me-4 mt-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">CEIA Page</h5>
                    <p class="card-text">O administrador aqui podera fazer a insercao, atualizacao, apagar todas as informacoes</p>
                    <a href="#" class="card-link text-decoration-none">Inserir</a>
                    <a href="#" class="card-link text-decoration-none">Atualizar/Apagar</a>
                </div>
            </div>
            <div class="card me-4 mt-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Corno do Bico Page</h5>
                    <p class="card-text">O administrador aqui podera fazer a insercao, atualizacao, apagar todas as informacoes</p>
                    <a href="#" class="card-link text-decoration-none">Inserir</a>
                    <a href="#" class="card-link text-decoration-none">Atualizar</a>
                    <a href="#" class="card-link text-decoration-none">Apagar</a>
                </div>
            </div>
            <div class="card me-4 mt-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link text-decoration-none">Inserir</a>
                    <a href="#" class="card-link text-decoration-none">Atualizar</a>
                    <a href="#" class="card-link text-decoration-none">Apagar</a>
                </div>
            </div>
            <div class="card me-4 mt-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link text-decoration-none">Inserir</a>
                    <a href="#" class="card-link text-decoration-none">Atualizar</a>
                    <a href="#" class="card-link text-decoration-none">Apagar</a>
                </div>
            </div>
            <div class="card me-4 mt-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link text-decoration-none">Inserir</a>
                    <a href="#" class="card-link text-decoration-none">Atualizar</a>
                    <a href="#" class="card-link text-decoration-none">Apagar</a>
                </div>
            </div>
            <div class="card me-4 mt-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link text-decoration-none">Inserir</a>
                    <a href="#" class="card-link text-decoration-none">Atualizar</a>
                    <a href="#" class="card-link text-decoration-none">Apagar</a>
                </div>
            </div>
        </div>

    </div>

    <?php

    require_once __DIR__ . '/../APP/Compunents/footer.php';

    ?>