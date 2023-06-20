<?php

require_once __DIR__ . '/../../src/middleware/middleware-administrador.php';

require_once __DIR__ . '/../../src/infrastructure/bd/user.php';

require_once __DIR__ . '/../../APP/Compunents/header.php';

?>

<body>

    <?php

    require_once __DIR__ . '/../compunents/Admin-navbar.php'

    ?>

    <h1 class="text-center">Gerenciar Usuários</h1>

    <div class="container d-flex flex-column">
        <div class="content">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Apelido</th>
                            <th scope="col">NIF</th>
                            <th scope="col">Telemovel</th>
                            <th scope="col">Email</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Adm.</th>
                            <th scope="col">Dono</th>
                            <th scope="col">PW</th>
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
                                <td><?php echo $utilizador['nif']; ?></td>
                                <td><?php echo $utilizador['telemovel']; ?></td>
                                <td><?php echo $utilizador['email']; ?></td>
                                <td><?php echo $utilizador['foto']; ?></td>
                                <td class="w-auto"><?php echo $utilizador['administrador']; ?></td>
                                <td><?php echo $utilizador['dono']; ?></td>
                                <td class="text-truncate" style="max-width: 200px;"><?php echo $utilizador['palavra_passe']; ?></td>
                                <td>
                                    <button class="btn btn-info" href="editar.php?id=<?php echo $utilizador['id']; ?>">Editar</button>
                                    <button class="btn btn-danger" href="excluir.php?id=<?php echo $utilizador['id']; ?>">Excluir</button>
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