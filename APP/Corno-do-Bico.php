<?php
$titulo = '- Ceia';
require_once __DIR__ . '/Compunents/header.php';
?>



<body>

  <?php

  require_once __DIR__ . '/Compunents/navbar.php';

  ?>

  <div class="container">

    <h1 class="page-title">Corno do Bico</h1>

    <div class="container d-flex align-items-center justify-content-center mt-3 ">

      <div class="card mb-3 align-items-center ">
        <div class="row d-flex align-items-center w-100">
          <div class="col p-2">
            <img src="../../Assets/img/casas da vila.jpg" class="img-fluid rounded-start" alt="..." >
          </div>
          <div class="col-md-8 p-2">
            <div class="card-body" style="background-color:#81a05a; border: 8px solid #198754; border-radius: 1rem;">
              <h3 class="card-title">Fauna</h3>
              <p class="card-text">No corno do bico encontramos uma fauna diversificada e com isto
              refiro-me à vida animal e ao seu ambiente ou região. Podemos então
              encontrar 188 espécies de vertebrados. O destaque desta fauna é o
              lobo-ibérico ( Canis lupus signatus ), a salamandra-lusitânica (
              Chioglossa lusitanica ), , a víbora-de-seoane (Vipera seoanei), a
              toupeira-de-água (Galemys pyrenaicus) e o tartaranhão-caçador
              (Circus pygargus).</p>
              <a style="background-color: #3c6255; border: 0;" href="https://goo.gl/maps/VwYGrosbiWtKesLaA" class="btn btn-primary">Ver mais...</a>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div class="content-wrap">
      <!-- conteúdo da página aqui -->

      <div class="boxes">
        <div class="box1">
          <h1>Fauna</h1>

          <div class="text-box-1">
            <p>
              No corno do bico encontramos uma fauna diversificada e com isto
              refiro-me à vida animal e ao seu ambiente ou região. Podemos então
              encontrar 188 espécies de vertebrados. O destaque desta fauna é o
              lobo-ibérico ( Canis lupus signatus ), a salamandra-lusitânica (
              Chioglossa lusitanica ), , a víbora-de-seoane (Vipera seoanei), a
              toupeira-de-água (Galemys pyrenaicus) e o tartaranhão-caçador
              (Circus pygargus).
            </p>
          </div>
          <a href="./Fauna.html">
            <button class="button-1"><b>Ver mais...</b></button>
          </a>
        </div>
        <div class="box2">
          <h1>Flora</h1>

          </a>
          <div class="text-box-2">
            <p>
              No corno do bico encontramos uma flora diversificada ou seja um
              conjunto de plantas presentes nesta região ou ecossistema. Podemos
              encontrar 439 espécies de flora, incluindo plantas raras como o
              musgo Bruchia vogesiaca e o narciso-trombeta, manchas de
              pinhal, lameiros e uma turfeira. As espécies dominantes incluem o
              carvalho-alvarinho e o azevinho nos bosques mistos e o
              freixo-de-folha-estreita e o amieiro nos bosques ripícolas.
            </p>
          </div>
          <a href="./Flora.html">
            <button class="button-2">
              <b class="ver-mais">Ver mais...</b>
            </button>
          </a>
        </div>

        <div class="box3">
          <h1>Astrocampo</h1>

          <div class="text-box-3">
            <p>
              O AstroCamp é um projeto académico voltado para o estudo da astronomia e física, que oferece
              aos participantes uma formação de alta qualidade e inspiradora, além de um ambiente tranquilo
              e isolado. O programa é direcionado a estudantes do ensino secundário, que serão selecionados com base na sua
              motivação e desempenho académico. A participação para alunos portugueses no programa tem
              zero custos adicionais.
            </p>
          </div>
          <a href="https://astrocamp.astro.up.pt/pt/programa.html" target="_blank" rel="noopener noreferrer">
            <button class="button-3">Ver mais...</button>
          </a>
        </div>
      </div>
      <!-- Boxes end here -->
    </div>
  </div>


  <?php

  require_once __DIR__ . '/Compunents/footer.php';

  ?>