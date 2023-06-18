<?php

require_once __DIR__ . '/../src/middleware/middleware-utilizador.php';

$titulo = '- Ceia';
require_once __DIR__ . '/Compunents/header.php';

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
      <!-- conteúdo da página aqui -->
      <div class="card mb-3 align-items-center ">
        <div class="row d-flex align-items-center w-100">
          <div class="col-xl-4 col-lg-5 col  p-4">
            <img src="../recursos/IMG/ceia/CEIA.png" class="img-fluid rounded-start" style="border-radius: 0.5rem;" alt="...">
          </div>
          <div class="col-xl-8 col-lg-7  p-4">
            <div class="card-body" style="background-color:#81a05a; text-align:justify; border: 8px solid #198754; border-radius: 0.5rem;">
              <h3 class="card-title">Ceia</h3>
              <p class="card-text">No Centro de Educação e Interpretação Ambiental, são oferecidas atividades que permitem aos participantes entrar em contato com a riqueza natural da Paisagem Protegida do Corno de Bico. Essas atividades visam estimular todos os sentidos, desde o olfato até o paladar.</p>
              <a style="background-color: #3c6255; border: 0;" href="https://astrocamp.astro.up.pt/pt/programa.html" target="_blank" class="btn btn-primary">Ver mais...</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 align-items-center ">
        <div class="row d-flex align-items-center w-100">
          <div class="col-xl-4 col-lg-5 col  p-4">
            <img src="../recursos/IMG/ceia/laboratorio-rural1.png" class="img-fluid rounded-start" style="border-radius: 0.5rem;" alt="...">
          </div>
          <div class="col-xl-8 col-lg-7  p-4">
            <div class="card-body" style="background-color:#81a05a; text-align:justify; border: 8px solid #198754; border-radius: 0.5rem;">
              <h3 class="card-title">Laboratório rural</h3>
              <p class="card-text">Laboratório Rural é o nome do novo projeto colaborativo que envolve nove entidades de Portugal e Espanha, tendo o município de Paredes de Coura como sede. O objetivo deste projeto é fomentar a inovação e o desenvolvimento rural, com destaque especial para a Paisagem Protegida do Corno de Bico.</p>
              <a style="background-color: #3c6255; border: 0;" href="https://astrocamp.astro.up.pt/pt/programa.html" target="_blank" class="btn btn-primary">Ver mais...</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 align-items-center ">
        <div class="row d-flex align-items-center w-100">
          <div class="col-xl-4 col-lg-5 col  p-4">
            <img src="../recursos/IMG/ceia/Alojamento.jpg" class="img-fluid rounded-start" style="border-radius: 0.5rem;" alt="...">
          </div>
          <div class="col-xl-8 col-lg-7  p-4">
            <div class="card-body" style="background-color:#81a05a; text-align:justify; border: 8px solid #198754; border-radius: 0.5rem;">
              <h3 class="card-title">Alojamento</h3>
              <p class="card-text"> O Ceia dispõe de um centro de acolhimento com camaratas femininas e masculinas, com capacidade para 40 pessoas e de cantina e sala de refeições.
              </p>
              <a style="background-color: #3c6255; border: 0;" href="https://astrocamp.astro.up.pt/pt/programa.html" target="_blank" class="btn btn-primary">Ver mais...</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Boxes end here -->
    </div>


    <?php

    include_once __DIR__ . '/Compunents/footer.php';


    ?>