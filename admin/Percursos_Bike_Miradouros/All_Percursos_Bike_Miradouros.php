<?php

require_once __DIR__ . '/../../src/middleware/middleware-administrador.php';

require_once __DIR__ . '/../../src/infrastructure/bd/user.php';

$titulo = ' - Gerir Informações';
require_once __DIR__ . '/../../APP/Compunents/header.php';
?>

<body>

    <div id="preloader"></div>

    <?php

    require_once __DIR__ . '/../compunents/Admin-navbar.php'

    ?>

    <h1 class="text-center p-2">Gerir Informações da Página</h1>

    <div class="container d-flex flex-column bg-light">
        <div class="content">
            <a href="/admin/Admin.php"><button type="button" class="btn btn-secondary px-5 me-2 mb-2 mt-2">Voltar</button></a>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Img</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Texto</th>
                            <th scope="col">Links</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $InfoPercursos_Bike_Miradouros = lerPercursos();

                        foreach ($InfoPercursos_Bike_Miradouros as $Infopercursos) {
                        ?>
                            <tr>
                                <th><?php echo $Infopercursos['id']; ?></th>
                                <td><?php echo $Infopercursos['img']; ?></td>
                                <td><?php echo $Infopercursos['titulo']; ?></td>
                                <td><?php echo $Infopercursos['texto']; ?></td>
                                <td><?php echo $Infopercursos['links']; ?></td>
                                <td><?php echo $Infopercursos['categoria']; ?></td>
                                <td>
                                    <a href="../../src//controllers//admin/controlar-Percursos.php?<?= 'info=atualizar&id=' . $Infopercursos['id'] ?>">
                                        <button type="button" class="btn btn-info">Editar</button>
                                    </a>

                                    <a href="../../src/controllers/admin/controlar-Percursos.php?<?= 'info=deletar&id=' . $Infopercursos['id'] ?>"><button class="btn btn-danger" type="submit">Excluir</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <?php

    require_once __DIR__ . '/../../APP/Compunents/footer.php'

    ?>