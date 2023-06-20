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

    <?php

    require_once __DIR__ . '/../../APP/Compunents/footer.php'

    ?>