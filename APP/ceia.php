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
            <img src="../recursos/IMG/Astrocamp_Square.png" class="img-fluid rounded-start" style="border-radius: 0.5rem;" alt="...">
          </div>
          <div class="col-xl-8 col-lg-7  p-4">
            <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 0.5rem;">
              <h3 class="card-title">Astrocampo</h3>
              <p class="card-text">O AstroCamp é um projeto académico voltado para o estudo da astronomia e física, que oferece
                aos participantes uma formação de alta qualidade e inspiradora, além de um ambiente tranquilo
                e isolado. O programa é direcionado a estudantes do ensino secundário, que serão selecionados com base na sua
                motivação e desempenho académico. A participação para alunos portugueses no programa tem
                zero custos adicionais.</p>
              <a style="background-color: #3c6255; border: 0;" href="https://astrocamp.astro.up.pt/pt/programa.html" target="_blank" class="btn btn-primary">Ver mais...</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 align-items-center ">
        <div class="row d-flex align-items-center w-100">
          <div class="col-xl-4 col-lg-5 col  p-4">
            <img src="../recursos/IMG/ceia/CEIA.png" class="img-fluid rounded-start" style="border-radius: 0.5rem;" alt="...">
          </div>
          <div class="col-xl-8 col-lg-7  p-4">
            <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 0.5rem;">
              <h3 class="card-title">Astrocampo</h3>
              <p class="card-text">O AstroCamp é um projeto académico voltado para o estudo da astronomia e física, que oferece
                aos participantes uma formação de alta qualidade e inspiradora, além de um ambiente tranquilo
                e isolado. O programa é direcionado a estudantes do ensino secundário, que serão selecionados com base na sua
                motivação e desempenho académico. A participação para alunos portugueses no programa tem
                zero custos adicionais.</p>
              <a style="background-color: #3c6255; border: 0;" href="https://astrocamp.astro.up.pt/pt/programa.html" target="_blank" class="btn btn-primary">Ver mais...</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3 align-items-center ">
        <div class="row d-flex align-items-center w-100">
          <div class="col-xl-4 col-lg-5 col  p-4">
            <img src="../recursos/IMG/Astrocamp_Square.png" class="img-fluid rounded-start" style="border-radius: 0.5rem;" alt="...">
          </div>
          <div class="col-xl-8 col-lg-7  p-4">
            <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 0.5rem;">
              <h3 class="card-title">Astrocampo</h3>
              <p class="card-text">O AstroCamp é um projeto académico voltado para o estudo da astronomia e física, que oferece
                aos participantes uma formação de alta qualidade e inspiradora, além de um ambiente tranquilo
                e isolado. O programa é direcionado a estudantes do ensino secundário, que serão selecionados com base na sua
                motivação e desempenho académico. A participação para alunos portugueses no programa tem
                zero custos adicionais.</p>
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