<?php

require_once __DIR__ . '/../src/middleware/middleware-utilizador.php';

$titulo = '- Ceia';
require_once __DIR__ . '/Compunents/header.php';

require_once __DIR__ . '/../src/infrastructure/bd/user.php';
$info = lerCeia();

?>

<body>

  <div id="preloader"></div>

  <!--Navbar Start here-->

  <?php
  include_once __DIR__ . '/Compunents/navbar.php';

  ?>

  <!--Navbar finished here-->

  <body>

    <div class="container">
      <h1 class="page-title mt-4  text-center ">Ceia</h1>

      <?php
      foreach ($info as $infos) {
      ?>
        <div class="card mb-3 align-items-center ">
          <div class="row d-flex align-items-center w-100">
            <div class="col-xl-4 col-lg-5 col  p-4">
              <?php echo '<img class="img-fluid rounded-start" style="border-radius: 0.5rem;" alt="..." src="../recursos/uploadsCeia/'.$infos['img']. '">'; ?>
            </div>
            <div class="col-xl-8 col-lg-7  p-4">
              <div class="card-body" style="background-color:#81a05a; text-align:justify; border: 8px solid #198754; border-radius: 0.5rem;">
                <h3 class="card-title"><?= $infos['titulo'] ?></h3>
                <p class="card-text"><?= $infos['texto'] ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>

      <!-- Boxes end here -->
    </div>


    <?php

    include_once __DIR__ . '/Compunents/footer.php';


    ?>