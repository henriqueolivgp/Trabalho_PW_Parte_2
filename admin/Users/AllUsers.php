<?php

require_once __DIR__ . '/../../src/middleware/middleware-administrador.php';

require_once __DIR__ . '/../../src/infrastructure/bd/user.php';

require_once __DIR__ . '/../../APP/Compunents/header.php';

$titulo = ' - Gerir Utilizadores';
require_once __DIR__ . '/../../APP/Compunents/header.php';
?>

<body>

    <div id="preloader"></div>

    <?php

    require_once __DIR__ . '/../compunents/Admin-navbar.php'

    ?>

    <h1 class="text-center p-2">Gerir Utilizadores</h1>

    <div class="container d-flex flex-column bg-light">
        <div class="content">
            <a href="/admin/Admin.php"><button type="button" class="btn btn-secondary px-5 me-2 mb-2 mt-2">Voltar</button></a>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Apelido</th>
                            <th scope="col">Telemovel</th>
                            <th scope="col">Email</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Adm.</th>
                            <th scope="col">Dono</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        $utilizadores = lerTodosUtilizadores();

                        foreach ($utilizadores as $utilizador) {
                        ?>
                            <tr>
                                <th><?php echo $utilizador['id']; ?></th>
                                <td><?php echo $utilizador['nome']; ?></td>
                                <td><?php echo $utilizador['apelido']; ?></td>
                                <td><?php echo $utilizador['telemovel']; ?></td>
                                <td><?php echo $utilizador['email']; ?></td>
                                <td><?php echo $utilizador['foto']; ?></td>
                                <td><?php echo $utilizador['administrador']; ?></td>
                                <td><?php echo $utilizador['dono']; ?></td>
                                <td>
                                    <a href="../../src/controllers/admin/controlar-utilizador.php?<?= 'utilizador=atualizar&id=' . $utilizador['id'] ?>"><button type="button" class="btn btn-info">Editar</button></a>
                                    <a href="../../src/controllers/admin/controlar-utilizador.php?<?= 'utilizador=deletar&id=' . $utilizador['id'] ?>"><button class="btn btn-danger" type="submit">Excluir</button></a>
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